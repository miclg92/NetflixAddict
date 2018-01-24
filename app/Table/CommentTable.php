<?php

namespace App\Table;

use Core\Table\Table;

class CommentTable extends Table
{
	protected $table = 'comments';
	
	/**
	 * Récupère les commentaires liés à la série consultée
	 * @param $serie_id
	 * @return mixed
	 */
	public function getSerieComments($serie_id)
	{
		$result = $this->query("
			SELECT *
			FROM comments
			WHERE serie_id = ?
			ORDER BY date_comment DESC", [$serie_id]);
		return $result;
	}
	
	/**
	 * Récupère les commentaires liés à l'actu consultée
	 * @param $post_id
	 * @return mixed
	 */
	public function getNewsComments($news_id){
		$result = $this->query("
			SELECT *
			FROM comments
			WHERE news_id = ?
			ORDER BY date_comment DESC", [$news_id]);
		return $result;
	}
	
	
	/**
	 * @return mixed
	 * Récupère les commantaires signalés
	 */
	public function getSignaledComments()
	{
		return $this->query('
			SELECT *
			FROM comments
			WHERE is_signaled = 1');
	}
	
	
	
	
}