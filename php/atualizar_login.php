<?php

include('../php/protect.php');

?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Colocando Icone com Bootstrap-->
 <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/faviconprincipal.png">
 <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/faviconprincipal.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/faviconprincipal.png">
 <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/faviconprincipal.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/faviconprincipal.png">
 <link rel="manifest" href="/img/favicon/manifest.json">


     
    <!-- Importando Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Importando CSS-->
    <link rel="stylesheet" href="../css/style_card.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_register.css">
    <link rel="stylesheet" href="../css/style_myprofile.css">

     <!-- Importando Bootstrap2 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Importando Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>SanjaFeet :: Atualiza Cadastro</title>
</head>

<body>
    
   
</br>


<!-- MenuBar-->
<div class="sidebar">
    <div class="logo-details">
    <div class="icon">
    <img src="../img/favicon/faviconprincipal.png" width="45" height="45" alt="icone"></div>
        <div class="logo_name"> Meu Perfil</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Atualizar Perfil</span>
       </a>
       <span class="tooltip">Atualizar Perfil</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Dúvidas</span>
       </a>
       <span class="tooltip">Dúvidas</span>
     </li>
     <li>
       <a href="../php/profile_painel.php">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Minhas Compras</span>
       </a>
       <span class="tooltip">Minhas compras</span>
     </li>
     <li>
     <li>
       <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
            <a href="../php/logout.php"><button class='bx bx-log-out' style="border-style: dotted white;" id="log_out"></button></div></a>
     </li>
    </ul>
  </div>





<!-- Área de Atualização de Login-->
<div class="container">
<div class="form-image">
        <img src="../img/img_login/img-login2.jpeg" height="500" width="500" alt="">
    </div>
    <div class="form">
        <form method="POST" enctype="multipart/form-data" action="../php/resultado_atualiza_login.php">
            <div class="form-header">
                <div class="title">
                    <h1>Entre com os novos dados.</h1>
                </div>
                

            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Nome:</label>
                    <input id="firstname" type="text" name="c_nome" placeholder="Digite seu primeiro nome" required>
                </div>

                <div class="input-box">
                    <label for="number">CPF:</label>
                    <input id="number" type="tel" name="c_cpf" placeholder="000.000.000-00" required>
                </div>
                <div class="input-box">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" name="c_email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-box">
                    <label for="number">Celular:</label>
                    <input id="number" type="tel" name="c_celular" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="input-box">
                    <label for="password">Senha:</label>
                    <input id="password" type="password" name="c_senha" placeholder="Digite sua senha" required>
                </div>


                <div class="input-box">
                    <label for="confirmPassword">Confirme sua Senha:</label>
                    <input id="confirmPassword" type="password" name="c_senha2" placeholder="Digite sua senha novamente" required>
                </div>

            </div>

            <div class="continue-button">
                <button style="color:white">Continuar</button>
            </div>
        </form>
    </div>
</div>

<!-- Importando JS e o Bootstrap-->
     <script src="../node_modules/app.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/mobile-navbar.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

      <!-- Javascript -->
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>



</body>

</html>