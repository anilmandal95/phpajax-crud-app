<?php
include "dbConn.php";
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];

if (!empty($id)) {
    $sql = "delete from tbl_students where id = {$id}";
    if ($conn->query($sql) == "TRUE") {
        //success block
        echo 1;
    }else{
        echo 0; 
    }
}
?>