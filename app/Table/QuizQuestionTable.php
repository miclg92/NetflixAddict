<?php

namespace App\Table;

use Core\Table\Table;

class QuizQuestionTable extends Table
{
	protected $table = 'quizQuestions';
	
	public function allQuizQuestions()
	{
		$result = $this->query('
			SELECT *
			FROM quizQuestions
			LEFT JOIN quizAnswers ON quizQuestions.question_number = quizAnswers.question_number
			GROUP BY quizQuestions.question_number');
		return $result;
	}
	
	public function quizQuestions($questionId)
	{
		return $this->query('
			SELECT *
			FROM quizQuestions
			WHERE question_number = ?', [$questionId]);
	}
	
	public function NumberOfQuestions()
	{
		return $this->query('
			SELECT COUNT(*) AS nbOfQuestions
			FROM quizQuestions
			');
	}
	
}
