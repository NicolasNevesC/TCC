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

    <!-- Importando o CSS -->
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css">

    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SanjaFeet :: Cart</title>
</head>

  <!-- Barra de Navegação-->
  <nav id="nav">
  <div class="navTop">
      <div class="navItem">
      <a href="../php/index_logado.php">   
      <img src="../img/img_logo/SANJAFEET.png" width="300" height="300" alt="icone"></a>
      </div>
     <div class="navItem">
          <span class="limitedOffer">A melhor Loja de Tênis Exclusivos!</span>
      </div>
  </div>
  
</nav>


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text center border rounded bg-light my-5">
                <h1>Meu carrinho</h1>   
        </div>

        <div class="col-lg-9">
        
        <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Número Serial.</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Tamanho escolhido</th>
      <th scope="col">Valor do Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php 
   
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
            $sr=$key+1;
            echo" 
                <tr>
                    <td>$sr</td>
                    <td>$value[Item_Name]</td>
                    <td>$value[Size]</td>
                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                    <td>
                    <form action='../php/manage_cart.php' method='POST'>
                      <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                    </td>
                    <td class='itotal'></td>
                    <td>
                      <form action='../php/manage_cart.php' method='POST'>
                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                      </form>
                    </td>
                </tr>    
            "; 
    }
    }
?>
    

   
  </tbody>
</table>

        </div>

    <div class="col-lg-3">
      <div class="border bg-light rounded p-4">
      <h4>Total Geral:</h4>
      <h5 class="text-right" id="gtotal"></h5>
      <br>
      <?php 
       if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
       { 
      ?>
      <form action="../php/purchase.php" method="POST">
      <div class="form-group">
        <label>Nome do Destinatário:</label>
        <input type="text" name="c_nome_destinatario" class="form-control" required >
        </div>
      <div class="form-group">
        <label>CEP:</label>
        <input type="number" name="c_cep" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Endereço:</label>
        <input type="text" name="c_endereco" class="form-control" required>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pay_mode" value="CDC" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
          Cartão de Crédito
          </br>
          <input class="form-check-input" type="radio" name="pay_mode" value="PIX" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
          PIX
          </label>
          </br>
          <input class="form-check-input" type="radio" name="pay_mode" value="Boleto" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
          Boleto
          </label>
        </div>
        <br>
        <button class="btn btn-success btn-block" name="purchase">Fazer a compra</button>
      </form>
      <?php 
      }
      ?>
  </div>
  </div>


</div>
</div>


<script>


      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');

      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

          gt=gt+(iprice[i].value)*(iquantity[i].value);

        } 
        gtotal.innerText=gt;
      }
      

      subTotal();
      

</script>

</body>
</html>