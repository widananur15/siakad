<?php
/**
 * Created by PhpStorm.
 * User: sts
 * @author: Chris Merrari
 * Date: 01/08/15
 * Time: 22:57
 */

class Guru extends Eloquent {

    protected $table = 't_guru';
    public    $primaryKey = 'guru_id';
    public    $timestamps   = false;

}