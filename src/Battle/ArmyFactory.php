<?php

namespace App\Battle;

class ArmyFactory
{

	protected $archerFactory;
	protected $warriorFactory;
	protected $knightFactory;

	public function __construct(ArcherFactory $archerFactory, GuerrierFactory $warriorFactory, ChevalierFactory $knightFactory) 
	{
		$this->archerFactory = $archerFactory;
		$this->warriorFactory = $warriorFactory;
		$this->knightFactory= $knightFactory;
	}	

	public function create(string $name) 
	{
	
		// instanciation des guerris, archers, chevaliers
       	$warriors = $this->warriorFactory->createMany(rand(10,30));
       	$archers = $this->archerFactory->createMany(rand(10,30));
       	$knights = $this->knightFactory->createMany(rand(10,30));


		return new Army($name, $warriors, $archers, $knights);
	}

}
