<?php require "inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Books</title>
</head>

<body>
    <?php
    if(!isset($_GET['vista']) || $_GET['vista'] == ''){
        $_GET['vista'] = 'login';
    }

    if(is_file("vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET["vista"]!="404"){
        include "inc/header.php";
        include "./vistas/".$_GET['vista'].".php";
    } else {
        if($_GET['vista'] == 'login') {
            include "./vistas/login.php";
        } else {
            include "./vistas/404.php";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/js/ajax.js"></script>
</body>

</html>