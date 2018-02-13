<?php

namespace App\Battle;

use App\Battle\CharacterInterface;

class Chevalier extends AbstractCharacter
{

	protected $lifePoint = 35;
	protected $damageForce = 5;	

	public function attack(AbstractCharacter $target)
	{
		$target->removeLifePoint($this->damageForce * 1.1);
	}

	
}