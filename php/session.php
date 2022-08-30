<?php
	//Inicia a sessão OU mantem a sessão
	session_start(); 
	//Armazenando valores em uma session
	$_SESSION['usuario'] = 'Thiago';
	//Imprimindo valores de uma session
	echo $_SESSION['usuario']; 
?>