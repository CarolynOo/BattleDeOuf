<?php

namespace App\Battle;

use App\Battle\Guerrier;

class GuerrierFactory
{
	public function create()
	{
		$guerrier = new Guerrier();

		return $guerrier;     
	}

	public function createMany($number)
	{
		$guerrierList = array();	

	    // boucler sur number 
		for ($i=0; $i < $number; $i++) 
		{ 


		// Initialiser un guerrier
			$guerrier = new Guerrier();

		
		// Pousser dans notre tableau

			array_push($guerrierList, $guerrier);
			
		}

		return $guerrierList;
	}




}







