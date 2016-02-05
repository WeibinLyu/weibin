<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'realName') ?>

    <?= $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'studentId') ?>

    <?php // echo $form->field($model, 'studentProfessional') ?>

    <?php // echo $form->field($model, 'studentAcademy') ?>

    <?php // echo $form->field($model, 'teacherWorkAddress') ?>

    <?php // echo $form->field($model, 'teacherProfessionalTitle') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
