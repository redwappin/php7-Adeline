<?php



class Protagoniste{

protected $nom;
protected $pointDeVie;


 public function __construct(string $nom, int $pointDeVie){
     $this->nom=$nom;
      $this->nom=strtoupper($nom);
     $this->pointDeVie=$pointDeVie;
 }
 public function __toString(){
  return "Le Protagoniste s'appelle ".$this->nom.". Il a ".$this->pointDeVie." points de vie.";

 }
 public function action(): string
    {
        return "Il peut:";
    }
public function GetNom(){
    return $this->nom;
}
public function GetPointsDeVie(){
    return $this->pointDeVie;
}
public function SetPointsDeVie(int $pointDeVie){
    $this->pointDeVie = $pointDeVie;
}

public function IsDead(){
    $Dead=false;
    
    if ($this->pointDeVie==0){
        $Dead=true;
    }
    return $Dead;
}

}


 ?>
