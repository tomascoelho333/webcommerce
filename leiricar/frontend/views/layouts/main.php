<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font awesome stylesheet -->
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

<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand mr-5" href="<?= Yii::$app->homeUrl ?>">
                    <img src="images/logo.png" alt="">
                    <span>LeiriCar</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/about']) ?>">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/service']) ?>">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/contact']) ?>">Contacta-nos</a>
                            </li>
                            <?php if (Yii::$app->user->isGuest): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/signup']) ?>">Signup</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="navbar-divider"></div>
                        <?php if (Yii::$app->user->isGuest): ?>
                            <div class="d-flex">
                                <a class="btn btn-link login text-decoration-none" href="<?= Yii::$app->urlManager->createUrl(['/site/login']) ?>">Login</a>
                            </div>
                        <?php else: ?>
                            <div class="d-flex">
                                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout text-decoration-none']
                                )
                                . Html::endForm(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<section class="container-fluid footer_section">
    <p>
        Copyright &copy; 2024 All Rights Reserved By
        <a href="">LeiriCar</a>
    </p>
</section>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
