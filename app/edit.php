<?php
include "dbConn.php";
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];

if (!empty($id)) {
    $sql = "select * from tbl_students where id = {$id}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
echo json_encode($row);