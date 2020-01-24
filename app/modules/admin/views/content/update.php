<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Content */

$this->title = Yii::t('app', '{name}', [
    'name' => $model->uuid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Videolar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', "O'zgartirish");
?>
<div class="content-update">

    <?= $this->render('_form', [
        'model' => $model,
        'playlists' => $playlists,
    ]) ?>

</div>
