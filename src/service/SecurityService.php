<?php
namespace App\Service;
use App\Repositorie\ConnectRepository;



class SecurityService{
    private ConnectRepository $ConnectRepository;
    


    public function __construct ()
      {
       
        $this->ConnectRepository = new ConnectRepository();
    }
    public function getAll()
    {
        return $this->ConnectRepository->selectAll();
    }
    public function seconnecter ($login ,$password){
        return $this->ConnectRepository->selectByLoginAndPassword( $numerotelephone,  $password);
    }
        
    
}