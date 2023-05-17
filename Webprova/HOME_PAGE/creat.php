<?php 
$user_nome = $_POST["nome"];
$user_marca = $_POST["marca"];
$user_preço = $_POST["preço"];
$user_tipo= $_POST["tipo"];

$handle = fopen("product.csv", "a");

    fputcsv($handle, [$user_nome, $user_marca, $user_preço, $user_tipo]);

    fclose($handle);
    header("location: home.php")
?>   
