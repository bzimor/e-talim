<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = Yii::t('app', 'Kategoriya yaratish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategoriyalar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-category-create">

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>
