<?php
/**
 * Created by PhpStorm.
 * User: sts
 * @author: Chris Merrari
 * Date: 01/08/15
 * Time: 22:57
 */

class Jabatan extends Eloquent {

    protected $table = 't_jabatan';
    public    $primaryKey = 'jabatan_id';
    public    $timestamps   = false;

}