<?php

namespace App\Table;
use Core\Table\Table;

class NewsImageTable extends Table
{
	protected $table = "newsImages";
	
	/**
	 * @return mixed
	 * Récupère l'id de la dernière image uploadée
	 */
	public function getImageId()
	{
		return $this->query('
			SELECT id
			FROM newsImages
			WHERE id = LAST_INSERT_ID()
		', [], true);
	}
	
}