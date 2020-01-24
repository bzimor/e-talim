<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Videolar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Video qo\'shish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "Jami {totalCount} tadan {begin} - {end} lar",
        'emptyText' => 'Hech narsa mavjud emas',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'published_at',
                'filter'=>FALSE,
                'format' => ['date', 'php:d.m.Y H:i'],
                'headerOptions' =>[
                    'style' => 'text-align:center; width:15%; font-size: 13px;'
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
            //'category_id',
            //'duration',
            //'status',
            //'created_by',
            //'is_deleted',
            //'created_at',
            //'updated_at',
            //'published_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '',
                'headerOptions' => ['style' => 'color:#337ab7; width:7%'],
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fas fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                            'class' => 'btn btn-warning btn-xs',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="fas fa-trash">', $url, [
                            'title' => Yii::t('app', 'lead-delete'),
                            'class' => 'btn btn-danger delete btn-xs',
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
