<?php
session_start();
include_once "config.php";
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    // lets check whether the users input matched email and password from database
    $sql=mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}' AND password='{$password}'");
    if(mysqli_num_rows($sql) > 0){
        $row=mysqli_fetch_assoc($sql);
        $status="Active now";
        $sql2=mysqli_query($conn, "UPDATE users SET status='{$status}' WHERE unique_id ={$row['unique_id']}");
        if($sql2){
            $_SESSION['unique_id']=$row['unique_id']; //using this session we used user unique_id in another php file
        echo 'success';
        }
    }else{
        echo "Your email or password is incorrect";    
    }
}else{
    echo "All input fields are required";
}

?>