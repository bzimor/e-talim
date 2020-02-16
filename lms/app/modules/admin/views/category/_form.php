<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use trntv\filekit\widget\Upload;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <div class="row">
                <div class="col-sm-8">
                    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-4">
                    <?php echo $form->field($model, 'parent_id')->dropDownList($categories, ['prompt' => '']) ?>
                </div>
            </div>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        </div>
        <div class="col-sm-3">
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


            <?php echo $form->field($model, 'photo')->widget(
                Upload::class,
                [
                    'url' => ['/file/storage/upload'],
                    'uploadPath' => 'category',
                    'maxFileSize' => 5000000, // 5 MiB,
                    'acceptFileTypes' => new JsExpression('/(\.|\/)(gif|jpe?g|png)$/i'),
                ]);
            ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
