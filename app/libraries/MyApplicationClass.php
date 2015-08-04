<?php 
// MyApplicationClass.php file 
class MyApplicationClass extends Illuminate\Foundation\Application 
{
    public function bindInstallPaths(array $paths)
    {
        if (isset($_SERVER['APPLICATION_ID']) && !empty($_SERVER['APPLICATION_ID'])) { 
            if (realpath($paths['app'])) {
                $this->instance('path', realpath($paths['app']));
            }
            elseif (file_exists($paths['app'])) {
                $this->instance('path', $paths['app']);
            }
            else {
                $this->instance('path', FALSE);
            }

            foreach (array_except($paths, array('app')) as $key => $value)
            {
                if (realpath($value)) {
                    $this->instance("path.{$key}", realpath($value));
                }
                elseif (file_exists($value)) {
                    $this->instance("path.{$key}", $value);
                }
                else {
                    $this->instance("path.{$key}", FALSE);
                }
            }
        } else {
            parent::{__FUNCTION__}($paths);
        }
    }
}