<?php

include "replaceTex.php";
include "toPdf.php";

//backEndsTest("assignmentBook", "1100310311");

function backEndsTest($tableName, $studentId)
{
    //$tableName 提交的表格名称
    
    //$studentId 提交的学号
    
    $stuId = getStuId($studentId);
    $dir = dirname(__FILE__);
    $pathOfTemplate = dirname($dir) . "/documents/template/$tableName/$tableName.tex";
    $path = dirname($dir) . "/documents/$stuId/$tableName/$tableName.tex";

    //echo $pathOfTemplate . "<br/>\n";
    //echo $path . "<br/>\n";
    
    if (!file_exists(dirname($path))) {
        mkdir(dirname($path), 0775, true);
    }

    //chmod(dirname(dirname($path)), 0777);
    //chmod(dirname($path), 0777);

    // 复制模板文件
    $source =  dirname(dirname($pathOfTemplate)) . "/template.cls";
    $dest = dirname($path) . "/template.cls";
    //echo $source . " " . $dest;
    copy($source, $dest);
    
    replaceTex($pathOfTemplate, $studentId);

    if (toPdf($path) == 0) {
        echo "<a target='_blank' href='/weibin-github/web/assets/documents/$stuId/$tableName/$tableName.pdf'>查看 pdf</a>";
        return "documents/$stuId/$tableName/$tableName.pdf";
    } else {
        return "false";
    }
}
?>
