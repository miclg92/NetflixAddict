<?php

namespace App\Table;

use Core\Table\Table;

class NewTable extends Table
{
	protected $table = 'news';
	
	/**
	 * Récupère toutes les news publiées
	 * @return mixed
	 */
	public function all()
	{
		return $this->query("
			SELECT news.id, news.title, news.content, newsCategories.title as category, DATE_FORMAT(news.publish_date, '%d/%m/%Y') AS publish_date_fr, newsImages.img_name as image_name, newsImages.img_url as image
			FROM news
			LEFT JOIN newsCategories ON category_id = newsCategories.id
			INNER JOIN newsImages ON image_id = newsImages.id
			ORDER BY news.publish_date DESC
		");
	}
	
	/**
	 * Récupère la dernière news publiée
	 * @return mixed
	 */
	public function last()
	{
		return $this->query("
			SELECT news.id, news.title, news.content, newsCategories.title as category, DATE_FORMAT(news.publish_date, '%d/%m/%Y') AS publish_date_fr, newsImages.img_name as image_name, newsImages.img_url as image
			FROM news
			LEFT JOIN newsCategories ON category_id = newsCategories.id
			INNER JOIN newsImages ON image_id = newsImages.id
			ORDER BY news.publish_date DESC LIMIT 0,1
		");
	}
	
	/**
	 * Récupère une actu en liant la cétégorie associée
	 * @param $id
	 * @return mixed
	 */
	public function findWithCategory($id)
	{
		return $this->query("
			SELECT news.id, news.title, news.content, DATE_FORMAT(news.publish_date, '%d/%m/%Y') AS publish_date_fr, newsCategories.title as category, newsImages.img_name as image_name, newsImages.img_url as image
			FROM news
			LEFT JOIN newsCategories ON category_id = newsCategories.id
			INNER JOIN newsImages ON image_id = newsImages.id
			WHERE news.id = ?", [$id], true);
	}
	
	/**
	 * Récupère les actus d'une catégorie spécifique
	 * @param $category_id int
	 * @return array
	 */
	public function lastByCategory($category_id)
	{
		return $this->query("
			SELECT news.id, news.title, news.content, DATE_FORMAT(news.publish_date, '%d/%m/%Y') AS publish_date_fr, newsCategories.title as category, newsImages.img_name as image_name, newsImages.img_url as image
			FROM news
			LEFT JOIN newsCategories ON category_id = newsCategories.id
			INNER JOIN newsImages ON image_id = newsImages.id
			WHERE news.category_id = ?
			ORDER BY news.publish_date DESC
			", [$category_id]
		);
	}
	
	
}