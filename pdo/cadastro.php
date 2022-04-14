<?php
$host = "localhost";
$user = "root";
$senha = "" ;
$bd = "gaming";

$connect = new mysqli($host, $user, $senha, $bd);



$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuarios( email, senha ) VALUES ('".$email."', '".$senha."')";
$result = mysqli_query($connect,$sql);


  echo"<script language='javascript' type='text/javascript'>;window.location.href='indexPI.html'</script>";



  
?>
