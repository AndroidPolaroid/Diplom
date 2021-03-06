<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mark */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mark-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'workshop_id')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluation')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'test' => 'Test', 'laboratory' => 'Laboratory', 'practical' => 'Practical', 'seminar' => 'Seminar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
