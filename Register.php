<?php
    $con = mysqli_connect("localhost", "id6736807_shubham", "snehlatasharma", "id6736807_dashcash");
    
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (email, username, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $email, $username, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
