<?php
    $con = mysql_connect("localhost","root","zogodo"); //connect to mysql
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("my_db", $con);
    $result = mysql_query("SET NAMES 'UTF8'");
    $result = mysql_query("select * from VassignmentBook where studentid = '1300333333'",$con);

    $row = mysql_fetch_array($result);
    $i = 0;
    do{
        $rowname = mysql_field_name($result, $i);
        $arr[$rowname] = $row[$rowname];
        $i++;
        //echo $i,$rowname."==".$arr[$rowname]."<br>";
    }while($rowname);
    mysql_close($con);

    echo json_encode($arr);
?>