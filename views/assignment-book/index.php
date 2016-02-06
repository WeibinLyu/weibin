<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssignmentBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Assignment Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Assignment Book'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'chooserId',
            'subjectId',
            //'topicType',
            'date',
             'paperContent:ntext',
            // 'paperRequireAndData:ntext',
             'paperPreliminaryWork:ntext',
            // 'referenceDocumentation:ntext',
            // 'equipment:ntext',
            // 'taskAssignmentDate',
            // 'taskStartData',
            // 'taskEndData',
            // 'enterpriseOrGoup',
            // 'chiefOpnion:ntext',
            // 'acadmyGroupOpnion:ntext',
            // 'pdfExist',
            // 'route',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
