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
	 * Récupère toutes les series
	 * @return array
	 */
	public function all()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY followers DESC
		");
	}
	
	public function mostFollowedSeries()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY followers DESC LIMIT 5
		");
	}

}