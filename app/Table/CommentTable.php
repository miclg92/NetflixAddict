<?php

namespace App\Table;
use Core\Table\Table;

class CommentTable extends Table
{
	protected $table = 'comments';
	
//	/**
//	 * @return mixed
//	 * Récupère tous les commantaires
//	 */
//	public function allComments()
//	{
//		return $this->query("
//			SELECT *
//			FROM comments
//		");
//	}
	
	/**
	 * @return mixed
	 * Récupère les commantaires signalés
	 */
	public function getSignaledComments(){
		return $this->query('
			SELECT *
			FROM comments
			WHERE is_signaled = 1');
	}
	
	
}