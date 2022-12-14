<?php

include('../php/protect.php');

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

     <!-- Importando Bootstrap-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     
     <!-- Importando CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_register.css">
    <link rel="stylesheet" href="../css/style_desc_prod.css">
    <link rel="stylesheet" type="text/css" href="../css/style_desc_prod2.css">

      <!-- Importando Boxicons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      
  <!-- T??tulo do Site -->
     <title>SanjaFeet : Descri????o de Produtos</title>

    </head>
    <body>

  
     <!-- Barra de Navega????o-->
 <nav id="nav">
    <div class="navTop">
        <div class="navItem">
            <img src="../img/img_logo/SANJAFEET.png" width="350" height="100" alt="icone">
        </div>
       <div class="navItem">
            <span class="limitedOffer">A melhor Loja de T??nis Exclusivos!</span>
        </div>
    </div>
    
</nav>


  <!-- Descri????o dos Produtos-->
  </br>
    <form action="../php/manage_cart.php" method="POST">
      <!-- card left -->
     
      <div id="content-wrapper">
		

        <div class="column">
          <img id=featured src="../img/produtos/prodPrincipal8.png">
    
          <div id="slide-wrapper" >
            <img id="slideLeft" class="arrow" src="../img/img_teste/arrowleft.png">
    
            <div id="slider">
              <img class="thumbnail active" src="../img/produtos/prod8imagem1.jpg">
              <img class="thumbnail" src="../img/produtos/prod8imagem2.jpg">
              <img class="thumbnail" src="../img/produtos/prod8imagem3.jpg">

               </div>
    
            <img id="slideRight" class="arrow" src="../img/img_teste/arrowright.png">
          </div>
        </div>

              <!-- card right -->
              <div class="info">
        <div class = "product-content">
            <h2 class = "product-title"> Air Jordan 11 </h2>
            </div>
  
            <div class="price">
                <i class="fas fa-dollar-sign"></i>
                <h1>R$1.400,00 </h1>
                </div>
  
            <div class = "product-detail">
            </br>
              <h2>Sobre T??nis: </h2>
              <p>Air Jordan 11 Retro Low 'Closing Ceremony' - 528895 103. Closing Ceremony. Air Jordan. Closed Toe. Shoe Shaft Style.</p>
              <p></p>

            

               </div>

           
            <div class="size-container">
                    <h3 class="title">Tamanho</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio1" value="37" required>
                        <label class="form-check-label" for="inlineRadio1">37</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="38" required>
                        <label class="form-check-label" for="inlineRadio2">38</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="39" required>
                        <label class="form-check-label" for="inlineRadio2">39</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="40" required>
                        <label class="form-check-label" for="inlineRadio2">40</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="41" required>
                        <label class="form-check-label" for="inlineRadio2">41</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="42" required>
                        <label class="form-check-label" for="inlineRadio2">42</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Size" id="inlineRadio2" value="43" required>
                        <label class="form-check-label" for="inlineRadio2">43</label>
                    </div>
            </div>
                <div class="continue-button">
                <button type="submit" name="Add_To_Cart" style="color:white">Adicionar Carrinho</button>
                <input type="Hidden" name="Item_Name" value="Air Jordan 11">
                <input type="Hidden" name="Price" value="1400">
            </div>

                  
                       
                    
                
            
        </div>
    </div>
</div>
</div>
</form>
    


    <!-- Rodap??-->
<footer>
    <div class="footerLeft">
        <div class="footerMenu">
            <h1 class="fMenuTitle">Sobre n??s</h1>
            <ul class="fList">
                <li class="fListItem">Atualiza????es sobre a plataforma </li>
                <li class="fListItem">Lan??amento de Campanhas de Marketing </li>
                <li class="fListItem">Informa????es sobre Problemas em geral </li>
                <li class="fListItem">Compartilhamento de materiais educacionais e sugest??es operacionais</li>
              
            </ul>
        </div>
        <div class="footerMenu">
            <h1 class="fMenuTitle">Links ??teis</h1>
            <ul class="fList">
                <a href="../html/Privacidade.html" li class="fListItem">Privacidade</li></br>
                <a href="../html/Termos.html" li class="fListItem">Termos</li></br>
                <a href="../html/trocas.html" li class="fListItem">Trocas e Devolu????es</li></br>
                <a href="../html/quemsomos.html" li class="fListItem">Quem Somos?</li></a>
                </ul>
        </div>
        <div class="footerMenu">
            <h1 class="fMenuTitle">Nosso Site:</h1>
            <ul class="fList">
                <a href="../html/index.html" li class="fListItem">Home</li></br>
                <a href="../html/cadastro.html" li class="fListItem">Cadastrar</li></br>
                <a href="../html/login.html" li class="fListItem">Entrar</li></br>  
                <a href="../html/contato.html" li class="fListItem">Contato</li></br>
                <a href="#" li class="fListItem">Sanja Jornal</li></a>
                </ul>
        </div>
    </div>
    <div class="footerRight">
        <div class="footerRightMenu">
            <h1 class="fMenuTitle">Deseja receber notifica????es de novidades?</h1>
            <div class="fMail">
                <input type="text" placeholder="seu@email.com" class="fInput">
                <button class="fButton">Partiu!</button>
            </div>
        </div>
        <div class="footerRightMenu">
            <h1 class="fMenuTitle">Nos siga nas redes sociais:</h1>
            <div class="fIcons">
                <img src="../img/img_informat/facebook.png" alt="" class="fIcon">
                <img src="../img/img_informat/twitter.png" alt="" class="fIcon">
                <img src="../img/img_informat/instagram.png" alt="" class="fIcon">
                
            </div>
        </div>
        <div class="footerRightMenu">
            <span class="copyright">@CompanhiaSanjaFeet. 2022.</span>
        </div>
    </div>
</footer>

    
<!-- Importando JS-->

<script src="../node_modules/app.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/mobile-navbar.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../js/desc_prod.js"></script>
<script src="../js/desc_prod2.js"></script>


</body>
</html>