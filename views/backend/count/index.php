<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\banner\CountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Counts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="count-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Count', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'number',
            'ad_name',
            'username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
