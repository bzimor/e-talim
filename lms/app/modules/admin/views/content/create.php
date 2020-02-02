<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Content */

$this->title = Yii::t('app', 'Video qo\'shish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Videolar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-create">

    <?= $this->render('_form', [
        'model' => $model,
        'playlists' => $playlists,
    ]) ?>

</div>
