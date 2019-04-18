<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Projeto de avaliação de Voitto</title>
	<link rel="shortcut icon" href="https://www.voitto.com.br/assets/images/voitto-icon.png">
</head>
<body>

<div class="ui container center aligned segment">
	<h1>Olá, Mun... ops, avaliado!</h1>
	<h2>Bem-vindo ao teste de avaliação da Voitto!</h2>
	<h3>Nesse teste serão avaliados os conhecimentos em diversas tecnologias, tais como nosso framework PHP (CodeIgniter), JavaScript(JQuery ou Vanilla), Requisições por Ajax, entre outras.</h3>
	<h3>Abaixo você verá instruções descrevendo como e quais serão as funcionalidades do proejto. <br />Após ler as instruções clique no botão inciar teste para ser direcionado para a view onde deve ser desenvolvido o projeto.</h3>

	<div class="ui piled segments">
		<div class="ui segment">
			<p>1 - Baixe e importe o SQL em seu servidor local <a href="https://www.voitto.com.br/backups/pessoa_teste.sql"> clicando aqui</a></p>
		</div>
		<div class="ui segment">
			<p>2 - Desenvolva na view um formulário de endereço com os mesmo dados do formulário da imagem abaixo:<br /></p>
			<center><img src="https://i.ibb.co/LdrYS5x/endereco-form.png" style="width:80%" /></center>
		</div>
		<div class="ui segment">
			<p>3 - Construa um model para buscar as pessoas do banco de dados importado. Com os dados obtidos popule o select de pessoas do formulário feito.</p>
		</div>
		<div class="ui segment">
			<p>4 - Implemente uma função em javascript para que seja disparada toda vez que o select de pessoa for mudado. Nessa função deverá ser verificado se algum dado do endereço foi preenchido, se sim, deverá ser perguntado ao usuário através de um confirm se ele deseja realmente mudar as pessoas e que isso acarretará na perca dos dados preenchidos. Se confirmado, o formulário deve ser limpado.</p>
		</div>
		<div class="ui segment">
			<p>5 - Nesse ítem deverá ser implementada a api do Viacep(<a href="https://viacep.com.br/" target="_blank">mais informações</a>), que se trata de um webservice que retorna os dados do endereço a partir do CEP.<br> O funcionamento deve ocorrer da seguinte forma:<br/></p>
			<ol class="ui list">
 			 	<li value="1">Quando o usuário informar o CEP completamente deverá ser feita uma requisição em Ajax para o WS da Viacep;</li>
				<li value="2">Os dados de endereço do formulário devem ser preenchidos com os dados retornados da requisição;</li>
				<li value="3">Um alerta deve ser mostrado para o usuário no caso do endereço não ser reconhecido pela API;</li>
			</ol>
		</div>
	</div>
	<h2>Maos a obra!  <i class="ui terminal icon"></i></h2>
	<a href="teste"><button class="ui huge orange button">Iniciar teste</button></a>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
</div>

</body>
</html>