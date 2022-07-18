<?php include('config/database.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Porsche</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="navbar-brand" href="#"><img src="/images/logo.jpg" width="35" class="d-inline-block align-top" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="index.php">Rólunk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="termekek.php">Termékek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kapcsolat.php">Kapcsolat és rendelés</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <img class="img-fluid" src="/images/h_p.jpg" style="width: 100%">
    </div>