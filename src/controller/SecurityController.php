<?php
namespace App\Controllers;
use  App\Core\Abstract\AbstractController;
use App\Service\SecurityService;
use App\Core\Session;

class SecurityController extends AbstractController {
   private SecurityService $securityService;
   private Session $session;
    public function __construct ()
    {
         $this->layout="security.layout.php";
         $this->securityService = new SecurityService();
         $this->session = Session::getinstance();   
    }
    
     public function login ()
     {    
        $error = null;
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $numerotelephone= $_POST['numerotelephone']?? null;
            $password= $_POST['password']?? null;

            $user = $this->securityService->login($numerotelephone, $password);
            
            if ($user) {
                // $_SESSION['user'] = $user;
                $this->session->set('user', $user);
                header('Location: /show');
                exit;
            } else {
                $error = "Numéro ou mot de passe incorrect";
            }
        }
        $this->render("login.html", ['error' => $error]);
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