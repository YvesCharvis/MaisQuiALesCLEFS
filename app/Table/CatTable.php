<?php
namespace App\Table;
use Core\Table\Table;
/**
* 
*/
class CatTable extends Table
{
	
	public function last()
	{
		return $this->query("SELECT cats.name
									cats.num
									cats.clef_id
									cats.password									
							   FROM cats");
	}



}

