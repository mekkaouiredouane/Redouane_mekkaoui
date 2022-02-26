<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION ['login'])){ 
    echo "bonjour et bon retour" ." " .$_SESSION['login'];
}
else { $_SESSION['login']=$_GET['login'];
    echo "bonjour " .$_GET['login']; }
?>
</body>
</html>