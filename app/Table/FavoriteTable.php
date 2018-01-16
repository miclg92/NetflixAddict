<?php

namespace App\Table;
use Core\Table\Table;

class FavoriteTable extends Table
{
	protected $table = 'favorites';
	
	/**
	 * @param $username
	 * Vérifie si une série est dans la liste des favorites
	 * @return mixed
	 */
	public function checkSerieAsFavorite($serie_id)
	{
		$result = $this->query('
			SELECT COUNT(*) AS nbFavorite
			FROM favorites
			WHERE serie_id = ?', [$serie_id], true);
		return $result->nbFavorite;
	}
	
	/**
	 * Supprime un favori sans colonne 'id'
	 * @param $id
	 * @return mixed
	 */
	public function deleteFromFavorite($id)
	{
		return $this->query("DELETE FROM {$this->table} WHERE serie_id = ?", [$id], true);
	}
	
	
}
