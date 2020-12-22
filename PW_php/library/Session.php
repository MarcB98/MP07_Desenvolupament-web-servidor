<?php

class Session{

    static function star()
    {
        @session_start();
    }

    static function getSession($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        
    }

    static function setSession($name,$data)
    {
        return $_SESSION[$name] = $data;
    }

    static function destroy()
    {
        @session_destroy();
    }

}

?>