<?php
	//Importando o connect
	require("connect.php");	
	
	//Recebendo os valores do formulário e armazenando em variáveis
	$nome = $_POST['c_nome'];
	$cpf = $_POST['c_cpf']; 
	$email = $_POST['c_email']; 
	$celular = $_POST['c_celular'];
    $senha = $_POST['c_senha'];
	$senha = $_POST['c_senha2'];
	
	
	//Criptografando a senha
	$senha = md5($senha);
	
	//Verificando se o CPF já foi cadastrado
	$pesquisa_cpf = "SELECT `cpf` FROM `banco_cliente` WHERE `cpf`=$cpf";
	//Executa e armazena o resultado da pesquisa SQL
	$resultado_pesquisa_cpf =mysqli_query($conexao, $pesquisa_cpf); 
	//Convertendo a pesquisa para número
	$numero_resultado_cpf = mysqli_num_rows($resultado_pesquisa_cpf);
	//Mostrando o número de CPF's já cadastrados com o número fornecido
	echo $numero_resultado_cpf;
	
    //Verificando se o Email já foi cadastrado
	$pesquisa_email = "SELECT `email` FROM `banco_cliente` WHERE `email`='$email'";
    //Executa e armazena o resultado da pesquisa SQL
	$resultado_pesquisa_email =mysqli_query($conexao, $pesquisa_email); 
    //Convertendo a pesquisa para número
	$numero_resultado_email = mysqli_num_rows($resultado_pesquisa_email);
	//Mostrando o número de Email's já cadastrados com o número fornecido
	echo $numero_resultado_email;

	
    //Verificando se o celular já foi cadastrado
	$pesquisa_celular = "SELECT `celular` FROM `banco_cliente` WHERE `celular`=$celular";
    //Executa e armazena o resultado da pesquisa SQL
	$resultado_pesquisa_celular =mysqli_query($conexao, $pesquisa_celular); 
    //Convertendo a pesquisa para número
	$numero_resultado_celular = mysqli_num_rows($resultado_pesquisa_celular);
	//Mostrando o número de Email's já cadastrados com o número fornecido
	echo $numero_resultado_celular;

	
	if($numero_resultado_cpf == 1)
	{		
        header("HTTP/1.0 301 Moved permanently");
        header("Location: ../html/errocadastro.html");

	}

    	if($numero_resultado_email == 1)
	{		
        header("HTTP/1.0 301 Moved permanently");
        header("Location: ../html/errocadastro.html");

	}
	if($numero_resultado_celular == 1)
	{		
        header("HTTP/1.0 301 Moved permanently");
        header("Location: ../html/errocadastro.html");

	}

	if($numero_resultado_cpf == 0)
	{	
		if($numero_resultado_email == 0){
			if($numero_resultado_celular == 0){

				//SQL - Inserindo os dados no BD
	//armazenando a sql em uma variavel
	$sql = "UPDATE `banco_cliente`(`nome`,`cpf`,`email`,`celular`,`senha`) 
	VALUES ('$nome','$cpf' ,'$email','$celular', '$senha')";
		
	//executando a SQL que esta na variavel
	$resultado = mysqli_query($conexao, $sql); 
	
	//"alert" avisando que cadastro finalizou e redirecionando para pagina de login
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Atualização finalizada, faça o login novamente')
	window.location.href='../html/login.html?';
	</SCRIPT>");
	 
			}
		}
	}

   
?>
