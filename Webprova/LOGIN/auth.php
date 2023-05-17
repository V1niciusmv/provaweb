<?php 

session_start();

$user_email= $_POST["email"];
$user_password= $_POST["password"];

$handle= fopen("../USERS/users.csv", "r");

while($row = fgetcsv($handle)){
    if ($row[1] == $user_email && $row[2] == $user_password){
        $_SESSION["email"] = $row[1];
        $_SESSION["name"] = $row[0];        
        header("location: ../HOME_PAGE/home.php");
        exit();
    }
}

header("location: login.php? error= Não autorizado, usuario ou senha incorretos");
?>