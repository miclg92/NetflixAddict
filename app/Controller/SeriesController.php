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
		$this->loadModel('Note');
	}
	
	/* Affiche toutes les séries */
	public function index()
	{
		$lastNews = $this->New->last();
		$mostFollowedSeries = $this->Serie->mostFollowedSeries();
		
		if (isset($_POST['alphabetic'])) {
			$series = $this->Serie->allByAlphabetic();
		} elseif (isset($_POST['alphabeticDesc'])) {
			$series = $this->Serie->allByAlphabeticDesc();
		} elseif (isset($_POST['year'])) {
			$series = $this->Serie->allByYear();
		} elseif (isset($_POST['popularity'])) {
			$series = $this->Serie->allByPopularity();
		} elseif (isset($_GET['search']) && !EMPTY($_GET['search'])) {
			$title = htmlspecialchars($_GET['search']);
			$series = $this->Serie->searchedSerie($title);
		} else {
			$series = $this->Serie->allByPopularity();
		}
		$this->render('series.index', compact('lastNews', 'mostFollowedSeries', 'series'));
	}
	
	/* Affiche la série demandée */
	public function show()
	{
		$form = new BootstrapForm($_POST);
		$errors = false;
		$serie = $this->Serie->find($_GET['id']);
		$serieId = $serie->id;
		$comments = $this->Comment->getSerieComments($serieId);
		$averageNotes = $this->Note->averageNote($serieId);
		
		if ($serie === false) {
			$this->notFound();
		};
		
		/* Indiquer le statut de la série */
		if ($serie->status == "Continuing") {
			$status = "En cours";
		} elseif ($serie->status == "Ended") {
			$status = "Terminée";
		};
		
		/* Suivre la série demandée */
		if (isset($_SESSION['auth'])) {
			$isFavorite = $this->Favorite->checkSerieAsFavorite($serieId, $_SESSION['auth']);
			if (isset($_POST['followSerie'])) {
				if ($isFavorite == 0) {
					$this->Favorite->create([
						'user_id' => $_SESSION['auth'],
						'serie_id' => $serieId
					]);
					header("Refresh:0");
				}
			} elseif (isset($_POST['stopFollowSerie'])) {
				$this->Favorite->deleteFromFavorite($_POST['serieId']);
				header("Refresh:0");
			}
		};
		
		/* Noter la série demandée */
		if (isset($_SESSION['auth'])) {
			$notes = $this->Note->getSerieNote($serieId, $_SESSION['auth']);
			$isNoted = $this->Note->checkNoteForSerie($serieId, $_SESSION['auth']);
			if (isset($_POST['note'])) {
				if ($isNoted == 0) {
					$note = $this->Note->create([
						'serie_id' => $serieId,
						'user_id' => $_SESSION['auth'],
						'note' => $_POST['note']
					]);
					if ($note) {
						header("Refresh:0");
					}
				}
			}
		};
		
		/* Commenter la série demandée */
		if (!empty($_POST)) {
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
					$_SESSION['flash']['success'] = "Votre commentaire a bien été publié.";
				}
			}
		};
		
		/* Signaler un commentaire de la série demandée */
		if (isset($_POST['signal_comment'])) {
			$this->Comment->update($_POST['id'], [
				'is_signaled' => 1,
				'signaled_at' => date('Y-m-d H:i:s')
			]);
			header("Refresh:0");
			$_SESSION['flash']['success'] = "Ce commentaire a bien été signalé, et il sera traité dans les plus brefs délais.";
		};
		
		$this->render('series.show', compact('serie', 'status', 'comments', 'form', 'errors', 'isFavorite', 'notes', 'averageNotes', 'isNoted'));
	}
	
	/* Affiche les séries favorites */
	public function favorites()
	{
		$favoriteSeries = $this->Serie->showFavoriteSeries($_SESSION['auth']);
		$this->render('series.favorites', compact('favoriteSeries'));
	}
	
	/* Supprime la série des favoris */
	public function deleteFavorite()
	{
		if (!empty($_POST)) {
			$this->Favorite->deleteFromFavorite($_POST['serieId']);
		}
		header('location: index.php?p=series.favorites');
		$_SESSION['flash']['danger'] = 'Cette série a été retirée de "Mes séries".';
	}
	
	
}