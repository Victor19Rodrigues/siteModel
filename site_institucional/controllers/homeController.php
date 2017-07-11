<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class homeController extends controller{

		public function index(){
			$dados = array();			

			$portfolio = new portfolio();

			$dados['portfolio'] = $portfolio->getFotos(10);

			$this->loadTemplate('home', $dados);
		}
							
	}
?>