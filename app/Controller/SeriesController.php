<?php
namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class SeriesController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Serie');
		$this->loadModel('Comment');
		$this->loadModel('Favorite');
		$this->loadModel('New');
	}
	
	/* Affiche toutes les séries */
	public function index()
	{
		$lastNews = $this->New->last();
		$mostFollowedSeries = $this->Serie->mostFollowedSeries();
		
		$seriesByPopularity = $this->Serie->allByPopularity();
		$seriesByAlphabetic = $this->Serie->allByAlphabetic();
		$seriesByYear = $this->Serie->allByYear();
		
		$this->render('series.index', compact('lastNews', 'seriesByPopularity', 'seriesByAlphabetic', 'seriesByYear', 'mostFollowedSeries'));
	}
	
	/* Affiche la série demandée */
	public function show()
	{
		$serie = $this->Serie->find($_GET['id']);
		$serieId = $serie->id;
		if($serie === false)
		{
			$this->notFound();
		}
		
		if($serie->status == "Continuing"){
			$status = "En cours";
		} elseif($serie->status == "Ended"){
			$status = "Terminée";
		};
		
		if(isset($_SESSION['auth'])){
			$isFavorite = $this->Favorite->checkSerieAsFavorite($serieId, $_SESSION['auth']);
			if(isset($_POST['followSerie'])){
				if ($isFavorite == 0) {
					$this->Favorite->create([
						'user_id' => $_SESSION['auth'],
						'serie_id' => $serieId
					]);
					header("Refresh:0");
				}
			}elseif(isset($_POST['stopFollowSerie'])){
				$this->Favorite->deleteFromFavorite($_POST['serieId']);
				header("Refresh:0");
			}
		};
		
		if(!empty($_POST)) {
			if (empty($_POST['comment'])) {
				$errors = true;
			} else {
				$comment = $this->Comment->create([
					'author' => $_SESSION['user']->username,
					'comment' => $_POST['comment'],
					'serie_id' => $_POST['serie_id']
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
		$comments = $this->Serie->getSerieComments($serieId);
		$this->render('series.show', compact('serie','status', 'comments', 'form', 'errors', 'isFavorite'));
	}
	
	/* Affiche les séries favorites */
	public function favorites()
	{
		$favoriteSeries = $this->Serie->showFavoriteSeries($_SESSION['auth']);
		$this->render('series.favorites', compact('favoriteSeries'));
	}
	
	/* Supprime la série des favoris */
	public function deleteFavorite(){
		if(!empty($_POST)){
			$this->Favorite->deleteFromFavorite($_POST['serieId']);
		}
		header('location: index.php?p=series.favorites');
		$_SESSION['flash']['danger']= 'Cette série a été retirée de "Mes séries".';
	}
	
	
}