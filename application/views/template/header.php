<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <script src="<?= base_url('assets/') ?>js/chart.min.js"></script>

    <style>
        .img-cirle {
            display: block;
            border-radius: 50%;
            margin: 5% auto;
        }
    </style>

    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-white rounded fixed-top">
        <div class="container">

            <a class="navbar-brand text-primary font-weight-bold" href="<?=base_url('home')?>">E VOTING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if ($this->session->userdata('id') != NULL) : ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link nav-active active" href="<?=base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active" href="#sec2">Voting</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <?= $this->session->userdata('nama') ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>

                            </div>
                        </li>

                    </ul>

                </div>
            <?php endif; ?>

        </div>
    </nav>