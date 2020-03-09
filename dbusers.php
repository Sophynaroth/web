<?php
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $profile = $_POST['img'];

    //database connection
    $conn = new mysqli('localhost','root','root','niptict');
    if ($conn->connect_error){
        die('Connection Failed' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into DB_users(first_name,last_name,email,profile_picture) values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstName,$lastName,$email,$profile);
        $stmt->execute();
        echo "Record save successfully.";
        $stmt->close();
        $conn->close();
    }


?>