<?php

function getStuId($id) {
    $salt = "klajsdKD1.[f";
    return sha1($id . $salt);
}

?>
