<?php 

session_start();

$user_nome = $_POST["nome"];
$user_marca = $_POST["marca"];
$user_preço = $_POST ["preço"];
$user_tipo= $_POST["tipo"];

$temp_file= tempnam(".", "");

$handle_csv= fopen("product.csv", "r");

$handle_temp= fopen($temp_file, "w");

while(($row = fgetcsv($handle_csv))){
    if ($row[0] !=$user_nome){
        fputcsv($handle_temp, $row);
    }else{
        fputcsv($handle_temp, [$user_nome, $user_marca, $user_preço, $user_tipo]);
    }
}
 fclose($handle_csv);
 fclose($handle_temp);

 rename($temp_file, "product.csv");

 header("location: ../HOME_PAGE/home.php");

?>