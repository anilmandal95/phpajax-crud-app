<?php
include "dbConn.php";

$sql = "select * from tbl_students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    # data found
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}else{
    //failed block
}

echo json_encode($data);

?>