<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

\pistol88\organization\assets\BackendAsset::register($this);
?>

<div class="model-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6">
            <?= $form->field($model, 'name')->textInput() ?>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <?= $form->field($model, 'active')->dropDownList(['1' => 'Да', '0' => 'Нет']) ?>
        </div>
    </div>
    
    <div class="form-group organization-control">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
