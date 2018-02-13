<?php 

namespace App\Battle;

use App\Battle\Archer;

class ArcherFactory
{
	public function create()
	{
		$archer = new Archer();

		return $archer;
	}

public function createMany($number)
	{
		$archerList = array();	

	    // boucler sur number 
		for ($i=0; $i < $number; $i++) 
		{ 

	

		// Initialiser un guerrier
			$archer = new Archer();

		
		// Pousser dans notre tableau

			array_push($archerList, $archer);
			

		}

		return $archerList;
	}

}