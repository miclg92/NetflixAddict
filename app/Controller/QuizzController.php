<?php
namespace App\Controller;
use Core\HTML\BootstrapForm;

class QuizzController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('User');
	}
	
	public function index()
	{
//		if(isset($_POST['quizLevel'])){
//			$result = $this->User->update($_GET['id'], [
//				'quiz_result' => $_POST['quizLevel']
//			]);
//			$_SESSION['flash']['success'] = "Cette catégorie a bien été ajoutée.";
//		}
		$this->render('quizz.index');
	}
}