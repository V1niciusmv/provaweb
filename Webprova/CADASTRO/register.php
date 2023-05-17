<?php 

$user_name= $_POST['name'];
$user_email= $_POST['Email'];
$user_password= $_POST['password'];

$handle= fopen("../USERS/users.csv", "r");

while($row = fgetcsv($handle)){
    if ($row[1] == $user_email){
        header("location: register_user.php?error=Email ja ultilizado");
        exit();
    }
}

$handle= fopen("../USERS/users.csv", "a");

fputcsv($handle, [$user_name, $user_email, $user_password]);

fclose($handle);

header("location:../LOGIN/login.php")
?>