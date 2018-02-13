<?php 

namespace App\Battle;

use App\Battle\Army;
use App\Battle\AbstractCharacter;

class BattleGenerator
{
	

	 public function startingArmy (Army $army1, Army $army2)
	 {

	 	$totalArmy1=$army1->getTotalCharacterList();
	 	
	 	$totalArmy2=$army2->getTotalCharacterList();


	 	if  ($totalArmy1> $totalArmy2){

			$startBattle = ' Armée 1';
		}

		else {

			$startBattle= 'Armée 2';
		}

		return $startBattle;
	 	

	 }


	
	public function fight(Army $army1, Army $army2)
	{

		$damage1 = $army1->getTotalDamage();
		$lifepoint1 = $army1->getTotalHp();
		
		$damage2 = $army2->getTotalDamage();
		$lifepoint2 = $army2->getTotalHp();



		//Army1 attack army2
		//Afficher totalDamage de army1
		$damage1 = $army1->getTotalDamage();

	//Afficher totalLifepoint de army2 avant et après attaque
		$lifepoint2 = $army2->getTotalHp();

		$lifepointrestant2 = 0;
		$lifepointrestant2= $lifepoint2 - $damage1;


		//Army2 attack army1
		//Afficher totalDamage de army2
		$damage2=$army2->getTotalDamage();

		//Afficher totalLifepoint de army1 avant et après attaque
		$lifepoint1=$army1->getTotalHp();

		$lifepointrestant1 = 0;
		$lifepointestant1 = $lifepoint1-$damage2;


		// Comparaison des HP restant
		if  ($lifepointrestant1> $lifepointrestant2){

			$winner = ' Armée 1';
		}

		else {

			$winner= 'Armée 2';
		}

		

		return $winner;

}

}


	
