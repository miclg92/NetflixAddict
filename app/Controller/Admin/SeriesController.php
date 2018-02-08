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
		$ok = false;
		$x = 1;
		$y = 100;
		
		while (!$ok) {
			$result = file_get_contents("https://api.betaseries.com/shows/list?key=c1085ededab1&v=3.0&start=$x&limit=$y&order=followers&fields=id,title,description,creation,seasons,episodes,followers,network,status,images");
			$json = json_decode($result, true);
			$total_series = $json['shows'];
			$total_series_nb = count($total_series);
			
			if ($total_series_nb) {
				foreach ($total_series as $serie) {
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
			} else {
				$ok = true;
			}
		}
		header('location: index.php?p=admin.series.index');
		$_SESSION['flash']['success'] = "La liste des séries a bien été mise à jour.";
	}
}