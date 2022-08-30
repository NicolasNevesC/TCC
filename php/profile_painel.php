<?php

include('../php/protect.php');

include('../php/connect.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Colocando Icone com Bootstrap-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/faviconprincipal.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/faviconprincipal.png">
    <link rel="manifest" href="/img/favicon/manifest.json">

    <!-- Importando o CSS -->
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="stylesheet" href="../css/style_myprofile.css">

    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Importando Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SanjaFeet :: Minhas compras</title>
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






        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                <table class="table text-center table-dark">
                    <thead>
                          <tr>
                                <th scope="col">ID do Pedido</th>
                                <th scope="col">Nome do Destinatário</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Modo de Pagamento</th>
                                <th scope="col">Ordens</th>
                          </tr>
                    </thead>
    <tbody>
      <?php 
        $query="SELECT * FROM `gerenciador_pedidos`";
        $user_result=mysqli_query($conexao,$query);
        while($user_fetch=mysqli_fetch_assoc($user_result))
        {
          echo"
            <tr>
              <td>$user_fetch[sequencia_id]</td>
              <td>$user_fetch[Nome_destinatario]</td>
              <td>$user_fetch[CEP]</td>
              <td>$user_fetch[Endereco]</td>
              <td>$user_fetch[Pay_Mode]</td>
              <td>
              <table class='table text-center table-dark'>
                    <thead>
                          <tr>
                                <th scope='col'>Nome do Produto</th>
                                <th scope='col'>Preço</th>
                                <th scope='col'>Quantidade</th>
                          </tr>
                    </thead>
               <tbody>
              ";
            $order_query="SELECT * FROM `pedidos_usuarios` WHERE `codigo_pedido`= '$user_fetch[sequencia_id]'";
            $order_result=mysqli_query($conexao,$order_query);
            while($order_fetch=mysqli_fetch_assoc($order_result))
            {
              echo"
                <tr>
                  <td>$order_fetch[Nome_Produto]</td>
                  <td>$order_fetch[Preco]</td>
                  <td>$order_fetch[Quantidade]</td>
                </tr>
              ";
            }  
            echo"  
                  </tbody>
                </table>
              </td>
            </tr>

          ";
        }
      ?>
       
   
    </tbody>
            </table>    
            
        </div>
            </div>
        </div>    






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