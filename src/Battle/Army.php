<?php

namespace App\Battle;

//La class Army est enfait une collection (juste une liste d'objets) cette classe va pouvoir gérer des méthodes 

class Army 
{

	protected $charactersList = [];
	protected $archerCount;
	protected $warriorCount;
	protected $knightCount;
	protected $name;

	public function __construct(string $name, array $warriors, array $archers, array $knights) 
	{

		$this->name = $name;
		$this->charactersList = array_merge(
			$warriors, $archers, $knights
		);

		$this->archerCount = count($archers);

		$this->warriorCount = count($warriors);

		$this->knightCount = count($knights);


	}

	public function getTotalDamage()
	{
		$damage = 0;
		foreach ($this->charactersList as $character) {
			$damage += $character->getDamageForce();
			// $damage = $damage + $character->getDamageForce();
		}

		return $damage;
	}

	public function getTotalHp()
	{
		$hps = 0;
		foreach ($this->charactersList as $character) {
			$hps += $character->getLifePoint();
			// $hps = $hps + $character->getLifePoint();
		}

		return $hps;

	}


	public function getArcherCount(){

	
		return $this->archerCount;
	}

	public function getWarriorCount(){

	
		return $this->warriorCount;
	}

	public function getKnightCount(){

	
		return $this->knightCount;
	}

	public function getTotalCharacterList(){

		return count($this->charactersList);


	}
// par convention on écrit le setter avec set + nom de l'attribut qu'on veut modifier
	public function setArcherCount($param){

		$this->archerCount= $param;

	}

	public function setWarriorCount($param){

		$this->warriorCount=$param;
	}


	public function setKnightCount($param){

		$this->knightCount=$param;
	}

	public function getName() {
		return $this->name;
	}
}