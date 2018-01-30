<?php

namespace App\Table;

use Core\Table\Table;

class TestAnswerTable extends Table
{
	protected $table = 'testAnswers';
	
	public function testAnswers($questionId)
	{
		return $this->query('
			SELECT *
			FROM testAnswers
			WHERE question_number = ?', [$questionId]);
	}
	
	
}