<?php

namespace App\Battle;

use App\Battle\CharacterInterface;

class Archer extends AbstractCharacter
{

	protected $lifePoint = 25;
	protected $damageForce = 15;

	public function attack(AbstractCharacter $target)
	{
		$target->removeLifePoint($this->damageForce * 1.1);
	}

}
