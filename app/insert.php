<?php
include('dbConn.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['id'];
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];


// //insert data
// if (!empty($name) && !empty($email) && !empty($password)) {
//     $sql = "insert into tbl_students(name, email, password) values('$name', '$email', '$password')";
//     if ($conn->query($sql) == TRUE) {
//         # code...
//         echo "Data saved successfully";
//     }else{
//         echo "Data not saved";
//     }
// }else {
//     # fill all the field code...
//     echo "Field all the field";
// }


//insert or update data
if (!empty($name) && !empty($email) && !empty($password)) {
    $sql = "INSERT INTO tbl_students(id, name, email, password) VALUES('$id', '$name','$email', '$password') 
    ON DUPLICATE KEY UPDATE name='$name', email='$email', password='$password'";
    if ($conn->query($sql) == TRUE) {
        # code...
        echo "Data saved successfully";
    }else{
        echo "Data not saved";
    }
}else {
    # fill all the field code...
    echo "Field all the field";
}


?>