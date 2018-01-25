<?php

namespace App\Table;

use Core\Table\Table;

class NoteTable extends Table
{
	protected $table = 'notes';
	
	/**
	 * @param $username
	 * Vérifie si une série a déjà été notée par le user
	 * @return mixed
	 */
	public function checkNoteForSerie($serie_id, $user_id)
	{
		$result = $this->query('
			SELECT COUNT(*) AS nbNote
			FROM notes
			WHERE serie_id = ? AND user_id = ?', [$serie_id, $user_id], true);
		return $result->nbNote;
	}
	
	/**
	 * Récupère la note donnée à la série par un user
	 * @param $post_id
	 * @return mixed
	 */
	public function getSerieNote($serie_id, $user_id)
	{
		$result = $this->query("
			SELECT *
			FROM notes
			WHERE serie_id = ? AND user_id = ?", [$serie_id, $user_id]);
		return $result;
	}
	
	/**
	 * @param $serie_id
	 * @return mixed
	 * Calcule la moyenne des notes obtenues par une série
	 */
	public function averageNote($serie_id)
	{
		$result = $this->query('
			SELECT AVG(note)
			FROM notes
			WHERE serie_id = ?', [$serie_id], true);
		return $result;
	}
	
	
}
