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

    <title>Fregg</title>

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

<div class="body_bg layout_padding">
    <!-- contact section -->
    <section class="contact_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Contacta-nos Agora!
                </h2>
            </div>
        </div>
        <div class="container contact_bg layout_padding2-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form ">
                        <?php
                        /** @var yii\web\View $this */
                        /** @var yii\bootstrap5\ActiveForm $form */
                        /** @var \frontend\models\ContactForm $model */

                        use yii\bootstrap5\Html;
                        use yii\bootstrap5\ActiveForm;
                        use yii\captcha\Captcha;

//                        $this->title = 'Contact';
//                        $this->params['breadcrumbs'][] = $this->title;
                        ?>
                        <div class="site-contact">
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Escreva aqui...'])->label('Nome')  ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Escreva aqui...'])->label('Email') ?>

                            <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Escreva aqui...'])->label('Titulo:') ?>

                            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Escreva aqui...'])->label('Messagem:') ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
</div>

<!-- info section -->
<section class="info_section layout_padding">
    <div class="footer_contact">
        <div class="heading_container">
            <h2>
                Contacta-nos
            </h2>
        </div>
        <div class="box">
            <a href="" class="img-box">
                <img src="images/location.png" alt="" class="img-1">
                <img src="images/location-o.png" alt="" class="img-2">
            </a>
            <a href="" class="img-box">
                <img src="images/call.png" alt="" class="img-1">
                <img src="images/call-o.png" alt="" class="img-2">
            </a>
            <a href="" class="img-box">
                <img src="images/envelope.png" alt="" class="img-1">
                <img src="images/envelope-o.png" alt="" class="img-2">
            </a>
        </div>
    </div>
</section>
<!-- end info section -->

<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        Copyright &copy; 2024 All Rights Reserved By
        <a href="">LeiriCar</a>
    </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
