<?php


class Magicien extends Protagoniste{

 public function Heal(Magicien $cible,int $heal){
      print parent::action(). " soigner";
     $pointRestants= $cible -> GetPointsDeVie() + $heal;
 }




}


 ?>
