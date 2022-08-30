<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['codigo'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"../html/index.html\">Voltar a Home</a></p>");
}


?>




