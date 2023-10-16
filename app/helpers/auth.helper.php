<?php

class AuthHelper {
    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user) {
        //$usuario = $this->modelo->obtenerPorEmail($user);
        AuthHelper::init();
            $_SESSION['USER_ID'] = $user->id; 
            $_SESSION['USER_EMAIL'] = $user->email; 
            //$_SESSION['USER_EMAIL'] = $user->password; 

        } 


    //lo que hace este if es que si ya esta la session empezada  no la vuelva a comenzar
    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }
    

    
    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }
}