<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.css">
    <title>Halaman <?= $data['judul']?></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= BASEURL ?>/about">About</a>
          <a class="nav-item nav-link" href="<?= BASEURL ?>/about/page">Page</a>
        </div>
      </div>
      

      <!-- <script>
          document.getElementsByTagName('a')[1].classList.remove('active');
          var select = document.getElementsByTagName('a')[2];
          select.classList.add('active');
        </script> -->
</nav>
<?php
      /* if (!isset($data['class'])) {
        echo ("<h6> parameter data['class']"." kamu belum di set </h6>");
      }elseif ($data['class'] == 'home') {
        echo "
        <script>
          var select = document.getElementsByTagName('a')[1];
          select.classList.add('active');
        </script>
        ";
      }elseif ($data['class'] == 'about') {
        echo "
        <script>
          var select = document.getElementsByTagName('a')[2];
          select.classList.add('active');
        </script>
        ";
      }elseif ($data['class'] == 'page') {
        echo"
        <script>
          var select = document.getElementsByTagName('a')[3];
          select.classList.add('active');
        </script>
        ";

      } */
?>