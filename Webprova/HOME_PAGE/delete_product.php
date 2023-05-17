<?php 
$nome = $_GET["nome"];

$temp_file= tempnam('.', ''); 

$handle_temp= fopen($temp_file, "w");

$handle_csv= fopen("product.csv", "r");

while (($row = fgetcsv($handle_csv))){
    if ($row[0] != $nome){
        fputcsv($handle_temp, $row);       
    }
}

fclose($handle_csv);

fclose($handle_temp);

rename($temp_file, "product.csv");

header("location: home.php");
?>