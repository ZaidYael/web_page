<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $title; ?></title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap');
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body class="<?php echo $class; ?>" style="padding-top: 70px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/web_page/index.php">
                <img src="images/logo_kst.jpeg" alt="logo_kst" class="logo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Sneakers.php">SNEAKERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Clothes.php">ROPA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Accesories.php">ACCESSORIOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 