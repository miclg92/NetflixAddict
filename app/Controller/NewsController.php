<?php
namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class NewsController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('New');
		$this->loadModel('NewsCategory');
		$this->loadModel('Comment');
	}
	
	/**
	 * Récupère toutes les actus publiées
	 */
	public function index()
	{
		$news = $this->New->all();
		$categories = $this->NewsCategory->all();
		$this->render('news.index', compact('news', 'categories'));
	}
	
	/* Affiche l'actu demandée */
	public function show()
	{
		$news = $this->New->find($_GET['id']);
		$newsId = $news->id;
		if($news === false)
		{
			$this->notFound();
		}
		
		$new = $this->New->findWithCategory($_GET['id']);
		if(!empty($_POST)) {
			if (empty($_POST['comment'])) {
				$errors = true;
			} else {
				$comment = $this->Comment->create([
					'author' => $_SESSION['user']->username,
					'comment' => $_POST['comment'],
					'news_id' => $_POST['news_id']
				]);
				
				if ($comment) {
					header("Refresh:0");
					$_SESSION['flash']['success']= "Votre commentaire a bien été publié.";
				}
			}
		};
		
		if(isset($_POST['signal_comment'])){
			$this->Comment->update($_POST['id'], [
				'is_signaled' => 1,
				'signaled_at' => date('Y-m-d H:i:s')
			]);
			header("Refresh:0");
			$_SESSION['flash']['success']= "Ce commentaire a bien été signalé, et il sera traité dans les plus brefs délais.";
		};
		
		$form = new BootstrapForm($_POST);
		$errors = false;
		$comments = $this->New->getNewsComments($newsId);
		$this->render('news.show', compact('new','comments', 'form', 'errors'));

//		$currentPost = $this->Post->find($_GET['id']);
//		$currentId = $currentPost->id;
//		$_SESSION['currentId'] = $currentId;
	}
	
	/* Affiche la liste des catégories */
	public function category()
	{
		$category = $this->NewsCategory->find($_GET['id']);
		if($category === false)
		{
			$this->notFound();
		}
		$news = $this->New->lastByCategory($_GET['id']);
		$categories = $this->NewsCategory->all();
		$this->render('news.category', compact('news', 'categories', 'category'));
	}
	
}