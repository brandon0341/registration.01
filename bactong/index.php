<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN_UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="sign">
        <center>
        <h1>BB CORP</h1>
        </center>
        <h4>SIGN UP</h4>
        <form name= "signs" action= "signup" method= "POST">
            <label>Firstname: </label>
            <input type="text" id="fname" name="firstname"> </br> </br>
            <label>Lastname: </label>
            <input type="text" id="lname" name="lastname"> </br> </br>
            <label>Age: </label>
            <input type="text" id="age" name="age"> </br> </br>
            <label>Address: </label>
            <input type="text" id="add" name="address"> </br> </br>
            <label>Username: </label>
            <input type="text" id="user" name="username"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "password"> </br> </br>
            <input type="submit" id="btn" value="Register" name="sign"> 
        </form>
        <h4>LOG IN</h4>
        <form name="log" action="login" method="POST">
        <label>Username: </label>
            <input type="text" id="username" name="username"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="password" name = "password"> </br> </br>
            <input type="submit" id="btn" value="Login" name="submit"> 
        </form>
    </div>
</body>
</html>