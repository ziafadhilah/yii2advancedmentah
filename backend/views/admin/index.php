<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <div class="box-body">
        <div class="callout callout-danger">
            <h4 style="text-align: center;">
                <i class="fa fa-warning">&nbsp HARAP HUBUNGI PIHAK IT MANAGER JIKA INGIN MENGUBAH DATA ADMIN </i>&nbsp <i class="fa fa-warning"> </i>
            </h4>
        </div>
    </div>
    <!-- <p>
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No.',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;']
            ],

            // 'id',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',

        ],
    ]); ?>


</div>
