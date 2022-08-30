<?php

include('protect.php');

?>


<html>
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
    <link rel="stylesheet" href="../css/style_card.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_overlay.css">
    <link rel="stylesheet" href="../css/style_menus_perfil.css">


     <!-- Importando Boxicons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


    <!-- Importando Fontes e Imagens para Menu Perfil-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- Título do Site -->
    <title>SanjaFeet : Home</title>
    </head>

<!-- Barra de Navegação-->
 <nav id="nav">
    <div class="navTop">
        <div class="navItem">
            <img src="../img/img_logo/SANJAFEET.png" width="400" height="400" alt="icone">
        </div>
      
       
<!-- Menu usuário-->
<div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="../img/img_menu_perfil/user2.png" alt="">
        </div>

        <div class="menu">
            <h3>
                Editar Perfil
            </h3>
            <ul>
                <li>
                    <span class="material-icons icons-size">person</span>
                    <a href="../php/myprofile.php">Minha Conta</a>
                </li>
               <li>
               <span class="material-icons icons-size">shopping_basket</span>
                    <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                    ?>
                    <a href="../php/mycart.php">Meu Carrinho (<?php echo $count; ?>)</a>
                </li>
                <li>
                    <span class="material-icons icons-size">account_balance_wallet</span>
                    <a href="../php/logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>


     <!-- Slides Navbar-->
    </div>
    <div class="navBottom">
        <h3 class="menuItem">Home</h3>
        <h3 class="menuItem">Promoções</h3>
        <h3 class="menuItem">Contato</h3>
        <h3 class="menuItem">Notícias</h3>
    </div>
</nav>

<body>
    
    <!-- Slides -->
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="../img/img_slides/mascoste_slide1.png" width="800" height="800" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">O que é nossa Loja?
                <h2 class="sliderPrice">A SanjaFeet é uma loja de e-commerce</br> 
                lançada em 2022, ela é uma plataforma 
                 </br>adaptada para usuários que “curtem”</br> 
                 tênis únicos e exclusivos, dando aos </br>
                  consumidores uma experiência de compra online</br>
                  fácil, segura e rápida, através de um 
                </br>forte suporte de pagamentos e cumprimento. </h2>
              </a>
            </div>
            <div class="sliderItem">
                <img src="../img/img_slides/tenis_slide1.png" width="800" height="800"   alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Promoções do mês!</h1>
               <a href="#">
                    <button class="accessButton">Compre agora!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="../img/img_teste/baiano3.png" width="800" height="800" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Ficou alguma dúvida?</h1>
               <a href="../html/contato.html">
                    <button class="accessButton">Entre em contato conosco.</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="../img/img_teste/baiano3.png" width="800" height="800" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Últimas notícias do </br>world tenis </h1>
               <a href="../php/blog.php">
                    <button class="accessButton">Acesse aqui.</button>
                </a>
            </div>
           
        </div>
    </div>

      <!-- Informação do site -->
    <div class="features">
        <div class="feature">
            <img src="../img/img_informat/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">Frete Grátis</span>
            <span class="featureDesc">Nosso frete é Grátis para todo lugar do mundo.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="../img/img_informat/return.png"  alt="">
            <span class="featureTitle">30 dias </span>
            <span class="featureDesc">Produto chegou errado? Voce tem prazo de 30 dias para troca.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="../img/img_informat/gift.png" alt="">
            <span class="featureTitle">Promoções</span>
            <span class="featureDesc">Fique ligado nas promoções do dia.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="../img/img_informat/tosend.png" alt="">
            <span class="featureTitle">Fale Conosco!</span>
            <span class="featureDesc">Encontrou um problema ou quer dar uma sugestão? Fale Conosco.</span>
        </div>
    </div>

    
    
    <!-- Produtos 1  -->
    <h1 class="title-shop">Novidades:</h1>
    <main class="main bd-grid">
        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/ProdPrincipal1.PNG" alt="">
            </div>
            <div class="card__name">
                <p>NIKE LEBRON 10 ELITE PEACH JAM </p>
            </div>
            <div class="card__precis">
               <div>
                <span class="card__preci card__preci--now">R$1.490,00</span>
            </div>
            <a href="../php_produtos/prod1.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
            </button></a>
            </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal2.PNG" alt="">
            </div>
            <div class="card__name">
                <p>AIR JORDAN 12</p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$1.100,00</span>
             </div>
             <a href="../php_produtos/prod2.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal3.PNG" alt="">
            </div>
            <div class="card__name">
                <p>AIR JORDAN 2 EMINEM </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$2.500,00</span>
             </div>
             <a href="../php_produtos/prod3.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal4.png" alt="">
            </div>
            <div class="card__name">
                <p>AIR JORDAN 1 </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$1.050,00</span>
             </div>
             <a href="../php_produtos/prod4.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal5.png" alt="">
            </div>
            <div class="card__name">
                <p>AIR JORDAN 5 RETRO </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$1.300,00</span>
             </div>
             <a href="../php_produtos/prod5.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal6.png" height="210" width="240" alt="">
            </div>
            <div class="card__name">
                <p>JORDAN NIKE AIR 6 ELETRIC GREEN </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$3.999,00</span>
             </div>
             <a href="../php_produtos/prod6.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal7.PNG" alt="">
            </div>
            <div class="card__name">
                <p>NIKE AIR MAG - BACK TO THE FUTURE </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$9.900,00 </span>
             </div>
             <a href="../php_produtos/prod7.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>

        <article class="card">
            <div class="card__img">
                <img src="../img/produtos/prodPrincipal8.png" alt="">
            </div>
            <div class="card__name">
                <p>AIR JORDAN 11 </p>
            </div>
            <div class="card__precis">
                <div>
                 <span class="card__preci card__preci--now">R$1.400,00</span>
             </div>
             <a href="../php_produtos/prod8.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
             </button></a>
             </div>
        </article>
    </main>
    
       <!-- Notícia -->
       <div class="newSeason">
        <div class="nsItem">
            <img src="../img/img_news/travis1.jpg"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">Você Sabia?</h3>
            <h1 class="nsTitle">Depois de ter provocado seus seguidores com supostas imagens, 
                 chegou a hora de ver o resultado da collab Travis Scott x Nike SB Dunk Low, 
                  </h1>
            <h1 class="nsTitle"> um dos  tênis mais aguardados neste começo de ano.</h1></br>
            <a href="../html/blog.html" class="login__button">Ver mais:</a>
        </div>
        <div class="nsItem">
            <img src="../img/img_news/travis2.jpeg"
                alt="" class="nsImg">
        </div>
    </div>

     <!-- Produtos 2 -->
    </br>
     <h1 class="title-shop">Mais vendidos:</h1>
     <main class="main bd-grid">
    <article class="card">
        <div class="card__img">
            <img src="../img/produtos/prodPrincipal9.PNG" alt="">
        </div>
        <div class="card__name">
            <p>BUSCEMI 100 MM DIAMOND </p>
        </div>
        <div class="card__precis">
            <div>
             <span class="card__preci card__preci--now">R$ 1.200,00 </span>
         </div>
         <a href="../php_produtos/prod9.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
         </button></a>
         </div>
    </article>

    <article class="card">
        <div class="card__img">
            <img src="../img/produtos/prodPrincipal10.PNG" alt="">
        </div>
        <div class="card__name">
            <p>NIKE AIR YEEZY 1</p>
        </div>
        <div class="card__precis">
            <div>
             <span class="card__preci card__preci--now">R$9.000,00</span>
         </div>
         <a href="../php_produtos/prod10.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
         </button></a>
         </div>
    </article>

    <article class="card">
        <div class="card__img">
            <img src="../img/produtos/prodPrincipal11.PNG" alt="">
        </div>
        <div class="card__name">
            <p>AIR JORDAN 3</p>
        </div>
        <div class="card__precis">
            <div>
             <span class="card__preci card__preci--now">R$1.300,00 </span>
         </div>
         <a href="../php_produtos/prod11.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
         </button></a>
         </div>
    </article>


    <article class="card">
    <div class="card__img">
        <img src="../img/produtos/prodPrincipal12.PNG" alt="">
    </div>
    <div class="card__name">
        <p>AIR JORDAN 4 CARHAAT X EMNINEM</p>
    </div>
    <div class="card__precis">
        <div>
         <span class="card__preci card__preci--now">R$2.090,00</span>
     </div>
     <a href="../php_produtos/prod12.php"><button class="card__icon"><img src="../img/img_informat/arrowrightpurple.png" width="50px" height="50px" alt="">
     </button></a>
     </div>
</article>
</main>
    

 <!-- Notícias 2 -->
<main class="main bd-grid">
<div class="newsback a">
    <div class="overlay">
    <h2>Os Tênis influenciam na corrida?</h2>
    <p>A resposta é sim e muito. Tanto pela confortabilidade e também pela sua estabilidade, logo corridas de longos períodos não causando lesões.</p>
   <a href="../html/blog.html">
    <button>Veja mais:</button></a>
    </div>
    </div>
    <div class="newsback b">
    <div class="overlay">
    <h2>Como escolha de Tênis fez Magic Johson deixar ganhar de bilhões de dólares </h2>
    <p>Magic tinha duas propostas de fornecedoras: a converse ofereceu mais dinheiro, 
    enquanto a Nike previa ações da empresa;
    O craque preferiu o dinheiro, e as ações que ele rejeitou atualmente valeriam bilhões de dólares. 
    </p>
    <a href="../html/blog.html">
        <button>Veja mais:</button></a>
    </div>
    </div>
    <div class="newsback c">
    <div class="overlay">
    <h2>Cristiano Ronaldo se incomoda com seguidores que zoaram tênis diferentão do filho</h2>
    <p>Cristianinho aparece usando um "Yeezy Foam Runner". Nos comentários,
     os seguidores brincaram com o modelo. Cr7 saiu em defesa do menino. 
    "Os sapatos não é para quem quer. Mas sim quem pode", escreveu o jogador.
    </p>
    <a href="../html/blog.html">
        <button>Veja mais:</button></a>
    </div>
    </div>
   
</main>

<!-- Rodapé-->
<footer>
    <div class="footerLeft">
        <div class="footerMenu">
            <h1 class="fMenuTitle">Sobre nós</h1>
            <ul class="fList">
                <li class="fListItem">Atualizações sobre a plataforma </li>
                <li class="fListItem">Lançamento de Campanhas de Marketing </li>
                <li class="fListItem">Informações sobre Problemas em geral </li>
                <li class="fListItem">Compartilhamento de materiais educacionais e sugestões operacionais</li>
              
            </ul>
        </div>
        <div class="footerMenu">
            <h1 class="fMenuTitle">Links Úteis</h1>
            <ul class="fList">
                <a href="../html/Privacidade.html" li class="fListItem">Privacidade</li></br>
                <a href="../html/Termos.html" li class="fListItem">Termos</li></br>
                <a href="../html/trocas.html" li class="fListItem">Trocas e Devoluções</li></br>
                <a href="../html/quemsomos.html" li class="fListItem">Quem Somos?</li></a>
                </ul>
        </div>
        <div class="footerMenu">
            <h1 class="fMenuTitle">Nosso Site:</h1>
            <ul class="fList">
                <a href="../html/index.html" li class="fListItem">Home</li></br>
                <a href="../html/contato.html" li class="fListItem">Contato</li></br>
                <a href="#" li class="fListItem">Sanja Jornal</li></a>
                </ul>
        </div>
    </div>
    <div class="footerRight">
        <div class="footerRightMenu">
            <h1 class="fMenuTitle">Deseja receber notificações de novidades?</h1>
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
   

<!-- Função JS Menu Perfil-->
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

</body>
</html>