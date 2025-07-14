<?php
namespace App\Service;
use App\Repositorie\ConnectRepositorie; 
class SecurityService{
    private ConnectRepositorie $User;
    public function __construct ()
    {
        // var_dump('ok');
        // die;
        $this->User = new ConnectRepositorie();
    }
    public function login  ( string $numerotelephone ,string $password )
    { 
        return $this->User->SelectByNumerotelephoneAndPassword ($numerotelephone ,$password);

    }

}       
