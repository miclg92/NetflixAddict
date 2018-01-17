<?php

namespace App\Entity;
use Core\Entity\Entity;

class NewsCategoryEntity extends Entity
{
	public function getUrl()
	{
		return 'index.php?p=news.category&id=' . $this->id;
	}
	
}