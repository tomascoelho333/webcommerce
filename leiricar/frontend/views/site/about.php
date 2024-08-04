<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

//$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= Html::encode($this->title) ?> - LeiriCar</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">


<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Sobre Nós
                        </h2>
                    </div>
                    <p>
                        O projeto LeiriCar consiste em uma aplicação móvel personalizada, que permitirá aos clientes explorar o catálogo de produtos de limpeza,
                        agendar limpezas, ver uma breve descrição sobre os produtos, entre outra coisas,
                        até achar o produto ideal para o que pretende.
                        Objetivo desta aplicação será facilitar a procura de produtos para o cliente.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/about-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->





<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
