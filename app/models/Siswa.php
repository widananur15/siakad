<?php
/**
 * Created by PhpStorm.
 * User: sts
 * @author: Widana Nur Azis
 * Date: 01/08/15
 * Time: 22:57
 */

    class Siswa extends Eloquent {

        protected $table = 't_siswa';
        public    $primaryKey = 'siswa_id';
        public    $timestamps   = false;

    }