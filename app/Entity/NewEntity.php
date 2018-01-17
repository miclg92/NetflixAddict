<?php
namespace App\Entity;
use Core\Entity\Entity;

class NewEntity extends Entity
{
	/**
	 * @return string
	 * Permet de récupérer l'url d'une actu
	 */
	public function getUrl()
	{
		return 'index.php?p=news.show&id=' . $this->id;
	}

	/**
	 * @return string
	 * Permet de récupérer l'extrait d'une actu
	 */
	public function getExtrait()
	{
		$html = '<p class="extrait_actu">' . substr($this->content, 0, 400) . '...</p>';
		$html .= '<div class="flash_news_btn col-xs-12 col-sm-6"><a type="button" class="news_btn col-xs-6" href="' . $this->getURL() . '"><i class="fa fa-file-text-o" aria-hidden="true"></i> Lire cette actu</a></div>';
		$html .= '<div class="flash_news_btn col-xs-12 col-sm-6"><a type="button" class="news_btn col-xs-6" href="index.php?p=news.index"><i class="fa fa-book" aria-hidden="true"></i> Toutes les actus</a></div>';
		return $html;
	}

}