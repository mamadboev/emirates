<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Team User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'position',
            'about_user:ntext',
            //'image',
            //'status',
            //'created_at',
            //'updated_at',
            //'facebook',
            //'telegram',
            //'github',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
