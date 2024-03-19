<?php

if (isset($_POST['sign'])) {

    
    $Firstname = ($_POST['first']);
    $Lastname = ($_POST['last']);
    $Age = ($_POST['age']);
    $Address = ($_POST['add']);
    $Username = ($_POST['user']);
    $Password = ($_POST['pass']);

    
    $stmt = mysqli_prepare($conn, "INSERT INTO account (Firstname, Lastname, Age, Address, Username, Password) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $phone, $email, $hash);

    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    
    mysqli_stmt_close($stmt);
}


mysqli_close($conn);

?>