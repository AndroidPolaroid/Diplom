<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use yii\widgets\DetailView;
use yii\bootstrap\Alert;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Course */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Курси', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редагувати', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?php

        if ($model->isActive()) {
            echo Html::a('Видалити', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Ви впевнені, що хочете видалити??',
                    'method' => 'post',
                ],
            ]);
        } else {
            echo Html::a('Відновити', ['restore', 'id' => $model->id], [
                'class' => 'btn btn-success',
                'data' => [
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            'description:ntext',
            //'status',
//            'created_at',
//            'created_by',
//            'updated_at',
//            'updated_by',
            [
                'attribute' => 'status',
                'value' => $model->getStatusLabel(),
                'visible' => (Yii::$app->user->identity->role === User::$roles[0]),
            ],
            [
                'attribute' => 'created_at',
                'value' => $model->updated_at ? date('Y-m-d H:i:s', $model->updated_at) : '',
            ],
            [
                'attribute' => 'created_by',
                'value' => $model->created_by ? User::getById($model->created_by)->username : '',
            ], [
                'attribute' => 'updated_at',
                'value' => $model->updated_at ? date('Y-m-d H:i:s', $model->updated_at) : '',
            ],
            [
                'attribute' => 'updated_by',
                'value' => $model->updated_by ? User::getById($model->updated_by)->username : '',
            ],
        ],
    ]) ?>

    <?php $active = Yii::$app->getRequest()->get('active');?>
    <?php
    $tabs[0] = [
        'label' => 'Групи',
        'content' => 'text',
            'active' => true
    ];
    $tabs[1] = [
        'label' => 'Групи',
        'content' => 'text',
        'active' => true
    ];

    ?>



</div>
