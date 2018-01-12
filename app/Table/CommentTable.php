<?php

namespace App\Table;
use Core\Table\Table;

class CommentTable extends Table
{
	protected $table = 'comments';
	
	public function allComments()
	{
		return $this->query("
			SELECT *
			FROM comments
		");
	}
	
	
	
}