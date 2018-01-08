<?php
namespace Core\HTML;

/**
 * Class Form
 * @package Core\HTML
 * Permet de générer un formulaire rapidement
 */
class Form
{
	/**
	 * @var array
	 * Données utilisées par le formulaire
	 */
	private $data;
	
	/**
	 * @var string
	 * Tag utilisé pour entourer les champs d'un <p>
	 */
	public $surround = 'p';
	
	/**
	 * Form constructor.
	 * @param array $data
	 * Données utilisées par le formulaire
	 */
	public function __construct($data = array()){
		$this->data = $data;
	}
	
	/**
	 * @param $html string
	 * Code html à entourer d'un <p>
	 * @return string
	 */
	protected function surround($html){
		return "<{$this->surround}>$html</{$this->surround}>";
	}
	
	/**
	 * @param $index string
	 * Index de la valeur à récupérer
	 * @return mixed|null
	 */
	protected function getValue($index){
		if(is_object($this->data))
		{
			return $this->data->$index;
		}
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}
	
	/**
	 * @param $name string
	 * @param $label
	 * @param array $options
	 * @return string
	 */
	public function input ($name, $label, $options = []){
		$type = isset($options['type']) ? $options['type'] : 'text';
		return $this->surround(
			'<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '">'
		);
	}
	
	/**
	 * @return string
	 */
	public function submit(){
		return $this->surround('<button type="submit">Envoyer</button>');
	}
}



