<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
* 
*/
class CatEntity extends Entity
{

		public function getUrl()
	{
		return 'cats.php?c=profil&id='.$this->id;
	}




}