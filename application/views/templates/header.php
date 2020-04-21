<!--
Name: Casey Meurer
Coding 08
Purpose: Header template
-->

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <title><?= $title ?></title>
        <link href="assets/css/main.css" type="text/css" rel="stylesheet" />
        <?= $contactcss; ?>
        <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/ico">
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand mr-3">Fox-Body Mustang</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="home" class="nav-item nav-link active">Home</a>
                    <a href="exterior" class="nav-item nav-link">Exterior</a>
                    <a href="interior" class="nav-item nav-link">Interior</a>
                    <a href="specs" class="nav-item nav-link">Specs</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">