<!DOCTYPE html>
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>毕业论文规范设计</title>
    <link rel="stylesheet" type="text/css" href="css/Home-style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="/assets/a5ef1b45/yii.js"></script>
    <script>
    (function () {
        var ajax = function (url, settings) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            settings = settings || {};
            xhr.open(settings.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Accept', 'text/html');
            xhr.onreadystatechange = function (state) {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200 && settings.success) {
                        settings.success(xhr);
                    } else if (xhr.status != 200 && settings.error) {
                        settings.error(xhr);
                    }
                }
            };
            xhr.send(settings.data || '');
        };

        var e = document.getElementById('yii-debug-toolbar');
        if (e) {
            e.style.display = 'block';
            var url = e.getAttribute('data-url');
            ajax(url, {
                success: function (xhr) {
                    var div = document.createElement('div');
                    div.innerHTML = xhr.responseText;
                    e.parentNode.replaceChild(div, e);
                    if (window.localStorage) {
                        var pref = localStorage.getItem('yii-debug-toolbar');
                        if (pref == 'minimized') {
                            document.getElementById('yii-debug-toolbar').style.display = 'none';
                            document.getElementById('yii-debug-toolbar-min').style.display = 'block';
                        }
                    }
                },
                error: function (xhr) {
                    e.innerHTML = xhr.responseText;
                }
            });
        }
    })();
    </script>
</head>
<body>
    <!--<div class="logo">-->
        <!--<ul class="li-img">-->
            <!--<li><img src="images/大创LOGO.png"></li>-->
        <!--</ul>-->
    <!--</div>-->
    <div id="menuContainer">
        <ul id="menu">
            <li id="home" class="first"><a href=""><b>首页</b></a></li>
            <li id="function"><a href="#"><b>功能菜单</b></a></li>
            <li id="create"><a href="#"><b>表格创建</b></a></li>
            <li id="help"><a href="#"><b>帮助</b></a></li>
            <li id="none"><a><b></b></a></li>
            <li id="login">
                <!--<a href="#loginmodal" class="flatbtn" id="modaltrigger"><b>登录</b></a>-->
                <?=Yii::$app->user->isGuest ?
                '<a href="#loginmodal" class="flatbtn" id="modaltrigger"><b>登录</b></a>' :
                '<a href="#"><b>' . Yii::$app->user->identity->username . '</b></a>'
                ?>
            </li>
            <li id="register" class="last">
                <!--<a href="Reg-index.html" target="_blank"><b>注册</b></a>-->
                <?=Yii::$app->user->isGuest ?
                '<a href="Reg-index.html" target="_blank"><b>注册</b></a>' :
                '<a href="/index.php?r=site%2Flogout" data-method="post"><b>注销</b></a>'
                ?>
            </li>
        </ul>
    </div>
    <div id="loginmodal" style="display:none;">
        <div class="form-container">
            <h1>Welcome</h1>
            <!--<form id="loginform" action="/formatPaper/index.php?r=site/login" method="post">-->
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>
            <input name="LoginForm[username]" id="LoginForm_username" type="text" placeholder="用户名"/>
            <input name="LoginForm[password]" id="LoginForm_password" type="password"  placeholder="密码"/>
            <!--<div>
                &lt;!&ndash;<input class="identifying" name="LoginForm[verifyCode]" id="LoginForm_verifyCode" type="text" placeholder="请输入验证码"/>&ndash;&gt;
                <img class="identifying-imgalt="点击换图" title="点击换图" style="cursor:pointer" id="yw0" src="/formatPaper/index.php?r=site/captcha&amp;v=55e27a4f7bdd4" />
            </div>-->
            <div class="rememberMe">
                <input name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1" type="checkbox" />
                <label for="LoginForm_rememberMe">保持登录</label>
            </div>
            <button id="login-button" type="submit">登录</button>
            <div class="login-links">
                <a href="#" target="_blank">忘记密码?</a>
                <a href="Reg-index.html" target="_blank">免费注册</a>
            </div>
            <?php ActiveForm::end(); ?>
        </div><!-- form -->
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="images/img-01.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>毕设，只专注内容</h1>
                        <p>毕业设计表格格式总出错？还在为毕业设计表格生成而苦恼？在这里，你所遇到的问题都不是问题．毕业设计，让你只专注内容．快点击下方按钮，开始体验吧．</p>
                        <button class="btn"><a href="#">登录体验</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="images/img-01.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>老师出题，学生选题，一＂站＂搞定</h1>
                        <p>不需繁琐的流程，不需东奔西跑，只需坐在电脑前，键盘一敲，鼠标一点，出题选题全搞定！致力于为老师排忧解难，为学生创造便利。</p>
                        <button class="btn"><a href="#">登录体验</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="images/img-01.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>从选题到提交，一条龙服务</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <button class="btn"><a href="#">登录体验</a></button>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="carousel-foot">
        <p>让你轻松搞定毕设表格</p>
    </div>
    <div id="back-to-top">
        <a href="#menuContainer" ><img src="images/backtop.gif"></a>
    </div>
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="images/bg.jpg" alt="Generic placeholder image">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="images/bg.jpg" alt="Generic placeholder image">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="images/bg.jpg" alt="Generic placeholder image">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">便捷菜单。<span class="text-muted">让毕设更有效率。</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="img-right" src="images/image-5.jpg" alt="效率">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">功能简介。<span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="img-left" src="images/image-4.jpg" alt="功能">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">小贴士。<span class="text-muted">为你消除疑惑。</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="img-right" src="images/image-3.png"  alt="问号">
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
    <div class="footer"></div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
</body>
</html>