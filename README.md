#我们和斌哥的大创项目
本来使用yii-1.1写了一大半，但是觉得yii-1.1目录结构有点乱，故用yii-2.0重写了。
 
###web/：前端文件，包括 ckeditor、pdf_js、我们写的php文件。
<pre>    web/document/
	web/document/template/：Latex模板文件
	web/document/template/assignmentBook/ 任务书模板
	web/document/template/template.cls 类文件，定义 tex 格式
	web/php/
        web/php/backEnds.php：调用下面两个文件里的函数生成pdf文件，并返回pdf文件的相对于web/的路径
	web/php/replaceTex.php：用数据库的数据生成用户的 tex 文件
	web/php/toPdf.php：将用户的 tex 文件转换成 pdf 文件</pre>
 
###《MVC》
<pre>    models/：模型类
	views/：视图
	views/assignment-book/_form.php：调用ckeditor
	views/assignment-book/viewpdf.php：调用pdf_js展示pdf文件
		调用方法：从数据库的assignmentBook表里取到route字段的值，即对应pdf文件的相对于web/的路径
		然后传给PDFJSInNet/web/viewer.html即可浏览pdf文件。传参方法：.../viewer.html?file=pdf路径
	controllers/：控制器
	controllers/AssignmentBookController.php->actionCreatepdf()：
		调用我们写的backEnds.php->backEndsTest($templatName, $studentID)生成 .tex文件和 pdf文件。
		并把生成的 pdf文件的路径存到数据库。pdf文件的路径是由backEndsTest($templatName, $studentID)
		成功生成 pdf文件后返回的</pre>
 
###数据库
<pre>db.sql： 数据库备份
createView.sql： 创建用户所有相关信息的视图</pre>
 
###assets/：资源文件备份

###以下均为yii配置文件：
<pre>config/
mail/
commands/
runtime/
vendor/</pre>
