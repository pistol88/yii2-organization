<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use pistol88\organization\models\Category;

$this->title = 'Организации';
$this->params['breadcrumbs'][] = $this->title;

\pistol88\organization\assets\BackendAsset::register($this);
?>
<div class="model-index">

    <div class="row">
        <div class="col-md-2">
            <?= Html::a('Добавить организацию', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-md-10">
            
        </div>
    </div>
    
    <?php
    echo \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'export' => false,
        'columns' => [
            ['attribute' => 'id', 'filter' => false, 'options' => ['style' => 'width: 55px;']],
            'name',
            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}',  'buttonOptions' => ['class' => 'btn btn-default'], 'options' => ['style' => 'width: 155px;']],
        ],
    ]); ?>

</div>
