<?php

namespace App\Controller\Admin;

class SeriesController extends AppController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Serie');
	}
	
	public function index()
	{
		$this->render('admin.series.index');
	}
	
	public function updateSeries()
	{
		$y = 100;
		for ($x = 1; $x <= $y; $x++) {
			$netflix_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&start=$x&limit=$y&order=followers&fields=id,title,description,creation,seasons,episodes,followers,network,status,images");
			$netflix_array = json_decode($netflix_list, true);
			$netflix_series = $netflix_array['shows'];
			foreach ($netflix_series as $serie) {
				if (array_key_exists('network', $serie)) {
					if ($serie['network'] === 'Netflix') {
						$serie_exists = $this->Serie->serieExists($serie['id']);
						if ($serie_exists == 0) {
							$this->Serie->create([
								'id_beta' => $serie['id'],
								'network' => $serie['network'],
								'title' => $serie['title'],
								'description' => $serie['description'],
								'year' => $serie['creation'],
								'seasons' => $serie['seasons'],
								'episodes' => $serie['episodes'],
								'followers' => $serie['followers'],
								'status' => $serie['status'],
								'image' => $serie['images']['poster']
							]);
						} else {
							$this->Serie->updateSeries($serie['id'], [
								'id_beta' => $serie['id'],
								'network' => $serie['network'],
								'title' => $serie['title'],
								'description' => $serie['description'],
								'year' => $serie['creation'],
								'seasons' => $serie['seasons'],
								'episodes' => $serie['episodes'],
								'followers' => $serie['followers'],
								'status' => $serie['status'],
								'image' => $serie['images']['poster']
							]);
						}
					}
				}
			}
			$x = $x + 100;
			$y = $y + 100;
		}
		header('location: index.php?p=admin.series.index');
		$_SESSION['flash']['success'] = "La liste des séries a bien été mise à jour.";
	}

//	public function updateSeries()
//	{
//		$serieId = $this->Serie->serieId();
//		$total_series_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&order=popularity&fields=id,title,creation,genres,network,status,language,images");
//		$total_array = json_decode($total_series_list, true);
//		$total_series = $total_array['shows'];
//		$total_series_nb = count($total_series); // 16169 Séries disponibles sur Betaseries, dont 168 Séries Netflix
//
//		$x = 1;
//		$y = 100;
////		while($x <= $total_series_nb){
//		while ($x <= 200) {
//			$netflix_list = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&start=$x&limit=$y&order=followers&fields=id,title,description,creation,seasons,episodes,followers,network,status,images");
//			$netflix_array = json_decode($netflix_list, true);
//			$netflix_series = $netflix_array['shows'];
//			foreach ($netflix_series as $serie) {
//				if (array_key_exists('network', $serie)) {
//					if ($serie['network'] === 'Netflix') {
////						$serie = $this->Serie->serieExists($show['title']);
//						$serie_exists = $this->Serie->serieExists($serie['id']);
//						if ($serie_exists == 0) {
//							$this->Serie->create([
//								'id_beta' => $serie['id'],
//								'title' => $serie['title'],
//								'description' => $serie['description'],
//								'year' => $serie['creation'],
//								'seasons' => $serie['seasons'],
//								'episodes' => $serie['episodes'],
//								'followers' => $serie['followers'],
//								'status' => $serie['status'],
//								'image' => $serie['images']['poster']
//							]);
//						}
////						else{
////
////							$this->Serie->update($serieId, [
////								'id_beta' => $show['id'],
////								'title' => $show['title'],
////								'description' => $show['description'],
////								'year' => $show['creation'],
////								'seasons' => $show['seasons'],
////								'episodes' => $show['episodes'],
////								'followers' => $show['followers'],
////								'status' => $show['status'],
////								'image' => $show['images']['poster']
////							]);
////						}
//					}
//				}
//			}
//			$x = $x + 100;
//			$y = $y + 100;
//		}
//		header('location: index.php?p=admin.series.index');
//		$_SESSION['flash']['success'] = "La liste des séries a bien été mise à jour.";
//	}

	
}