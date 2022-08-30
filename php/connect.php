<?php	
	//Criando e salvando a conexao em uma variavel
	$conexao = mysqli_connect ("localhost","root","");	
	//Testando a conexao
	if(mysqli_connect_errno())
	{ 
		//Imprime a tela de erro de conexao
		echo "falha ao conectar: ". mysqli_connect_error(); die(); 
	} 
	//Seleciona o banco desejado
	mysqli_select_db($conexao,"sanjafeet_bd");
?>