<?php

namespace App\Controller;


use App\Entity\Battle;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Battle\ArcherFactory;
use App\Battle\GuerrierFactory;
use App\Battle\ChevalierFactory;
use App\Battle\CharacterInterface;

use App\Battle\AbstractCharacter;
use App\Battle\Archer;
use App\Battle\Guerrier;
use App\Battle\Chelavlier;
use App\Battle\Army;
use App\Battle\BattleGenerator;




class TestController extends Controller {


/**
* @Route("/", name="index")
* 
* @return Response
*/


public function persoAction() 
{

       	$ArcherFactory = New ArcherFactory();
       	$archer = $ArcherFactory->create();

       	$GuerrierFactory= New GuerrierFactory();
       	$guerrier = $GuerrierFactory->create();

       	$ChevalierFactory= New ChevalierFactory();
       	$chevalier = $ChevalierFactory->create();

		//ARMY1 :

		// Affichage de la liste des Guerriers
       	$guerrierList1 = $GuerrierFactory->createMany(rand(10,30));
		//echo 'Liste des Guerriers';


		// Affichage de la liste des Archers
       	$archerList1 = $ArcherFactory->createMany(rand(10,30));
		//echo 'Liste des Archers';


		// Affichage de la liste des Chevaliers
       	$chevalierList1 = $ChevalierFactory->createMany(rand(10,30));
		//echo 'Liste des Chevaliers';

/*
		// Afficher Armée 1:
       	$Army1=array();

       	//Fusion des 3 tableaux:
       	$Army1= array_merge($chevalierList1,$archerList1, $guerrierList1);

       	//Création variables de comptage
       	$army1['numArmy']=count($Army1);
       	$army1['numGuerrier']=count($guerrierList1);
       	$army1['numArcher']=count($archerList1);
       	$army1['numChevalier']=count($chevalierList1);

       	// boucler sur le tableau $army1
		// pour chaque combats récuperer sa valeur damageForce
		// et incrémenter la variable $totalDamage

       	$army1['totalDamage'] = 0;
       	$army1['totalLifePoint'] = 0;
       	

       	foreach ($Army1 as $character) 
       	{
       		$army1['totalDamage'] += $character->getDamageForce();
       		$army1['totalLifePoint'] += $character->getLifePoint();
       		
       	}
*/
            $army1 = new Army($guerrierList1, $archerList1, $chevalierList1);


            $guerrierList2 = $GuerrierFactory->createMany(rand(10,30));
            //echo 'Liste des Guerriers';


            // Affichage de la liste des Archers
            $archerList2 = $ArcherFactory->createMany(rand(10,30));
            //echo 'Liste des Archers';

            // Affichage de la liste des Chevaliers
            $chevalierList2 = $ChevalierFactory->createMany(rand(10,30));
            //echo 'Liste des Chevaliers';

            $army2 = new Army($guerrierList2, $archerList2, $chevalierList2);
      
            $BattleGenerator = new BattleGenerator();

             $startBattle = $BattleGenerator->startingArmy($army1, $army2);

            $winner = $BattleGenerator->fight($army1, $army2);

            //var_dump($winner); die; 

       	// echo 'Total Damage Army1: '.$army1['totalDamage'];echo "<br>" ;
       	// echo 'Total Life Points Army1: '.$army1['totalLifePoint'];echo "<br>" ; 
       	// echo "<br>" ;


		// Afficher Armée 2:

/*
       	$guerrierList2 = $GuerrierFactory->createMany(rand(10,30));
		//echo 'Liste des Guerriers';


		// Affichage de la liste des Archers
       	$archerList2 = $ArcherFactory->createMany(rand(10,30));
		//echo 'Liste des Archers';

		// Affichage de la liste des Chevaliers
       	$chevalierList2 = $ChevalierFactory->createMany(rand(10,30));
		//echo 'Liste des Chevaliers';

		// Afficher Armée 2:
       	$Army2=array();
       	$Army2= (array_merge($chevalierList2,$archerList2, $guerrierList2));

       	//Affichage des nombres de guerriers
     		//Création variables de comptage
       	$army2['numArmy']=count($Army2);
       	$army2['numGuerrier']=count($guerrierList2);
       	$army2['numArcher']=count($archerList2);
       	$army2['numChevalier']=count($chevalierList2);

       	//Affichage des nombres de guerriers
       	/*echo 'Total Soldats Armée2: '." ".$numArmy2; echo "<br>" ;
       	echo 'Total Guerriers: '.$numGuerrier2; echo "<br>" ;
       	echo 'Total Archers: '.$numArcher2; echo "<br>" ;
       	echo 'Total Chevaliers: '.$numChevalier2;echo "<br>"; */

/*
       	$army2['totalDamage'] = 0;
       	$army2['totalLifePoint'] = 0;
       	

       	foreach ($Army2 as $character) 
       	{
       		$army2['totalDamage'] += $character->getDamageForce();
       		$army2['totalLifePoint'] += $character->getLifePoint();
       		
       	}

       	// echo 'Total Damage Army2: '.$army2['totalDamage'];echo "<br>" ;
       	// echo 'Total Life Points Army2: '.$army2['totalLifePoint'];echo "<br>" ; 
       	// echo "<br>" ;
*/


       	

		//Le camp ayant le plus de chevalier attaque le premier). 

       	// $startBattle;
       	// $winner;


       	// if ($army1['numChevalier'] > $army2['numChevalier']) {

       		
       	// 	$startBattle= 'Armée 1';

        //  }else{


        //        $startBattle= 'Armée 2';
        //  }




       	// Autre façon de faire

      	/*if ($army1['numChevalier'] > $army2['numChevalier'] && $army1['totalDamage'] > $army2['totalDamage']) {

       		
       		echo 'Army 1 commence et gagne la bataille';

       	}elseif ($army1['numChevalier'] > $army2['numChevalier'] && $army1['totalDamage'] < $army2['totalDamage']) {

       		echo 'Army 1 commence et Army 2 gagne la bataille';
       	}

       	else{


       		echo "Army 2 commence et Army1 gagne la bataille";

       	}
		*/



		// Le camp ayant le plus de valeur d'attaque gagne la bataille:

         //  $winner;
         //  $startBatt;

         //  if ($army1['totalDamage'] > $army2['totalDamage']){


         //       $winner= 'Armée 1';

         // }else{


         //       $winner= 'Armée 2';
         // }



         //return $this->render('base.html.twig', ['army1' => $army1, 'army2' => $army2, 'startBattle'=> $startBattle, 'winner'=> $winner] );

        return $this->render('base.html.twig', ['army1' => $army1, 'army2' => $army2, 'startBattle'=> $startBattle, 'winner'=> $winner, ] );

   }		



}