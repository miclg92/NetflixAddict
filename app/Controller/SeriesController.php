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
//		$total_shows_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&order=popularity&fields=id,title,creation,genres,network,status,language,images");
//		$total_array = json_decode($total_shows_list, true);
//		$total_shows = $total_array['shows'];
//		$totalShowsNb = count($total_shows); // 16169 Séries disponibles sur Betaseries, dont 168 Séries Netflix
////		var_dump($totalShowsNb);
////		die();
//
//		$x = 1;
//		$y = 100;
//		while($y <= $totalShowsNb){
//			$netflix_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&start=$x&limit=$y&order=followers&fields=id,title,description,creation,seasons,episodes,followers,network,status,images");
//			$netflix_array = json_decode($netflix_list, true);
//			$netflix_shows = $netflix_array['shows'];
//			foreach ($netflix_shows as $show) {
//				if (array_key_exists('network', $show)) {
//					if ($show['network'] === 'Netflix') {
//						$serie = $this->Serie->serieExists($show['title']);
//						if ($serie == 0) {
//							$series = $this->Serie->create([
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
//					}
//				}
//			}
//			$x = $x + 100;
//			$y = $y + 100;
//		}
		$series = $this->Serie->all();
		$mostFollowedSeries = $this->Serie->mostFollowedSeries();
//		var_dump($firstSerie);
//		die();
		$this->render('series.index', compact('series', 'mostFollowedSeries'));
	}
	
}