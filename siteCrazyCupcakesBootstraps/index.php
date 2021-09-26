<!DOCTYPE html>
<html lang="fr - be">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/site.css">

    <title>Crazy Cupcakes - Page d'accueil</title>
</head>

<body>
	<?php
include "inc/menu.php";
?>
<div class="container mt-2 text-white">
<div class="jumbotron bg-dark">
	<h2 class = "text-left">Crazy Cupcakes</h2>

<p>Fiers de notre savoir faire, venez découvrir nos Crazy Cupcakes faits avec Amour et Passion depuis déjà 20 ans. C'est une histoire familiale que vous pourrez</p>
<a href="about.php">Découvrir</a>

<h3>Carousel qui représente en imaage nos délicieux produits Crazy Cupcakes</h3>
<div id="monCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner text-center">
            
			<img class='img-fluid img-thumbnail product'  src='./Images/cupcake1.jpg' aria-label='Le Pinky'>
			<div class='carouse0l-item  active'>
        </div>
        
        <div class='carousel-item '>
        <img class='img-fluid img-thumbnail product'  src='./Images/cupcake2.jpg' aria-label='Le Brown'>
        </div>
        
        <div class='carousel-item '>
        <img class='img-fluid img-thumbnail product'  src='./Images/cupcake3.jpg' aria-label='Le Caramel'>
        </div>
        
        <div class='carousel-item '>
        <img class='img-fluid img-thumbnail product'  src='./Images/cupcake4.jpg' aria-label='Le Blue'>
        </div>
        
        <div class='carousel-item '>
        <img class='img-fluid img-thumbnail product'  src='./Images/cupcake5.jpg' aria-label='Le Rainbow'>
        </div>
                </div>
        <!-- Contrôles Précédent et Suivant -->
        <a class="carousel-control-prev" href="#monCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#monCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
    </div>
</div>



<pclass = "text-right">copy; Copyright 2021><img class="d-inline-block mb-1" height="15" src='./Images/logo.png' aria-label="Logo Crazy Cupcakes">Crazy Cupcakes</p>
 

</div>
<?php

include "inc/liensFinHtml.php";
?>