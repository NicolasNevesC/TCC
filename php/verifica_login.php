<?php

   //Recebendo os valores	
    $email = $_POST["c_email"];  
	$senha = $_POST["c_senha"];
	
	//Criptografando a senha
	$senha = md5($senha);
	
	//Conectando com o banco para fazer a consulta do usuario
	require('connect.php');
	
   //SQL de pesquisa de email e senha
	$sql_pesquisa ="select * from `banco_cliente` where `email` = '$email' AND `senha` = '$senha'";
	$resultado_usuario = mysqli_query($conexao,$sql_pesquisa);
   
   
	//tranformando em numero o resultado da pesquisa
	$numero_pesquisa = mysqli_num_rows($resultado_usuario);
   
    if($numero_pesquisa == 1){
        
        $usuario = mysqli_fetch_array($resultado_usuario);
        
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['codigo'] = $usuario['codigo'];
            $_SESSION['nome'] = $usuario['nome'];

        header("Location: ../php/index_logado.php");

    } else {
        
        header("Location: ../html/errologin.html");
        
    }




?>
