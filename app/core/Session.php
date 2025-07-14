<?php
namespace App\Core;

class Session {
    private static ?Session $instance = null;
    public function __construct() {
        session_start();
    }
    public  function set ($key ,$data)
     {
        $_SESSION[$key] = $data;
     }

    public  function get ($key) 
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public  function unset ($key)
     {
        unset($_SESSION[$key]);
     }

    public  function isset ($key) 
    {
        return isset($_SESSION[$key]);
    }
   public  function destroy ($key) 
   {
    unset($_SESSION[$key]);
   }
   public static function getinstance () 
   {
    if (is_null(self::$instance)) {
        self::$instance = new self();
   }
   return self::$instance;
}
}