<?php
//echo 'Hello world!';
header("Location:web/");
exit;

$url = "web/";
echo 'Hello world!';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
exit;

phpinfo();
?>
