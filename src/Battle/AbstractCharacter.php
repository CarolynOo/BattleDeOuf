<?php 

namespace App\Battle;

abstract class AbstractCharacter implements CharacterInterface 
{

	protected $lifePoint = 0;
	protected $damageForce = 0;

	public function getDamageForce()
	{
		return $this->damageForce;	
	}


	public function getLifePoint()
	{
		return $this->lifePoint;	
	}

	public function attack(AbstractCharacter $target) 
	{
		$target->removeLifePoint($this->damageForce);
	}

	public function removeLifePoint(int $hp) 
	{
		$this->lifePoint-= $hp;
	}
}