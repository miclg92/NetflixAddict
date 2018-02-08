<?php

namespace App\Entity;

use Core\Entity\Entity;

class SerieEntity extends Entity
{
	/**
	 * @return string
	 * Permet de récupérer l'url d'une série
	 */
	public function getUrl()
	{
		return 'index.php?p=series.show&id=' . $this->id;
	}
}