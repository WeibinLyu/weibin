<html>
<body>

<form method="post">
    <input type="submit" name="replace" value="生成 tex 文件">
    <input type="submit" name="generate" value="生成 pdf 文件">
</form>

<?php
    include "replaceTex.php";
    include "toPdf.php";
    //include "getStuId.php";
    
    $tableName = "assignmentBook";  // 提交的表格名称
    $studentId = getStuId("1300333331");  // 提交的学号
    
    $dir = dirname(__FILE__);
    $pathOfTemplate = dirname($dir) . "/documents/template/$tableName/$tableName.tex";
    $path = dirname($dir) . "/documents/$studentId/$tableName/$tableName.tex";
    
    //echo "template = " . $pathOfTemplate . "<br/>\n";
    //echo "StuId = " . $path . "<br/>\n";

    mkdir(dirname($path), 0777, true);

    //chmod(dirname(dirname($path)), 0777);
    //chmod(dirname($path), 0777);

// 复制模板文件
    $source =  dirname(dirname($pathOfTemplate)) . "/template.cls";
    $dest = dirname($path) . "/template.cls";
    //echo $source . " " . $dest;
    copy($source, $dest);

    if (isset($_POST['replace'])) {
            replaceTex($pathOfTemplate, "1300333331");
            echo "<a href='/DocAuto/documents/$studentId/$tableName/$tableName.tex'>查看 tex 文件</a>";
    }
    if (isset($_POST['generate'])) {
            if (toPdf($path) == 0) {
                    echo "<a href='/DocAuto/documents/$studentId/$tableName/$tableName.pdf'>查看 pdf 文件</a>";
            } else {
                    echo "<a href='/DocAuto/documents/$studentId/$tableName/$tableName.log'>查看 log 文件</a>";
            }
    }
?>

</body>
</html>
