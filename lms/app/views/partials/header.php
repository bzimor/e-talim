<?php

/* @var $this \yii\web\View */

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use justcoded\yii2\rbac\models\Item as RbacItem;

?>
<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<div class="top-header top-header-style-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <ul class="top-header-contact-info">
                    <li>
                        Telefon:
                        <a href="tel:502464674">+998909999999</a>
                    </li>
                </ul>

                <div class="top-header-social">
                    <span>Follow us:</span>
                    <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                    <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <ul class="top-header-login-register">
                    <li><a href="/auth/login"><i class="bx bx-log-in"></i> Kirish</a></li>
                    <li><a href="/auth/register"><i class="bx bx-log-in-circle"></i> Ro`yxatdan o`tish</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar-area navbar-style-three">
    <div class="raque-nav">
        <?php
        NavBar::begin([
            'brandLabel' => 'E-Ta\'lim',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => ['navbar', 'navbar-expand-md', 'navbar-light'],
            ],
        ]);

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Kurslar', 'url' => ['/category']],
                ['label' => 'Videolar', 'url' => ['/video']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],

                ['label' => 'Admin Panel', 'url' => ['/admin'], 'visible' => user()->can(RbacItem::PERMISSION_ADMINISTER)],
                Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/auth/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/auth/logout'],
                        'linkOptions' => ['data-method' => 'post']],
            ],
        ]);
        NavBar::end();
        ?>
    </div>
</div>

