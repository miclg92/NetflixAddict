<?php

namespace App\Entity;
use Core\Entity\Entity;

class NewsImageEntity extends Entity
{
	public function getUrl()
	{
		return 'index.php?p=news.image&id=' . $this->id;
	}
	
}