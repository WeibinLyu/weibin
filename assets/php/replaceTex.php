<?php

include "getStuId.php";

function replaceTex($pathOfTexFile, $studentId)
{
    // mysql connection info
    $conHost = "localhost"; 	// connect ip
    $conUsername = "test";
    $conPassword = "test";
    $conDatabase = "formatPaper";
    $conView = "VassignmentBook";
    $conQuery = "SELECT * FROM  $conView  WHERE studentId = '$studentId';";
	
    // connect mysql
    $con = mysql_connect($conHost, $conUsername, $conPassword);
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }
    // echo $conQuery; // 检查查询语句
	
    // query database
    mysql_select_db($conDatabase, $con);
    $result = mysql_query("SET NAMES 'UTF8'");
    $result = mysql_query($conQuery, $con);
    $infoarr = mysql_fetch_array($result);
    mysql_close($con);
    
    $fstr = file_get_contents($pathOfTexFile);

    foreach ($infoarr as $key => $value){
        if($value){
            $value = str_replace("&nbsp;", " ", $value);
            $value = analysis(html_entity_decode($value));
        }
        $fstr = str_replace("!$key-!", html_entity_decode($value), $fstr);
    }

    if($infoarr['subjectName']){
        $cuttitle = cut($infoarr['subjectName']);
        $fstr = str_replace($infoarr['subjectName'], $cuttitle, $fstr);
    }
    
    $fstr = str_replace("\block{".$infoarr['topicType']."}", "\blockC{".$infoarr['topicType']."}", $fstr);
    $fstr = preg_replace("/\!(\w+)\-!/", "", $fstr);
    
    //$newadd = str_replace("template", $studentId, $pathOfTexFile);
    $newadd = str_replace("template", getStuId($studentId), $pathOfTexFile);
    //echo $newadd ."<br/>\n";
    // 这里的路径为执行该函数的 php 所在路径决定
    
    $fstr = str_replace("\r\n", "\n", $fstr);
    file_put_contents($newadd, $fstr);
}

function cut($str)
{
    if(mb_strwidth($str, 'UTF-8') > 30)
    {
        $i = mb_strlen($str, 'UTF-8')%2 ? 
            (mb_strlen($str, 'UTF-8')+1)/2 : mb_strlen($str, 'UTF-8')/2;
        
        do {
            $k = mb_strwidth(mb_substr($str, 0, $i, 'UTF-8'), 'UTF-8')
               -mb_strwidth(mb_substr($str, $i, 30, 'UTF-8'), 'UTF-8');

            echo "k=$k, <br />";

            if ($k > 1)
            {
                --$i;
            }
            elseif ($k < 1 && $k != 0)
            {
                ++$i;
            }
        }
        while (abs($k) > 2);
        
        while (preg_match("/^[a-zA-Z\s]+$/", mb_substr($str, $i, 1, 'UTF-8'))){
            ++$i;
        }
        
        if (strpos(mb_substr($str, $i-2, 4, 'UTF-8'), " "))
        {
            if(mb_substr($str, $i, 1, 'UTF-8') == ' ')
            {
                $str2 = mb_substr($str, $i+1, 30, 'UTF-8');
                return str_replace(" $str2", "}\underBlank{".$str2, $str);
            }
            elseif(mb_substr($str, $i-1, 1, 'UTF-8') == ' ')
            {
                $str2 = mb_substr($str, $i, 30, 'UTF-8');
                return str_replace(" $str2", "}\underBlank{".$str2, $str);
            }
            elseif(mb_substr($str, $i+1, 1, 'UTF-8') == ' ')
            {
                $str2 = mb_substr($str, $i+2, 30, 'UTF-8');
                return str_replace(" $str2", "}\underBlank{".$str2, $str);
            }
        }
        
        $str2 = mb_substr($str, $i, 30, 'UTF-8');
        return str_replace($str2, "}\underBlank{".$str2, $str);
    }
    return $str;
}

function analysis($str)
{
    $arr = Array('\\', '#', '$', '%', '&', '_', '{', '}', '^', '~');
    $arr2 = Array('\\textbackslash{}', '\#', '\$', '\%', '\&', '\_', '\{', '\}', '\^{}', '\~{}');
    
    $str = str_replace($arr, $arr2, $str);
    $str = str_replace('\\textbackslash\{\}', '\\textbackslash{}', $str);
    
    $str = str_replace("<p>", "", $str);
    $str = str_replace("</p>", "", $str);

    // 粗体
    $str = str_replace("<strong>", "\\textbf{", $str);
    $str = str_replace("</strong>", "}", $str);

    // 数字列表
    $str = str_replace("<ol>", "\\begin{enumerate}", $str);
    $str = str_replace("</ol>", "\\end{enumerate}", $str);

    // 圆点列表
    $str = str_replace("<ul>", "\\begin{itemize}", $str);
    $str = str_replace("</ul>", "\\end{itemize}", $str);

    $str = str_replace("<li>", "\\item ", $str);
    $str = str_replace("</li>", "", $str);
    $str = str_replace("<li>\n", "", $str);
    
    $str = str_replace("<br />", "\n", $str);
 
    $str = str_replace('<', '\textless ', $str);
    $str = str_replace('>', '\textgreater ', $str);
    
    return $str;
}
?>
