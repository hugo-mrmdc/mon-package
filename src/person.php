<?php
namespace Hugo\MonPackage;

use Exception;
use Override;

class person{

    public function __construct(private string $nom,private string $prenom,private string $email)
    {
        if($nom == "" || $nom == null){
            throw new Exception("nom vide");
        }
    }
    public function afficher(){
        return $this->nom .$this->prenom;
    }

}