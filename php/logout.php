<?php
    //Mantendo a Sessão
    session_start();
	//session_unset — Libera todas as variáveis de sessão
    session_unset();
    //Finalizando a sessão
    session_destroy();    
	//Redireciona o usuario para a página de login
    echo "<script>;top.location.href='../html/index.html';</script>";        
?>