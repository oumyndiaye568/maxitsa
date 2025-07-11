<?php
namespace App\Repositorie;
use App\Core\DatabBse;
use App\Entities\Utilisateur;
class ConnectRepositorie {
    private DataBase $database;
    public function  __construct (){

 $this->database=DataBase::getInstance()-> connect();
    }
   public function SelectByNumerotelephoneAndPassword ( string $numerotelephone ,string $password ){
    $requet="
    select * from utilisateur 
    join compte
    ON utilisteur.id=compte.client-id
    where compte.telephone=:telephone
    AND utilisateur.password=:password
    ";
    $stmt=$this->database->prepare($requet);
    $stmt->execute
    (
        [
        'numerotelephone'=>$numerotelephone,
        'password'=>$password
        ]
);
   $user =$stmt->fetch(\PDO::FETCH_ASSOC);
    $userentity=Utilisateur::toObject($user);
   return $userentity;
    }
    
   } 

