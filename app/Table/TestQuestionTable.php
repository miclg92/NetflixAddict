<?php

namespace App\Table;

use Core\Table\Table;

class TestQuestionTable extends Table
{
	protected $table = 'testQuestions';
	
	public function testQuestions($questionId)
	{
		return $this->query('
			SELECT *
			FROM testQuestions
			WHERE question_number = ?', [$questionId]);
	}
	
	public function NumberOfQuestions()
	{
		return $this->query('
			SELECT COUNT(*) AS nbOfQuestions
			FROM testQuestions
			');
	}
	
}