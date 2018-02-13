<?php 

namespace App\Battle;

use App\Battle\Chevalier;

class ChevalierFactory
{
    public static function create()
    {
        $chevalier = new Chevalier();

        return $chevalier;
      
    }

    public function createMany($number)
	{
		$chevalierList = array();	

	    // boucler sur number 
		for ($i=0; $i < $number; $i++) 
		{ 

	

		// Initialiser un guerrier
			$chevalier = new Chevalier();

		
		// Pousser dans notre tableau

			array_push($chevalierList, $chevalier);
			

		}

		return $chevalierList;
	}
}