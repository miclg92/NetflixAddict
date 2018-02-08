<?php

namespace App\Controller;

class TestController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('testQuestion');
		$this->loadModel('testAnswer');
		$this->loadModel('User');
	}
	
	public function start()
	{
		$numberOfQuestions = $this->testQuestion->NumberOfQuestions();
		$nb = $numberOfQuestions[0]->nbOfQuestions;
		$this->render('test.start', compact('nb'));
	}
	
	public function questions()
	{
		$errors = false;
		$numberOfQuestions = $this->testQuestion->NumberOfQuestions();
		$nb = $numberOfQuestions[0]->nbOfQuestions;
		$questionId = (int)$_GET['q'];
		$testQuestions = $this->testQuestion->testQuestions($questionId);
		$testAnswers = $this->testAnswer->testAnswers($questionId);
		
		if (isset($_SESSION['auth'])) {
			if (!isset($_SESSION['answers'])) {
				$_SESSION['answers'] = array();
			}
			
			if (isset($_POST['submit_quiz'])) {
				if (empty($_POST['answer'])) {
					$errors = true;
				} else {
					$question_nb = $_POST['question_id'];
					$answer_index = $_POST['answer'];
					$_SESSION['answers'][$question_nb] = $answer_index;
					$numberOfQuestions = $this->testQuestion->NumberOfQuestions();
					$total_nb = $numberOfQuestions[0]->nbOfQuestions;
					if ($question_nb == $total_nb) {
						$result = array_count_values($_SESSION['answers']);
						$highest_result = array_search(max($result), $result);
						$this->User->update($_SESSION['auth'], [
							'personality' => $highest_result
						]);
						$_SESSION['user']->personality = $highest_result;
						header('location: index.php?p=test.result');
						exit();
					} else {
						$next = $question_nb + 1;
						header("location: index.php?p=test.questions&q=" . $next);
					}
				}
			}
		}
		$this->render('test.questions', compact('testQuestions', 'testAnswers', 'nb', 'errors'));
	}
	
	public function result()
	{
		if (isset($_SESSION['auth'])) {
			$numberOfQuestions = $this->testQuestion->NumberOfQuestions();
			$nb = $numberOfQuestions[0]->nbOfQuestions;
			$personality_name = $this->User->getUserDetails($_SESSION['auth'])->personality_name;
			$this->User->update($_SESSION['auth'], [
				'personality_name' => $personality_name
			]);
			$_SESSION['user']->personality_name = $personality_name;
			$personality_desc = $this->User->getUserDetails($_SESSION['auth'])->personality_description;
			$personality_img = $this->User->getUserDetails($_SESSION['auth'])->personality_picture;
		}
		$this->render('test.result', compact('nb', 'personality_name', 'personality_desc', 'personality_img'));
	}
	
}