<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class contatoController extends controller{

		public function index(){
			$dados = array(
				'aviso' => ''
			);			

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$msg = addslashes($_POST['mensagem']);

				$para = "vitor1908@gmail.com";
				$assunto = "Dúvida do site";
				$mensagem = "Nome: ".$nome."<br>Email: ".$email."<br>Mensagem: ".$msg;

				$cabecalho = 'From: vitor1908@gmail.com'."\r\n".'Reply-To: '.$email."\r\n".
							'X-Mailer: PHP/'.phpversion();

				mail($para, $assunto, $mensagem, $cabecalho);

				$dados['aviso'] = "Email enviado com sucesso.";

			}

			$this->loadTemplate('contato', $dados);
		}
							
	}
?>