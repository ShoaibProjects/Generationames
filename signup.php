<?php
    include 'connection.php';
    $dataFromForm = json_decode(file_get_contents("php://input"),true);
    $username = $password = $generation = '';
    if(empty($dataFromForm)){
        header("Location: index.php");
        exit;
    }
    $username =$dataFromForm["username"];
    $password =$dataFromForm["password"];
    $generation =$dataFromForm["generation"];
    $responseData = '';
    if (empty($username)){
        $responseData = ["Status"=>"EmptyUsername"];
    }
    elseif (empty($password)){
        $responseData = ["Status"=>"EmptyPassword"];
    }
    elseif (strlen($password) < 8) {
        $responseData = ["Status"=>"LessThan8Chars"];
    }
    else{
        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
        $generation = htmlspecialchars($generation, ENT_QUOTES, 'UTF-8');
        
    // $sqlUsernameSearch = "SELECT `serial number` FROM `users` WHERE `Username`= '$username'";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);    
        $stmt = $con->prepare("SELECT `s-number` FROM `users` WHERE `u-name`= ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $resultInit = $stmt->get_result();

    // $resultInit = $con->query($sqlUsernameSearch);
    if($resultInit->num_rows>0){
        $responseData = ["Status" => "usernameDuplication", "Username" => $username, "generation" => $generation];
        // echo json_encode($responseData);
    }
    else{
        // $sqlinsert = "INSERT INTO `users` (`Username`, `Password`, `Team`, `Description`, `Role`) VALUES ('$username', '$password', '$team', '$description', '$role')";
        $stmt = $con->prepare("INSERT INTO `users` (`u-name`, `password`, `generation`) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $username, $hashedPassword,$generation);
        $stmt->execute();
        // $result = mysqli_query($con,$sqlinsert);
        $affectedRows = $stmt->affected_rows;
        if($affectedRows > 0){
        // $responseData = ["message" => "Username: ".$username. " Password: ".$password. "Team ".$team." Desc: ".$description." Role: ".$role];
        $responseData = ["Status" => "OK", "Username" => $username,"Password" => $password, "generation" => $generation];
        // echo json_encode($responseData);  
        }
      }
    }
    echo json_encode($responseData);
    ?>