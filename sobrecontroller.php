<?php 

namespace Controllers; 

class sobrecontroller extends Controller
{



public function __construct(){
	$this->view = new \Views\MainView('sobre');  

}

public function executar();
$this->view->render(array('título'=>'Sobre'));
{
	

}

 ?>