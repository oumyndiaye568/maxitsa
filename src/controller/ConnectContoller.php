<?php
namespace App\Controllers;
use App\service\SecurityService;
class ConnectController extends AbstractController {

    public function __construct (){
        $this->layout="account.layout.php";
        $this->SecurityService = new SecurityService();
    }
    public function account ()
     {    
        $this->render("account.html");
        require_once '../template/account/account.html.php';
     }
     public function count ()
     {
       $this->render("account/account.html");
     }
}

 