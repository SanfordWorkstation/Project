<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StateDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'State Data';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="state-data-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create State Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter'=>FALSE,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'date',
            'state',
            ['attribute' => 'fips', 'label' => 'FIBS'],
            ['attribute' => 'cases', 'label' => 'Total Cases'],
            ['attribute' => 'deaths', 'label' => 'Total Deaths'],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
