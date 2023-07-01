<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>public/favicon.ico" type="image/x-icon">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?> ">
                <img style="padding-left: 1rem;" src="<?php echo base_url() ?>public/assets/icons/star.svg" alt="">
                <b>Hura-Hura</b>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url() ?>" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About us</a>
                    </li>
                </ul>
                <form class="d-flex my-3 my-lg-0">
                    <input class="form-control me-lg-1 me-sm-2" type="text" placeholder="Search for destinations">
                    <a class="btn btn-secondary me-2" style="padding-top: 9px;" href="<?php echo site_url('search') ?>">Search</a>

                    <a class="btn btn-primary my-2 my-sm-0 " style="padding-top: 9px;" href=" <?php echo site_url('login') ?>" type="submit">Login</a>
                </form>
            </div>
        </div>
    </nav>