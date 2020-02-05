<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Playlist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="playlist-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-8">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-4">
                    <?php echo $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(
                        $categories,
                        'id',
                        'name'
                    ), ['prompt' => '']) ?>
                </div>
            </div>
            
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'sort_order')->textInput(['type'=> 'number']) ?>
            <?= $form->field($model, 'status')->dropDownList([1 => Yii::t('app', 'Faol'), 0 => Yii::t('app', 'Yashirin')])?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success btn-block']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= Html::a(Yii::t('app', 'Bekor qilish'), ['index'], ['class' => 'btn btn-default btn-block']) ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
