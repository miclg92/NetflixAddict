<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class TestController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('TestQuestion');
		$this->loadModel('TestAnswer');
		$this->loadModel('TestPersonality');
	}
	
	public function index()
	{
		$this->render('admin.test.index');
	}
	
	public function questions()
	{
		$questions = $this->TestQuestion->all();
		$this->render('admin.test.questions', compact('questions'));
	}
	
	public function editQuestion()
	{
		$question = $this->TestQuestion->find($_GET['id']);
		if ($question === false) {
			$this->notFound();
		}
		
		if (!empty($_POST)) {
			$errors = array();
			
			if (empty($_POST['question'])) {
				$errors['quizQuestion'] = "Aucune question n'est renseignée.";
			}
			
			if (empty($errors)) {
				$result = $this->TestQuestion->update($_GET['id'], [
					'question' => $_POST['question']
				]);
				if ($result) {
					$_SESSION['flash']['success'] = "Cette question a bien été modifiée";
					return $this->questions();
				}
			} else {
				$form = new BootstrapForm($question);
				$this->render('admin.test.editQuestion', compact('question', 'form', 'errors'));
			}
		} else {
			$form = new BootstrapForm($question);
			$this->render('admin.test.editQuestion', compact('question', 'form', 'errors'));
		}
	}
	
	public function answers()
	{
		$answers = $this->TestAnswer->all();
		$this->render('admin.test.answers', compact('answers'));
	}
	
	public function editAnswer()
	{
		$answer = $this->TestAnswer->find($_GET['id']);
		if ($answer === false) {
			$this->notFound();
		}
		
		if (!empty($_POST)) {
			$errors = array();
			
			if (empty($_POST['answer'])) {
				$errors['quizAnswer'] = "Aucune réponse n'est renseignée.";
			}
			
			if (empty($_POST['identity'])) {
				$errors['identity'] = "Aucune identité n'est renseignée.";
			}
			
			if (empty($errors)) {
				$result = $this->TestAnswer->update($_GET['id'], [
					'answer' => $_POST['answer'],
					'answer_index' => $_POST['identity']
				]);
				if ($result) {
					$_SESSION['flash']['success'] = "Cette réponse a bien été modifiée";
					return $this->answers();
				}
			} else {
				$form = new BootstrapForm($answer);
				$this->render('admin.test.editAnswer', compact('answer', 'form', 'errors'));
			}
		} else {
			$form = new BootstrapForm($answer);
			$this->render('admin.test.editAnswer', compact('answer', 'form', 'errors'));
		}
	}
	
	public function identities()
	{
		$identities = $this->TestPersonality->all();
		$this->render('admin.test.identities', compact('identities'));
	}
	
	public function editIdentity()
	{
		$identity = $this->TestPersonality->find($_GET['id']);
		if ($identity === false) {
			$this->notFound();
		}
		
		if (!empty($_POST)) {
			$errors = array();
			
			if (empty($_POST['personality_name'])) {
				$errors['personality_name'] = "Veuillez donner un nom au personnage.";
			}
			
			if (empty($_POST['description'])) {
				$errors['description'] = "Veuillez donner une description au personnage.";
			}
			
			if (empty($_POST['index'])) {
				$errors['index'] = "Veuillez donner un index au personnage.";
			}
			
			if (empty($errors)) {
				$result = $this->TestPersonality->update($_GET['id'], [
					'answer_index' => $_POST['index'],
					'personality_name' => $_POST['personality_name'],
					'personality_description' => $_POST['description']
				]);
				if ($result) {
					$_SESSION['flash']['success'] = "Ce personnage a bien été modifié";
					return $this->identities();
				}
			} else {
				$form = new BootstrapForm($identity);
				$this->render('admin.test.editIdentity', compact('identity', 'form', 'errors'));
			}
		} else {
			$form = new BootstrapForm($identity);
			$this->render('admin.test.editIdentity', compact('identity', 'form', 'errors'));
		}
	}
	
	
}