<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\AssignmentBook;

$this->title = 'pdf文件预览';
$this->params['breadcrumbs'][] = $this->title;
?>

<iframe src="<?= yii::$app->homeUrl ?>../assets/PDFJSInNet/web/viewer.html?file=<?= $model->route; ?>"
            id="viewpdf" name="myframe" width="70%" height="1000">
    </iframe>