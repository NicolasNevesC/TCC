<?php

include('../php/protect.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            { 

            echo ("<SCRIPT LANGUAGE='JavaScript'>   
            window.alert('Item já adicionado')
            window.location.href='../php/index_logado.php?';
            </SCRIPT>");
            }
            else
             {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Size'=>$_POST['Size'],'Quantity'=>1);
                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('Item adicionado')
                window.location.href='../php/index_logado.php?';
                </SCRIPT>");
             }
        }
       else
       {
         $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Size'=>$_POST['Size'],'Quantity'=>1);
         echo ("<SCRIPT LANGUAGE='JavaScript'>   
         window.alert('Item adicionado')
         window.location.href='../php/index_logado.php?';
         </SCRIPT>");
        } 
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('Item Removido')
                window.location.href='../php/mycart.php?';
                </SCRIPT>"); 
            }    
        }
    }
   if(isset($_POST['Mod_Quantity']))
   {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.location.href='../php/mycart.php?';
                </SCRIPT>"); 
            }
        }
   }
} 

?>