<?php

namespace Core\Controller;

class Controller
{
	protected $viewPath; // Chemin vers le dossier qui contient les vues
	protected $template;
	
	/* Afficher les vues pour le visiteur et charge la vue DEFAULT*/
	protected function render($view, $variables = [])
	{
		ob_start();
		extract($variables); // Variables $news, $categories, $comments....
		require($this->viewPath . str_replace('.', '/', $view) . '.php');
		$content = ob_get_clean();
		require($this->viewPath . 'templates/' . $this->template . '.php');
	}
	
	/* Afficher les vues pour les modals */
	protected function renderModal($view, $variables = [])
	{
		ob_start();
		extract($variables); // Variables $posts, $categories, $comments....
		require($this->viewPath . str_replace('.', '/', $view) . '.php');
		$content = ob_get_clean();
		require($this->viewPath . 'templates/' . 'modal' . '.php');
	}
	
	protected function forbidden()
	{
		header('HTTP/1.0 403 Forbidden');
		die('Acces interdit');
	}
	
	protected function notFound()
	{
		header('HTTP/1.0 404 Not found');
		die('Page introuvable');
	}
	
}