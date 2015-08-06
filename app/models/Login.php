<?php
/**
 * Created by PhpStorm.
 * User: sts
 * @author: Widana Nur Azis
 * Date: 01/08/15
 * Time: 13:55
 */

    class Login extends Eloquent {

        protected $table = 't_user';
        public    $primaryKey = 'user_id';
        public    $timestamps = false;




    }