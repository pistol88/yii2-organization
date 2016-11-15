<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Html::encode($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Организации', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="model-update">
    <?= $this->render('_form', [
        'model' => $model,
        'module' => $module,
    ]) ?>

    <?php if($fieldPanel = \pistol88\field\widgets\Show::widget(['model' => $model])) { ?>
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title">Прочее</h3></div>
            <div class="panel-body">
                <?=$fieldPanel;?>
            </div>
        </div>
    <?php } ?>
</div>
