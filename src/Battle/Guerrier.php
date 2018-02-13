<?php

namespace App\Battle;

use App\Battle\CharacterInterface;

class Guerrier extends AbstractCharacter
{

	protected $lifePoint = 30;
	protected $damageForce = 10;

	public function attack(AbstractCharacter $target)
	{
		$target->removeLifePoint($this->damageForce * 1.1);
	}

	
}
