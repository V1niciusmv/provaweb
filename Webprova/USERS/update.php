<?php 

session_start();

$user_name = $_POST["name"];
$user_password = $_POST["password"];

$temp_file= tempnam(".", "");

$handle_csv= fopen("../USERS/users.csv", "r");

$handle_temp= fopen($temp_file, "w");

while(($row = fgetcsv($handle_csv))){
    if ($row[1] !=$_SESSION["email"]){
        fputcsv($handle_temp, $row);
    }else{
        fputcsv($handle_temp, [$user_name, $row[1], $user_password]);
        $_SESSION["name"] = $user_name;
    }
}
 fclose($handle_csv);
 fclose($handle_temp);

 rename($temp_file, "../USERS/users.csv");

 header("location: ../HOME_PAGE/home.php");

?>