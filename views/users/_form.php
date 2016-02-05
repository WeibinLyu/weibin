<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'realName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->dropDownList(['学生','老师','校领导']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'studentId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'studentProfessional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'studentAcademy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacherWorkAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacherProfessionalTitle')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '确定注册' : '确定修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
