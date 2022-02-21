<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Travel Railway</title>
    <style>
        #hero{
            height: 60vh;
            background-image: url('./img/train-sur-le-chemin.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/homeController.php';

$home = new HomeController();

$pages = ['home', 'add', 'update', 'delete'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('home');
}

?>

<?php
require_once './views/includes/footer.php';
?>