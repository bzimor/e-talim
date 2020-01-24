<?php

/* @var $this yii\web\View */

use app\assets\AssetBundle;
use yii\web\View;

$assets = AssetBundle::register($this);

$appAssets = Yii::$app->assetManager->getPublishedUrl('@app/assets');

$this->title = 'Azon TV';

?>
<h1 class="mr-3 h-100" style=""><?=$current_category->name?></h1>

<?php foreach ($playlists as $playlist):?>
<div class="mb-2">
    <div class="d-inline-block">
        <span class="mr-3 h-100" style="font-weight:600; font-size: 1.5rem;"><?=$playlist->name?></span>
        <hr style="border-top: 5px solid #F7941F; margin: 0 0 0.5rem; width: 4rem;">
    </div>
    <?php if (count($playlist_items[$playlist->id]) > 4):?>
    <a href="/video/<?=end($playlist_items[$playlist->id])->uuid?>?playlist=<?=$playlist->uuid?>" class="btn btn-dark rounded-0 elevation-2 ">
        ТЎЛИҚ КЎРИШ <i class="fa fa-arrow-right"></i>
    </a>
    <?php endif;?>
</div>
<div class="row mb-2">
    <?php foreach ($playlist_items[$playlist->id] as $key => $item):?>
        <?php if ($key < 4):?>
        <div class="col-lg-3 col-sm-6 mb-3">
            <div class="playlist-items-card bg-white rounded-0 h-100">
                <div style="position: relative;">
                  <img src="/site/image/<?=str_replace('.', '/', $item->photo_path)?>?w=320&h=140&fit=crop" class="img-fluid mx-auto d-block" alt="img1">
                    <a class="btn btn-yellow rounded-circle" href="/video/<?=$item->uuid . '?playlist=' . $playlist->uuid?>" style="border: 1.5px solid #fff; position: absolute; width: 38px; height:38px; left: 50%; top: 50%; transform: translate(-50%, -50%);">
                        <i style="color: #fff;" class="fa fa-play"></i>
                    </a>
                </div>
                <div class="card-body px-3 py-2 rounded-0" style="line-height: 1.2;">
                    <span class="badge badge-dark rounded-0" style="position: absolute; top: 10px; left: 20px;"><?=substr($item->duration, 3)?></span>
                    <a href="/video/<?=$item->uuid . '?playlist=' . $playlist->uuid?>" class="" style="font-size: 0.9rem; font-weight: 600;"><?=$item->name?></a>
                    <span class="text-muted d-block" style="margin-top: 0.4rem; font-size: 0.7rem;"><i class="fa fa-eye"></i> <?=$item->views?> <i class="ml-2 fa fa-clock"></i> <?=date('d.m.Y', strtotime($item->published_at))?></span>
                </div>
            </div>
        </div>
        <?php endif;?>
    <?php endforeach;?>
    
</div>
<?php endforeach;?>

