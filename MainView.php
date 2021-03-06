<?php

namespace Views; 


class MainView
{
	private $fileName;
	private $header;
	private $footer;

	const título = "Projeto MVC";  
	public $menuItens = array('Home', 'Sobre' , 'Contato'); 

	public function __construct($fileName,$header = 'header.php',$footer = 'footer'){
		$this->fileName = $fileName; 
		$this->header = $header;
		$this->footer = $footer; 

	}
	public function render($arr = []){
		include('pages/templates/'.$this->header.'.php');
		include('pages/'.$this->fileName.'.php');
		include('pages/templates/'.$this->footer.'.php');
	}
	
	
}

?>