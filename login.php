<?php
require 'connection.php';
$dataFromForm = json_decode(file_get_contents("php://input"),true);
$username = $password = '';
$username =$dataFromForm["username"];
$password =$dataFromForm["password"];
$info = '';
    if (empty($username)){
        $info = ["Status"=>"EmptyUsername"];
    }
    elseif (empty($password)){
        $info = ["Status"=>"EmptyPassword"];
    }
    else{
        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
$stmt = $con->prepare("SELECT * FROM `users` WHERE `u-name`= ?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0){
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];
    if(password_verify($password, $hashedPassword)){
        $info = array('Status'=>'Done');
        echo json_encode($info);
    }
    else{
        $info = array('Status'=>'Wrong Password!');
        echo json_encode($info);
    }
}
else {
    $info = array('Status'=>'Username not found!');
    echo json_encode($info);
}
    }
?>