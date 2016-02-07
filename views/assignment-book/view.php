<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AssignmentBook */

$this->title = '任务书';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assignment Books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <a href="<?= Yii::$app->homeUrl ?>index.php?r=assignment-book/createpdf" class="btn btn-success">生成PDF文件</a>
        <?= Html::a(Yii::t('app', '修改'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'chooserId',
            //'subjectId',
            'topicType',
            'date',
            'paperContent:ntext',
            'paperRequireAndData:ntext',
            'paperPreliminaryWork:ntext',
            'referenceDocumentation:ntext',
            'equipment:ntext',
            'taskAssignmentDate',
            'taskStartData',
            'taskEndData',
            'enterpriseOrGoup',
            'chiefOpnion:ntext',
            'acadmyGroupOpnion:ntext',
            //'pdfExist',
            //'route',
        ],
    ]) ?>

</div>
