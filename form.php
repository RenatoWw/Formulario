<!DOCTYPE html>
<html>
<head>
	<title>Formulário Opinião</title>
	<meta charset="utf-8">
		 <style>
		 	.obrigatório {
				color:red;
			}
			#data {
				opacity: 0.5;
				font-size: 0.8em;
			}
		 </style>
</head>
<body>
	<center>
	<fieldset style="width: 20%;">
	<form action="cadastro.php" method="POST">
		<legend><strong>Formulário de cadastro. Campos marcados com <span class="obrigatório">*</span> são obrigatórios.</strong></legend><br>
		<!-- Começo nome -->
		Digite seu nome:<span class="obrigatório">*</span><br>
		<input class="inputArea" type="text" name="nome" size="9" required><br><br>
		<!-- Termino nome-->

		<!--Começo sexo-->
		Selecione o seu sexo:<span class="obrigatório">*</span><br>

			<input type="radio" name="sexo" value="Masculino" required>Masculino
			<input type="radio" name="sexo" value="Feminino" required>Feminino<br><br>
		<!-- Começo idade-->

		Idade:<span class="obrigatório">*</span><br>
		<select name="idade">

		<?php for ($i = 0; $i <= 100; $i++) {

	  	echo '<option value="idade">'.$i.'</option>';

		}?>

		</select><br><br>
		<!-- Término idade-->
		<!-- Começo e-mail -->
		E-mail:<span class="obrigatório">*</span><br>
			<input class="inputArea" type="text" name="email" required><br><br>
		<!-- Término e-mail -->
		<!--Começo senha -->
		Senha:<span class="obrigatório">*</span><br>
			<input class="inputArea" type="password" name="senha" required><br>
		<!--Término senha -->
		<!-- Começo confirmação senha-->
		Confirmação da Senha:<span class="obrigatório">*</span><br>
			<input class="inputArea" type="password" name="confirmaçãosenha" required><br>
		<!-- Término confirmação senha-->
		<!-- Começo novidades e-mail-->
		<input class="inputArea" type="checkbox" name="novidadesEmail">
		Deseja receber as novidades do site por e-mail?
			<br>
		<!-- Término novidades e-mail-->
		<!-- Começo submit-->
		<p><input type="submit" name="enviar" value="Enviar"> <input type="reset" name="limparForm" value="Limpar Formulário"></p>
		<!-- Término submit-->
	</form>
</fieldset>
</center>
</body>
</html>