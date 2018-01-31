<?php

namespace App\Table;

use Core\Table\Table;

class SerieTable extends Table
{
	protected $table = 'series';

//	/**
//	 * @param $title
//	 * @return mixed
//	 * Vérifie si une série existe déjà dans la bdd lors de la mise à jour
//	 */
//	public function serieExists($title)
//	{
//		$result = $this->query('
//			SELECT COUNT(*) AS nbTitles
//			FROM series
//			WHERE title = ?', [$title], true);
//		return $result->nbTitles;
//	}
	
	/**
	 * @param $title
	 * @return mixed
	 * Vérifie si une série existe déjà dans la bdd lors de la mise à jour
	 */
	public function serieExists($beta_id)
	{
		$result = $this->query('
			SELECT COUNT(*) AS nbBetaId
			FROM series
			WHERE id_beta = ?', [$beta_id], true);
		return $result->nbBetaId;
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
	 * Récupère toutes les series par ordre alphabétique (A à Z)
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
	 * Récupère toutes les series par ordre alphabétique (Z à A)
	 * @return array
	 */
	public function allByAlphabeticDesc()
	{
		return $this->query("
			SELECT *
			FROM series
			ORDER BY title DESC
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
	 * Récupère uniquement les séries recherchées
	 * @param $title
	 * @return mixed
	 */
	public function searchedSerie($title)
	{
		return $this->query('
			SELECT *
			FROM series
			WHERE title LIKE "%' . $title . '%"
			', [$title]);
	}
	
	
	/**
	 * Récupère les 5 séries ayant le plus de followers sur Betaseries
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
	
	/**
	 * Récupère l'id des séries
	 * @return mixed
	 */
	public function serieId()
	{
		$result = $this->query("
			SELECT id_beta
			FROM series
		");
		return $result;
	}
	
	
	/**
	 * Récupère les séries favorites d'un user
	 * @param $user_id
	 * @return mixed
	 */
	public function showFavoriteSeries($user_id)
	{
		$result = $this->query("
			SELECT *
			FROM series
			LEFT JOIN favorites ON series.id = favorites.serie_id
			WHERE favorites.user_id = ?", [$user_id]);
		return $result;
	}
	
	/**
	 * @param $id
	 * @param $fields
	 * Met à jour les données de la table séries
	 * @return mixed
	 */
	public function updateSeries($betaid, $fields)
	{
		$sql_parts = [];
		$attributes = [];
		
		foreach ($fields as $k => $v) {
			$sql_parts[] = "$k = ?";
			$attributes[] = $v;
		}
		$attributes[] = $betaid;
		$sql_part = implode(', ', $sql_parts);
		return $this->query("UPDATE {$this->table} SET $sql_part WHERE id_beta = ?", $attributes, true);
	}
	
	
}