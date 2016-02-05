# weibin

#我们和斌哥的大创项目

本来使用yii-1.1写了一大半，但是觉得yii-1.1目录结构有点乱，故用yii-2.0重写了。

assets：内含资源文件，包括ckeditor，pdf_js，我们写的php文件。
assets/template/
    assignmentBook/ 任务书模板
    template.cls 类文件，定义 tex 格式
assets/php/
    replaceTex.php 生成用户的 tex 文件
    toPdf.php 将用户的 tex 文件转换成 pdf 文件

《三层架构》
model：模型类
views：视图
controllers：控制器

web：前端

createView.sql 创建用户所有相关信息的视图
db.sql 数据库备份

以下均为yii配置文件：
config	
mail
commands
runtime
vendor
