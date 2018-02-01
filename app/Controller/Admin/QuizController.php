<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class QuizController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('QuizQuestion');
		$this->loadModel('QuizAnswer');
	}
	
	public function index()
	{
		$this->render('admin.quiz.index');
	}
	
	public function questions()
	{
		$questions = $this->QuizQuestion->all();
		$this->render('admin.quiz.questions', compact('questions'));
	}
	
	public function editQuestion()
	{
		$question = $this->QuizQuestion->find($_GET['id']);
		if ($question === false) {
			$this->notFound();
		}
		
		if (!empty($_POST)) {
			$errors = array();
			
			if (empty($_POST['question'])) {
				$errors['quizQuestion'] = "Aucune question n'est renseignée.";
			}
			
			if (empty($errors)) {
				$result = $this->QuizQuestion->update($_GET['id'], [
					'question' => $_POST['question']
				]);
				if ($result) {
					$_SESSION['flash']['success'] = "Cette question a bien été modifiée";
					return $this->questions();
				}
			} else {
				$form = new BootstrapForm($question);
				$this->render('admin.quiz.editQuestion', compact('question', 'form', 'errors'));
			}
		} else {
			$form = new BootstrapForm($question);
			$this->render('admin.quiz.editQuestion', compact('question', 'form', 'errors'));
		}
	}
	
	public function answers()
	{
		$answers = $this->QuizAnswer->all();
		$this->render('admin.quiz.answers', compact('answers'));
	}
	
	public function editAnswer()
	{
		$answer = $this->QuizAnswer->find($_GET['id']);
		if ($answer === false) {
			$this->notFound();
		}
		
		if (!empty($_POST)) {
			$errors = array();
			
			if (empty($_POST['answer'])) {
				$errors['quizAnswer'] = "Aucune réponse n'est renseignée.";
			}
			
			if (empty($errors)) {
				$result = $this->QuizAnswer->update($_GET['id'], [
					'answer' => $_POST['answer'],
					'is_correct' => $_POST['correct']
				]);
				if ($result) {
					$_SESSION['flash']['success'] = "Cette réponse a bien été modifiée";
					return $this->answers();
				}
			} else {
				$form = new BootstrapForm($answer);
				$this->render('admin.quiz.editAnswer', compact('answer', 'form', 'errors'));
			}
		} else {
			$form = new BootstrapForm($answer);
			$this->render('admin.quiz.editAnswer', compact('answer', 'form', 'errors'));
		}
	}
	
	
}