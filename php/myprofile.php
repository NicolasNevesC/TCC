<?php

include('protect.php');

?>


<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

     <!-- Colocando Icone com Bootstrap-->
     <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/faviconprincipal.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
  
    <!-- Importando CSS-->
    <link rel="stylesheet" href="../css/style_myprofile.css">

    <!-- Importando Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
     <title>SanjaFeet : Meu Perfil</title>
    </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <div class="icon">
    <img src="../img/favicon/faviconprincipal.png" width="45" height="45" alt="icone"></div>
        <div class="logo_name"> Meu Perfil</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="../php/atualizar_login.php">
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



  <section class="home-section">
      <div class="text">Olá, <?php echo $_SESSION['nome']; ?>
      </div>
  </section>

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
