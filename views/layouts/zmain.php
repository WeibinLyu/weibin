<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>毕业论文规范设计</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/Home-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/DocAuto2/formatPaper/assets/72c99e54/jquery.yiiactiveform.js"></script>
        
        <script type="text/javascript" src="/assets/js/jquery.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="/assets/js/jquery.leanModal.min.js"></script>
  
        <link rel="stylesheet" type="text/css" href="/assets/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/form.css">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div id="menuContainer">
            <ul id="menu" style="width:850px;">
                <li id="home" class="first"><a href="http://localhost/latex/web/"><b>首页</b></a></li>
                <li id="function"><a href=""><b>毕业进度</b></a></li>
                <li id="create"><a href=""><b>我的论文</b></a></li>
                <li id="help"><a href=""><b>帮助</b></a></li>
                <li id="none"><a><b></b></a></li>
                <li id="login">
                    <?=Yii::$app->user->isGuest ?
                    '<a href="#loginmodal" class="flatbtn" id="modaltrigger"><b>登录</b></a>' :
                    '<a href="'.Yii::$app->homeUrl.'index.php?r=users/view&id='.Yii::$app->user->identity->id.'"><b>'.Yii::$app->user->identity->username.'</b></a>'
                    ?>
                </li>
                <li id="register" class="last">
                    <?=Yii::$app->user->isGuest ?
                    '<a href="Reg-index.html" target="_blank"><b>注册</b></a>' :
                    '<a href="/index.php?r=site%2Flogout" data-method="post"><b>注销</b></a>'
                    ?>
                </li>
            </ul>
        </div>
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:160px;">
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="height:160px;">
                    <img class="first-slide" src="images/img-01.jpg">
                </div>
            </div>
        </div>
        <div class="carousel-foot">
            <p>毕业论文规范设计</p>
        </div>
        
        <div class="container" id="page">

        <br />
        <br />
        
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>

        <?php echo $content; ?>

        <div class="clear"></div>
        
        </div>

        <hr class="featurette-divider">
        <div class="footer"></div>
        
    </body>
</html>
