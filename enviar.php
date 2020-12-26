<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('assets/src/PHPMailer.php');
require_once('assets/src/SMTP.php');
require_once('assets/src/Exception.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(
	($_POST['email'] 	&& !empty(trim($_POST['email']))) && 
	($_POST['mensagem'] && !empty(trim($_POST['mensagem']))) && 
	($_POST['telefone'] && !empty(trim($_POST['telefone']))) &&
	($_POST['nome'] 	&& !empty(trim($_POST['nome'])))){
	
	$nome 	  = utf8_decode($_POST['nome']);
	$mensagem = utf8_decode($_POST['mensagem']);
	$telefone = $_POST['telefone'];
	$email    = $_POST['email'];
	$como 	  =	utf8_decode( $_POST['como']);
	$data 	  =	date('d/m/Y H:i:s');
	

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'linderfinanciamentocontato@gmail.com';
	$mail->Password = '102030abcd';
	$mail->Port = 587;
 
	$mail->setFrom('linderfinanciamentocontato@gmail.com');
	$mail->addAddress('210042019@eniac.edu.br');

	$mail->isHTML(true);
	$mail->Subject ='Site-Lider-contato';
	$mail->Body =  "Nome: {$nome}<br>
                  			 Email: {$email}<br>
							 telefone: {$telefone}<br> 
                  			 Como nos encontrou?<br>
                  			 R: {$como}<br>
				 			 Mensagem: {$mensagem}<br>
                  			 Data/hora: {$data}";
	
	
	if($mail->send()) {
		echo '<script type="text/javascript">;
		alert("Email enviado com sucesso")
		 window.location="lider3.php" </script>';
	}else{
		echo '<script type="text/javascript">;
		 alert("Email não enviado ocorreu algum erro no firewall")
	  	window.location="lider3.php" </script>';
} 
}

else{echo '<script type="text/javascript">;
	 alert("Email não enviado preencha todos os campos")
	  window.location="lider3.php" </script>';

}
