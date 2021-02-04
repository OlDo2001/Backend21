<?php

header("Content-Type: application/json; charset=UTF-8");

include('arrays.php');
include('Product.php');

$count= isset($_GET["show"]) ? $_GET["show"] : 10;
try{ 
    if((is_numeric($count))&&(1<=$count)&&($count<=10)){

        $products = array(); 

        for ($i=0; $i < $count; $i++) {
            $product = new Product($name[$i], $img[$i], $description[$i], $price[$i]);
            array_push($products, $product->toArray());
        }

        echo json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    } 
    else throw new Exception("Error! Show must be between 1 and 10.");
   
} catch (Exception $e) { 
    echo json_encode(array('msg'=>utf8_encode($e->getMessage())),JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>



