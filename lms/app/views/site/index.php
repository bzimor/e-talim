<?php

/* @var $this yii\web\View */

use app\assets\AssetBundle;
//
$assets = \app\assets\MainAssetBundle::register($this);

$this->title = 'e-ta\'lim';
?>
<!-- Start Main Banner -->
<section class="main-banner-wrapper">
    <div class="container">
        <div class="banner-wrapper-content">
            <h1>Take the next step toward your <a href="" class="typewrite" data-period="2000" data-type='[ "Design", "Web", "PHP", "Code" ]'><span class="wrap"></span></a> with Raque</h1>
            <p>95% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.</p>

            <form>
                <input type="text" class="input-search" placeholder="What do you want to learn?">
                <button type="button">Search</button>
            </form>
        </div>
    </div>

    <div class="banner-wrapper-image text-center">
        <img src="<?= $assets->baseUrl; ?>/images/banner-img2.png" alt="image">
    </div>
</section>
<!-- Start Courses Categories Area -->
<section class="courses-categories-area bg-F7F9FB pt-100 pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Courses Categories</span>
            <h2>Browse Trending Categories</h2>
            <a href="courses-category-style-3.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-shape-triangle'></i>
                        Technology
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-font-family'></i>
                        Language
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bxs-drink'></i>
                        Science
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-first-aid'></i>
                        Health
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-bar-chart-alt-2'></i>
                        Humanities
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-briefcase-alt-2'></i>
                        Business
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-book-reader'></i>
                        Math
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="single-courses-category mb-30">
                    <a href="#">
                        <i class='bx bx-target-lock'></i>
                        Marketing
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="particles-js-circle-bubble-2"></div>
</section>
<!-- End Courses Categories Area -->

<!-- End Main Banner -->