<?php

    include('dbconnect.php');

    if (isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM login WHERE Username = '$username' and Password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count  == 1){
            header("Location:welcome.php");
        }else{
            echo 'script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid Username or Password");
            </script>';
        }
    }

?>