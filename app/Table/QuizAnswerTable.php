<?php

namespace App\Table;

use Core\Table\Table;

class QuizAnswerTable extends Table
{
	protected $table = 'quizAnswers';
	
	public function quizAnswers($questionId)
	{
		return $this->query('
			SELECT *
			FROM quizAnswers
			WHERE question_number = ?', [$questionId]);
	}
	
	public function correctAnswer($questionId)
	{
		$result = $this->query('
			SELECT *
			FROM quizAnswers
			WHERE question_number = ? AND is_correct = 1', [$questionId], true);
		return $result->answer;
	}
	
}