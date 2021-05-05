<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title><?= "$title"; ?></title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Catalog Mobil dan Motor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="<?= base_url('/'); ?>">Home </a> -->
                            <?php
                            if ($jenis == 'home') {
                            ?> <a class="nav-link <?= 'active'; ?>" href="<?= base_url('/'); ?>">Home</a>
                            <?php
                            } else {
                            ?> <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if ($jenis == 'mobil') {
                            ?> <a class="nav-link <?= 'active'; ?>" href="<?= base_url('/mobil'); ?>">Mobil</a>
                            <?php
                            } else {
                            ?> <a class="nav-link" href="<?= base_url('/mobil'); ?>">Mobil</a>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if ($jenis == 'motor') {
                            ?> <a class="nav-link <?= 'active'; ?>" href="<?= base_url('/motor'); ?>">Motor</a>
                            <?php
                            } else {
                            ?> <a class="nav-link" href="<?= base_url('/motor'); ?>">Motor</a>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>