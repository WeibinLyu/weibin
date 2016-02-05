<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AssignmentBook */

$this->title = Yii::t('app', 'Create Assignment Book');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assignment Books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
