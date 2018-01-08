<?php

namespace App\Table;
use Core\Table\Table;

class SerieTable extends Table
{
	protected $table = 'series';
	
	/**
	 * @param $title
	 * @return mixed
	 * Vérifie si une série existe déjà dans la bdd lors de la mise à jour
	 */
	public function serieExists($title)
	{
		$result = $this->query('
			SELECT COUNT(*) AS nbTitles
			FROM series
			WHERE title = ?', [$title], true);
		return $result->nbTitles;
	}
	
	/**
	 * Récupère toutes les series par popularité
	 * @return array
	 */
	public function allByPopularity()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY followers DESC
		");
	}
	
	/**
	 * Récupère toutes les series par ordre alphabétique
	 * @return array
	 */
	public function allByAlphabetic()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY title
		");
	}
	
	/**
	 * Récupère toutes les series par année
	 * @return array
	 */
	public function allByYear()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY year DESC
		");
	}
	
	/**
	 * @return mixed
	 */
	public function mostFollowedSeries()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY followers DESC LIMIT 5
		");
	}

}