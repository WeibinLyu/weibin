#我们和斌哥的大创项目
<br />
<br />本来使用yii-1.1写了一大半，但是觉得yii-1.1目录结构有点乱，故用yii-2.0重写了。
<br /> 
<br />assets：资源文件备份
<br /> 
<br />web：前端文件，包括 ckeditor、pdf_js、我们写的php文件。
<br />web/document/template/：Latex模板文件
<br />	assignmentBook/ 任务书模板
<br />	template.cls 类文件，定义 tex 格式
<br />assets/php/
<br />    replaceTex.php 用数据库的数据生成用户的 tex 文件
<br />    toPdf.php 将用户的 tex 文件转换成 pdf 文件
<br /> 
<br />《MVC》
<br />model：模型类
<br />views：视图
<br />	views/assignment-book/_form.php：调用ckeditor
<br />	views/assignment-book/viewpdf.php：调用pdf_js展示pdf文件
<br />		调用方法：从数据库的assignmentBook表里取到route字段的值，即对应pdf文件的相对于.../web的路径
<br />		然后传给PDFJSInNet/web/viewer.html即可浏览pdf文件。传参方法：.../viewer.html?file=pdf路径
<br />controllers：控制器
<br />	controllers/AssignmentBookController.php->actionCreatepdf()：
<br />		调用我们写的backEnds.php->backEndsTest($templatName, $studentID)生成 .tex文件和 pdf文件
<br /> 
<br />createView.sql 创建用户所有相关信息的视图
<br />db.sql 数据库备份
<br /> 
<br />以下均为yii配置文件：
<br />config	
<br />mail
<br />commands
<br />runtime
<br />vendor
<br />