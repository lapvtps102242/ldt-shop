<?php
    //session_start();
   
    if(isset($_GET["id_sp"]))
    {
        $i=0;
        $found=false;
        $pro_id=$_GET["id_sp"];
        if(!$_SESSION["cart_items"])
        {
            $_SESSION["cart_items"]=array(0=>array("id_sp"=>$pro_id, "quantity"=>1));
        }
        else
        {
            foreach($_SESSION["cart_items"] as $item)
            {
                $i++;
                while(list($key, $value)=each($item))
                {
                    if($key=="id_sp" && $value==$pro_id)
                    {
                        array_splice($_SESSION["cart_items"], $i-1, 1, array(array("id_sp" => $pro_id,"quantity" => $item["quantity"]+1)));
                        $was_found = true;
                    }
                }
            }
            if($was_found==false){
                array_splice($_SESSION["cart_items"], array("id_sp" => $pro_id, "quantity" => 1));
            }
        }
    }
    header("location:index.php");
   // echo var_dump($_SESSION["cart_items"]);
   //foreach($_SESSION["cart_items"] as $item)
   
?> 

