<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

class NewsCategoriesController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('NewsCategory');
	}
	
	public function index()
	{
		$categories = $this->NewsCategory->all();
		$this->render('admin.newsCategories.index', compact('categories'));
	}
	
	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->NewsCategory->create([
				'title' => $_POST['title']
			]);
			$_SESSION['flash']['success'] = "Cette catégorie a bien été ajoutée.";
			return $this->index();
		}
		$form = new BootstrapForm($_POST);
		$this->render('admin.newsCategories.add', compact('form'));
	}
	
	public function edit()
	{
		$categorie = $this->NewsCategory->find($_GET['id']);
		if($categorie === false)
		{
			$this->notFound();
		}
		
		if(!empty($_POST))
		{
			$result = $this->NewsCategory->update($_GET['id'], [
				'title' => $_POST['title']
			]);
			$_SESSION['flash']['success'] = "Cette catégorie a bien été modifiée.";
			return $this->index();
		}
		$category = $this->NewsCategory->find($_GET['id']);
		$form = new BootstrapForm($category);
		$this->render('admin.newsCategories.edit', compact('form'));
	}
	
	public function delete()
	{
		if(!empty($_POST))
		{
			$result = $this->NewsCategory->delete($_POST['id']);
			$_SESSION['flash']['success'] = "Cette catégorie a bien été supprimée.";
			return $this->index();
		}
	}
	
}