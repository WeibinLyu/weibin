<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = '我的毕业设计';
$this->params['breadcrumbs'][] = $this->title;
?>
    
    <a href="<?= Yii::$app->homeUrl ?>index.php?r=assignment-book/view&id=1" class="btn btn-primary">任务书</a>
    <?= ''//Html::a('任务书', ['assignment-book/view&id=1'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('开题报告', ['myproject'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('说明书', ['myproject'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('毕业论文', ['myproject'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('退出', ['site/logout'], ['data-method' => 'post', 'class' => 'btn btn-danger']) ?>



