<?php

class aliment{

private $nom;
protected $couleur;
protected $type;

public function __construct(string $nom, string $couleur, string $type){
    $this->nom=$nom;
    $this->type=$type;
    $this->couleur=$couleur;
}

public function __toString(){
    return "Le fruit créé est ".$this->nom.". Sa couleur est ".$this->couleur." et il est de type ".$this->type.".";
}

public function SetTypeLegume(string $type){
    $this->type=$type;
}

public function SetNom(string $nom){
    $this->nom=$nom;
}
public function SetCouleur(string $couleur){
    $this->couleur=$couleur;
}


}

$carotte= new aliment(" une carotte","orange", "vitaminé");
print $carotte;


 ?>
