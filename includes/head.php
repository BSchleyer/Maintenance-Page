<?php
include 'app/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $indexName ?> | <?= $siteName ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $seo_description ?>">
    <meta name="keywords" content="<?= $seo_keywords ?>">
    <meta name="author" content="Björn Schleyer & Schleyer-EDV">
    <meta name="copyright" content="Copyright 2020 Schleyer-EDV | All Rights reserved.">
    <meta name="email" content="mail@bschleyer.de" />
    <meta name="website" content="https://www.bschleyer.de/" />
    <meta name="version" content="v1.2" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= $imgUrl ?>icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?= $cdnUrl ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $cdnUrl ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= $cdnUrl ?>css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!--===============================================================================================-->
</head>
<body>