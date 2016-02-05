<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssignmentBookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assignment-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'chooserId') ?>

    <?= $form->field($model, 'subjectId') ?>

    <?= $form->field($model, 'topicType') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'paperContent') ?>

    <?php // echo $form->field($model, 'paperRequireAndData') ?>

    <?php // echo $form->field($model, 'paperPreliminaryWork') ?>

    <?php // echo $form->field($model, 'referenceDocumentation') ?>

    <?php // echo $form->field($model, 'equipment') ?>

    <?php // echo $form->field($model, 'taskAssignmentDate') ?>

    <?php // echo $form->field($model, 'taskStartData') ?>

    <?php // echo $form->field($model, 'taskEndData') ?>

    <?php // echo $form->field($model, 'enterpriseOrGoup') ?>

    <?php // echo $form->field($model, 'chiefOpnion') ?>

    <?php // echo $form->field($model, 'acadmyGroupOpnion') ?>

    <?php // echo $form->field($model, 'pdfExist') ?>

    <?php // echo $form->field($model, 'route') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
