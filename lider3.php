
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário de contato</title>
	<link rel="stylesheet" href="assets/css/css/bulma.min.css">
</head>
<body background="assets/imagens/forms/teste.jpg" style="background-size: 100% ;">
	<section class="section">
		<span class="color">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-half">
						<h1 style="color: #FFFFFF;" class="title has-text-centered">Contato<br><hr></h1>
						<label class="label"><p style="color: #FFFFFF;" alight="justify">Podemos entender e ajudar na sua necessidade ?</p></label>
						<form method="POST" action="enviar.jsp" >
							<div class="field">
								<label class="label"> <span style="color: #FFFFFF;">Nome </span></label>
								<div class="control">
									<input name="txtnome" class="input" type="text" placeholder="Seu nome" required="required">
								</div>
							</div>
							<div class="field">
							<label class="label"> <span style="color: #FFFFFF;">Telefone </span></label>
							<div class="control">
							<input name="txtfone" class="input" type="text" placeholder="Telefone com DDD" maxlength="15" required="required">
							</div>
							</div>
							<div class="field">
								<label class="label"> <span style="color: #FFFFFF;">Email </span></label>
								<div class="control">
									<input name="txtemail" class="input" type="email" placeholder="Seu email" required="required">
								</div>
							</div><!--
							<div class="field">
								<label class="label">Como nos encontrou?</label>
								<div class="control">
									<input name="COMO" class="input" type="text">
								</div>
							</div>-->
							<div class="field">
								<label class="label"> <span style="color: #FFFFFF;">Mensagem </span></label>
								<div class="control">
									<textarea name="txtmensagem" class="textarea" placeholder="Deixe sua mensagem e retornaremos o mais breve possível" maxlength="2000" required="required"></textarea>
								</div>
							</div>
							<div class="field is-grouped">
								<div class="control">
									<input type="submit" class="button is-link is-medium"></input>								
						
								</div>
								
	                      
							 </div>
							</div>

						</form>
	 
					</div>
				</div>
			</div>
		</span>
	</section>