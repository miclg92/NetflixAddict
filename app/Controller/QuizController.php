<?php

namespace App\Controller;

class QuizController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('quizQuestion');
		$this->loadModel('quizAnswer');
		$this->loadModel('User');
	}
	
	public function start()
	{
		$numberOfQuestions = $this->quizQuestion->NumberOfQuestions();
		$nb = $numberOfQuestions[0]->nbOfQuestions;
		if (isset($_SESSION['auth'])) {
			$quiz_score = $this->User->getUserDetails($_SESSION['auth'])->quiz_score;
			$quiz_level = $this->User->getUserDetails($_SESSION['auth'])->quiz_level;
		}
		$this->render('quiz.start', compact('nb', 'quiz_score', 'quiz_level'));
	}
	
	public function questions()
	{
		$errors = false;
		$numberOfQuestions = $this->quizQuestion->NumberOfQuestions();
		$nb = $numberOfQuestions[0]->nbOfQuestions;
		$questionId = (int)$_GET['q'];
		$quizQuestions = $this->quizQuestion->quizQuestions($questionId);
		$quizAnswers = $this->quizAnswer->quizAnswers($questionId);
		
		if (isset($_SESSION['auth'])) {
			if (!isset($_SESSION['score'])) {
				$_SESSION['score'] = 0;
			}
			if (isset($_POST['question_id'])) {
				if (empty($_POST['answer'])) {
					$errors = true;
				} else {
					$question_nb = htmlspecialchars($_POST['question_id']);
					$answer_nb = htmlspecialchars($_POST['answer']);
					$correct_answer = $this->quizAnswer->correctAnswer($question_nb);
					if ($correct_answer === $answer_nb) {
						$_SESSION['score']++;
					}
					
					$numberOfQuestions = $this->quizQuestion->NumberOfQuestions();
					$total_nb = $numberOfQuestions[0]->nbOfQuestions;
					if ($question_nb == $total_nb) {
						$score = ($_SESSION['score'] / $total_nb) * 100;
						if ($score >= 0 && $score < 20) {
							$scoreLevel = "Netflix Looser";
						} elseif ($score >= 20 && $score < 40) {
							$scoreLevel = "Netflix Novice";
						} elseif ($score >= 40 && $score < 60) {
							$scoreLevel = "Netflix Follower";
						} elseif ($score >= 60 && $score < 80) {
							$scoreLevel = "Netflix Fan";
						} elseif ($score >= 80 && $score <= 100) {
							$scoreLevel = "Netflix Addict";
						} else {
							$scoreLevel = "Trop balaise (score > 100%)";
						}
						$this->User->update($_SESSION['auth'], [
							'quiz_score' => $score,
							'quiz_level' => $scoreLevel,
							'quiz_correct_answers' => $_SESSION['score']
						]);
						$_SESSION['user']->quiz_level = $scoreLevel;
						$_SESSION['user']->quiz_score = $score;
						header('location: index.php?p=quiz.result');
						exit();
					} else {
						$next = $question_nb + 1;
						header("location: index.php?p=quiz.questions&q=" . $next);
					}
				}
			}
		}
		$this->render('quiz.questions', compact('quizQuestions', 'quizAnswers', 'nb', 'errors'));
	}
	
	public
	function result()
	{
		if (isset($_SESSION['auth'])) {
			$numberOfQuestions = $this->quizQuestion->NumberOfQuestions();
			$nb = $numberOfQuestions[0]->nbOfQuestions;
			$quiz_correct = $this->User->getUserDetails($_SESSION['auth'])->quiz_correct_answers;
			$quiz_score = $this->User->getUserDetails($_SESSION['auth'])->quiz_score;
			$quiz_level = $this->User->getUserDetails($_SESSION['auth'])->quiz_level;
		}
		$this->render('quiz.result', compact('nb', 'quiz_correct', 'quiz_score', 'quiz_level'));
	}
	
	public
	function answers()
	{
		$numberOfQuestions = $this->quizQuestion->NumberOfQuestions();
		$nb = $numberOfQuestions[0]->nbOfQuestions;
		if (isset($_SESSION['auth'])) {
			$quizQuestions = $this->quizQuestion->allQuizQuestions();
			$quiz_score = $this->User->getUserDetails($_SESSION['auth'])->quiz_score;
		}
		
		$this->render('quiz.answers', compact('quizQuestions', 'nb', 'quiz_score'));
	}
	
}