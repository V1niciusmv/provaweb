<?php 

session_start();

$temp_file= tempnam('.', ''); 

$handle_csv= fopen("../USERS/users.csv", "r");

$handle_temp= fopen($temp_file, "w");

while (($row = fgetcsv($handle_csv))){
    if ($row[1] != $_SESSION['email']){
        fputcsv($handle_temp, $row);

    }
}

fclose($handle_csv);

fclose($handle_temp);

rename($temp_file, "users.csv");

session_destroy();

header("location:../LOGIN/login.php");

?>