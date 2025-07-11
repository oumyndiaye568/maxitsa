<?php
namespace App\Controllers;
use  App\Core\Abstract\AbstractController;

class SecurityController extends AbstractController {
    public function __construct ()
    {
         $this->layout="security.layout.php";
    }
     public function login ()
     {    
        $this->render("login.html");
     }
     public function create ()
     {
       $this->render("create/create.html");
     }

      public function show ()
     {
       $this->render("account/account.html");
     }
}