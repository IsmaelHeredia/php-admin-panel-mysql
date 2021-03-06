<?php

while (! file_exists("functions") ) {
    chdir("..");
}

include_once("functions/Helper.php");

$helper = new Helper();

$helper->verificar_usuario_logeado();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title> 
    <link rel="icon" href="#">
    
    <!-- Bootstrap -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <link id="theme" href="css/style.css" rel="stylesheet" />
    
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js" charset="UTF-8"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="container-fluid" style="margin-top: 50px">