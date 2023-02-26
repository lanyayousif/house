<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white">


    <?php     if($session->get_logged_in()){  ?>
    <nav class="navbar navbar-expand-lg  bg-success m-3 rounded-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="assets/img/home.svg" alt="Logo" width="60" height="60"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php if($session->rule==2){echo '<a class="nav-link btn btn-dark text-white fw-semibold px-3 mx-3 h4 my-2 " href="#">welcome admin</a>'; } ?>
                    <a class="nav-link btn btn-warning px-3 fw-semibold h4 my-2 mx-3" href="#">Home</a>
                </div>
                <div class="navbar-nav mx-3 ">
                    <a class="nav-link btn btn-warning px-3 fw-semibold   h4  my-0 mx-auto" href="?logout">LOG OUT</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row m-5 justify-content-center  ">
        <div class="col-lg-3 col-sm-12 p-3 m-1 bg-success rounded-3">
            <ul class="list-group list-group-flush rounded-3 ">
                <li class="list-group-item m-2 rounded-4 "><a href="upload_post.php"
                        class="w-100 text-start btn  stretched-link">UPLOAD YOUR POST</a>
                </li>
                <li class="list-group-item m-2 rounded-4">
                    <a href="owner_post.php" class="w-100 text-start btn  stretched-link">VIEW YOUR POST</a>
                </li>
                <?php if($session->rule==2){?>
                <li class="list-group-item m-2 rounded-4">
                    <a href="allpost.php" class="w-100 text-start btn  stretched-link">VIEW ALL POST</a>
                </li>
                <li class="list-group-item m-2 rounded-4">
                    <a href="adduser.php" class="w-100 text-start btn  stretched-link">ADD USER</a>
                </li>
                <li class="list-group-item m-2 rounded-4">
                    <a href="view_all_user.php" class="w-100 text-start btn  stretched-link">VIEW All User</a>
                </li>
                <?php }?>
            </ul>
        </div>
        <?php }?>