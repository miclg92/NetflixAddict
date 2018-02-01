<?php

namespace App\Table;

use Core\Table\Table;

class TestPersonalityTable extends Table
{
	protected $table = 'testPersonalities';
	
	public function testIdentities()
	{
		return $this->query('
			SELECT *
			FROM testPersonalities
			');
	}
	
	
}