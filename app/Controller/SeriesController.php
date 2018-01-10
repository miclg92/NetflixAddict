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
	}
	
	public function index()
	{
		$seriesByPopularity = $this->Serie->allByPopularity();
		$seriesByAlphabetic = $this->Serie->allByAlphabetic();
		$seriesByYear = $this->Serie->allByYear();
		$mostFollowedSeries = $this->Serie->mostFollowedSeries();
		$this->render('series.index', compact('seriesByPopularity', 'seriesByAlphabetic', 'seriesByYear', 'mostFollowedSeries'));
	}
	
	public function updateSeriesList()
	{
		$serieId = $this->Serie->serieId();
//		var_dump($serieId);
//		die();
		$total_shows_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&order=popularity&fields=id,title,creation,genres,network,status,language,images");
		$total_array = json_decode($total_shows_list, true);
		$total_shows = $total_array['shows'];
		$totalShowsNb = count($total_shows); // 16169 Séries disponibles sur Betaseries, dont 168 Séries Netflix

		$x = 1;
		$y = 100;
//		while($y <= $totalShowsNb){
		while($y <= 200){
			$netflix_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&start=$x&limit=$y&order=followers&fields=id,title,description,creation,seasons,episodes,followers,network,status,images");
			$netflix_array = json_decode($netflix_list, true);
			$netflix_shows = $netflix_array['shows'];
			foreach ($netflix_shows as $show) {
				if (array_key_exists('network', $show)) {
					if ($show['network'] === 'Netflix') {
						$serie = $this->Serie->serieExists($show['title']);
						if ($serie == 0) {
							$this->Serie->create([
								'id_beta' => $show['id'],
								'title' => $show['title'],
								'description' => $show['description'],
								'year' => $show['creation'],
								'seasons' => $show['seasons'],
								'episodes' => $show['episodes'],
								'followers' => $show['followers'],
								'status' => $show['status'],
								'image' => $show['images']['poster']
							]);
						}
//						else{
//							$this->Serie->update($serieId, [
//								'id_beta' => $show['id'],
//								'title' => $show['title'],
//								'description' => $show['description'],
//								'year' => $show['creation'],
//								'seasons' => $show['seasons'],
//								'episodes' => $show['episodes'],
//								'followers' => $show['followers'],
//								'status' => $show['status'],
//								'image' => $show['images']['poster']
//							]);
//						}
					}
				}
			}
			$x = $x + 100;
			$y = $y + 100;
		}
		header('location: index.php');
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
		}
	
		$comments = $this->Serie->getSerieComments($serieId);
		$this->render('series.show', compact('serie','status', 'comments'));
	}
	
}