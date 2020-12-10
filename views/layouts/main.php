<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/a4e584b747.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
    <div class="container">
        <nav class="navbar navigation">
            <a class="navbar-brand" href="#"><?= Html::img('@web/images/logo.svg' , ['alt' => 'logo']); ?> <!--<img src="@web/images/logo.svg" alt="Logo">-->
            </a>
            <div class="header__login header__login-mobile">
            </div>
            <ul class="navigation-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= Url::to(['/site'])?>">Резюме</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['/myresume'])?>">Мои резюме</a>
                </li>
            </ul>
            <div class="navigation-menu__mobile">
                <ul class="navigation-menu__mobile-nav">
                    <div class="navigation-menu__mobile-nav-top">
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="<?= Url::to(['/site'])?>">Резюме</a>
                        </li>
                        <li class="navigation-menu__mobile-nav-item">
                            <a class="nav-link" href="<?= Url::to(['/myresume'])?>">Мои резюме</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="navigation-toggler">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </div>
</header>
<div class="wrap">
    <!-- <//?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'hello', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?> -->

    <div class="container">
        <!-- <//?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <//?= Alert::widget() ?> -->
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="row">
                <div class="footer__col footer__policy col-lg-3 col-md-12 p-rel">
                    <a class="footer__logo" href="#"><?= Html::img('@web/images/logo.svg' , ['alt' => 'logo']); ?></a>
                    <div class="footer__soc-icon">
                        <a href="#"><?= Html::img('@web/images/vk.png' , ['alt' => 'vk']); ?></a>
                        <a href="#"><?= Html::img('@web/images/facebook.png' , ['alt' => 'facebook']); ?></a>
                        <a href="#"><?= Html::img('@web/images/twitter.png' , ['alt' => 'twitter']); ?></a>
                        <a href="#"><?= Html::img('@web/images/instagram.png' , ['alt' => 'instagram']); ?></a>
                    </div>
                    <ul class="footer__ul-policy">
                        <li><a href="#">Все права защищены</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                        <li><a href="#">Правила и условия</a></li>
                    </ul>
                </div>
                <div class="footer__col col-lg-3 col-md-12">
                    <ul class="footer__ul">
                        <li><a href="#">Компаниям</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Наши вакансии</a></li>
                        <li><a href="#">Защита персональных данных</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Инвесторам</a></li>
                        <li><a href="#">Партнерам</a></li>
                    </ul>
                </div>
                <div class="footer__col col-lg-3 col-md-12">
                    <ul class="footer__ul">
                        <li><a href="#">Соискателям</a></li>
                        <li><a href="#">Готовое резюме</a></li>
                        <li><a href="#">Продвижение резюме</a></li>
                        <li><a href="#">Карьерный консультант</a></li>
                        <li><a href="#">Автоподнятие резюме</a></li>
                        <li><a href="#">Профориентация</a></li>
                        <li><a href="#">Рассылка в агенства</a></li>
                    </ul>
                </div>
                <div class="footer__col col-lg-3 col-md-12">
                    <ul class="footer__ul">
                        <li><a href="#">Работодателям</a></li>
                        <li><a href="#">База резюме</a></li>
                        <li><a href="#">Кабинет для работодателя</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
