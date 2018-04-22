<?php

class Chevalier extends Protagoniste{


    public function Frapper(Protagoniste $cible, int $damages ){

         print parent::action(). " frapper.";
         $pointRestants= $cible -> GetPointsDeVie() - $damages;
         $cible-> SetPointsDeVie($pointRestants);
         if($cible -> GetPointsDeVie()<=0){
              $cible-> SetPointsDeVie(0);
         }
         if($cible -> IsDead()){
             print $cible->GetNom()." est mort.";
         }
         else{
              print "Il reste ".$cible->GetPointsDeVie(). "points de vie au protagoniste ". $cible->GetNom();
         }
    }

}


 ?>
