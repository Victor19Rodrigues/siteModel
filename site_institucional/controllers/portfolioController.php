<?php
	class portfolioController extends controller{

		
		public function index(){
			$dados = array();			

			$portfolio = new portfolio();

			$dados['portfolio'] = $portfolio->getFotos();

			$this->loadTemplate('portfolio', $dados);
		}
	}

?>