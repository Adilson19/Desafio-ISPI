<?php
    namespace App\Interfaces;

    interface AuthRepositoyInterface{
        public function login(array $data, $remember):bool;
        public function logout():void;
    }
?>
