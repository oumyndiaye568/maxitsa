<?php
namespace App\Repositorie;
use App\Core\DataBase;
use App\Entities\Utilisateur;
use PDO;
class ConnectRepositorie {
    private PDO $database;
    public function  __construct (){
      

 $this->database=DataBase::getInstance()-> connect();
    }

   public function SelectByNumerotelephoneAndPassword ( string $numerotelephone ,string $password ){
        
    $requet="
    select * from utilisateur 
    join compte
    ON utilisateur.id=compte.client_id
    where compte.telephone=:numerotelephone
    ";
    $stmt=$this->database->prepare($requet);
    $stmt->execute(['numerotelephone' => $numerotelephone]);
    $user =$stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) return null;

   if ($password !== $user['password']) return null;

    $userentity=Utilisateur::toObject($user);

    
    return $userentity;
}
}

