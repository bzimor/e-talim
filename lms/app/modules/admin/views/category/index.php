<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-category-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Add'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "Jami {totalCount} tadan {begin} - {end} lar",
        'emptyText' => 'List is empty',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'slug',
            [
                'attribute' => 'created_at',
                'filter'=>FALSE,
                'format' => ['date', 'php:d.m.Y H:i'],
                'headerOptions' =>[
                    'style' => 'text-align:center; width:10%; font-size: 13px;'
                ],
            ],
            [
                'attribute' => 'status',
                'filter'=>FALSE,
                'format' => 'html',
                'value' => function ($model) {
                    return ($model->status == 1)?'<span class="badge badge-success">Faol</span>':'<span class="badge badge-default">Yashirin</span>';
                },
                'headerOptions' =>[
                    'style' => 'text-align:center'
                ],
                'contentOptions' =>[
                    'style' => 'text-align:center;'
                ],
            ],
            //'parent_id',
            //'status',
            //'is_deleted',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '',
                'headerOptions' => ['style' => 'color:#337ab7; width:7%'],
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fas fa-pencil-alt"></i>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                            'class' => 'btn btn-warning btn-sm',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="fas fa-trash">', $url, [
                            'title' => Yii::t('app', 'lead-delete'),
                            'class' => 'btn btn-danger delete btn-sm',
                            'data' => [
                                'confirm' => 'Hozir o\'chib ketadi, qarangda!',
                                'method' => 'post',
                            ],
                        ]);
                    }

                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
