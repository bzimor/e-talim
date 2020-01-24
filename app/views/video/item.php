<?php

/* @var $this yii\web\View */

use app\assets\AssetBundle;
use yii\web\View;

$assets = AssetBundle::register($this);

$appAssets = Yii::$app->assetManager->getPublishedUrl('@app/assets');

$this->title = 'Azon TV onlayn efir';

$this->registerJs(
    "var player = new Clappr.Player(
        {
        width: '100%',
        height: '100%',
        source: 'https://tv.azon.uz/high/stream.m3u8',
        poster: '" . $appAssets . "/images/azon-tv.png',
        // autoPlay: true,
        parentId: '#player',
        disableErrorScreen: true
        });",
    View::POS_READY
    );
?>

<div class="row equal pb-4" style="display: flex; flex-flow: row wrap; align-content: flex-start;">
    <div class="col-lg-<?=$playlist_items ? '8' : '12'?> mb-2">
        <div class="embed-responsive embed-responsive-16by9">
        <?php if ($current_video->file): ?>
        <div id="player" class="embed-responsive-item"></div>
        <?php else: ?>        
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$current_video->youtube_url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php endif;?>
        </div>
        <h4 class="p-2 bg-white"><?=$current_video->name?></h4>
    </div>
    <?php if ($playlist_items): ?>
    <div class="col-lg-4 mb-3">
        <div class="py-2 text-center" style="background-color:#303E4B; color: #fff">
            <span style="font-weight: 500;"><?=$current_video->playlist->name?> (<?=count($playlist_items)?>)</span>
        </div>
        <div id="live-playlist" class="rounded-0 bg-white">
            <ul class="list-group list-group-flush p-2">
            <?php foreach ($playlist_items as $key => $item):?>
                <?php if ($item->id == $current_video->id): ?>
                <li class="list-group-item px-1 py-1" style="font-size: .8rem;">
                    <img class="float-left mr-2" src="/site/image/<?=str_replace('.', '/', $item->photo_path)?>?w=90&h=60&fit=crop" alt="">
                    <span class="text-bold" style="color: #f38b0b;">
                        <?=$item->name?>
                    </span>
                </li>
                <?php else: ?>
                <li class="playlist-item-link list-group-item px-1 py-1" style="font-size: .8rem;">
                    <a href="/video/<?=$item->uuid . '?playlist=' . $item->playlist->uuid?>">
                    <img class="float-left mr-2" src="/site/image/<?=str_replace('.', '/', $item->photo_path)?>?w=90&h=60&fit=crop" alt="">
                    <span class="text-bold">
                    <?=$item->name?>
                    </span>
                    </a>
                </li>
                <?php endif;?>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php endif;?>
</div>

<div class="mb-2">
    <div class="d-inline-block">
        <span class="mr-3 h-100" style="font-weight:600; font-size: 1.5rem;">Сўнгги видеолар</span>
        <hr style="border-top: 5px solid #F7941F; margin: 0 0 0.5rem; width: 4rem;">
    </div>
</div>

<div id="multi-carousel" class="multi-item carousel slide mx-2" data-ride="carousel" data-interval="false">
    <div class="carousel-inner row w-100 mx-auto bg-white" role="listbox">
        <?php foreach ($last_videos as $key => $item):?>
        <?php if ($key < 8):?>
        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 <?=$key==0 ? 'active' : ''?>">
            <div style="position: relative;">
                <img src="/site/image/<?=str_replace('.', '/', $item->photo_path)?>?w=320&h=140&fit=crop" class="img-fluid mx-auto d-block" alt="img1">
                <a class="btn btn-yellow rounded-circle" href="/video/<?=$item->uuid . '?playlist=' . $item->playlist->uuid?>" style="border: 1.5px solid #fff; position: absolute; width: 38px; height:38px; left: 50%; top: 50%; transform: translate(-50%, -50%);">
                    <i style="color: #fff;" class="fa fa-play"></i>
                </a>
            </div>
            <div class="py-2" style="line-height: 1.2;">
            <a href="/video/<?=$item->uuid . '?playlist=' . $item->playlist->uuid?>" class="" style="font-size: 0.9rem; font-weight: 600;"><?=$item->name?></a>
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
    <a class="carousel-control-prev" href="#multi-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#multi-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>