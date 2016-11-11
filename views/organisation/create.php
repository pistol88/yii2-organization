<?php
use yii\helpers\Html;

$this->title = 'Добавить организацию';
$this->params['breadcrumbs'][] = ['label' => 'Организации', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-create">

    <?= $this->render('_form', [
        'model' => $model,
        'module' => $module,
    ]) ?>

</div>
