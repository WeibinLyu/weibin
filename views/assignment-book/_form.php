<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssignmentBook */
/* @var $form yii\widgets\ActiveForm */
?>

<script src="../assets/editor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="../assets/editor/laydate/laydate.js" type="text/javascript"></script>
<script src="<?= Yii::$app->homeUrl ?>../assets/editor/laydate/laydate.js" type="text/javascript"></script>
<script src="<?= Yii::$app->homeUrl ?>../assets/editor/ckeditor/ckeditor.js" type="text/javascript"></script>

<p class="note">带有 <span class="required">*</span> 为必填.</p>

<div class="assignment-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chooserId')->textInput() ?>

    <?= $form->field($model, 'subjectId')->textInput() ?>

    <?= $form->field($model, 'topicType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['onclick' => 'laydate()','size'=>'5','class'=>'laydate-icon']) ?>

    <?= $form->field($model, 'paperContent')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'paperRequireAndData')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'paperPreliminaryWork')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'referenceDocumentation')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'equipment')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'taskAssignmentDate')->textInput() ?>

    <?= $form->field($model, 'taskStartData')->textInput() ?>

    <?= $form->field($model, 'taskEndData')->textInput() ?>

    <?= $form->field($model, 'enterpriseOrGoup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chiefOpnion')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'acadmyGroupOpnion')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <?= $form->field($model, 'pdfExist')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
