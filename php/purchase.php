<?php

include('../php/protect.php');

include('../php/connect.php');


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $nome_destinatario = $_POST['c_nome_destinatario']; 
        $cep = $_POST['c_cep']; 
        $endereco = $_POST['c_endereco'];
        $pay_mode = $_POST['pay_mode'];
 
        
        $query1="INSERT INTO `gerenciador_pedidos`(`Nome_destinatario`, `CEP`, `Endereco`, `Pay_Mode`)
         VALUES ('$nome_destinatario','$cep','$endereco','$pay_mode')";

	    $resultado_purchase = mysqli_query($conexao, $query1); 


        if($resultado_purchase)
        {
            $Order_Id=mysqli_insert_id($conexao);
            $query2="INSERT INTO `pedidos_usuarios`(`codigo_pedido`, `Nome_Produto`, `Preco`, `Quantidade`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conexao,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Nome_Produto,$Preco,$Quantidade);
                foreach($_SESSION['cart'] as $key => $values)
                {
                  $Nome_Produto=$values['Item_Name'];
                  $Preco=$values['Price'];
                  $Quantidade=$values['Quantity'];
                  mysqli_stmt_execute($stmt);      
                }  
                unset($_SESSION['cart']);
                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('Pedido Feito')
                window.location.href='../php/index_logado.php?';
                </SCRIPT>"); 
            }
            else
            {
                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('SQL Query Prepare Error')
                window.location.href='../php/mycart.php?';
                </SCRIPT>"); 
            }
        }
        else
        {
            echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('SQL Error')
                window.location.href='../php/mycart.php?';
                </SCRIPT>"); 
        }
    }
}


?>