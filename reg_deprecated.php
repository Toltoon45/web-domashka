<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="" method="post">
<div>
        <label for="login">login</label>
        <input type="text" name="login" id="login">
</div>
<div>
        <label for="password">password</label>
        <input type="text" name="password" id="password">
</div>
        <input type="submit" value="Регистрация">
    </form>  
    <?php 
    session_start();  
    if (!empty($_POST['login']) && !empty($_POST['password']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        echo "ajskldjaskldjasljdkasljklsajdklasdjkal";
        $mysqli = new mysqli("localhost", "root", "", "moyadomashka");
        //проверить что логин уникален
        $result_login = $mysqli->query("SELECT * FROM `users` WHERE `login` = $login");
        $_SESSION['login'] = $login;
        if (!$result_login->fetch_assoc()){
            $result_instert = $mysqli->query("INSERT INTO `users`(`login`, `password`) VALUES ('$login', '$password')");
        }
        
        header("Location: reg.php");
        // $result = $mysqli->query("SELECT * from test");
        // $row = $result->fetch_assoc();
        // echo $row['test_text']; 
    }
        else{
            // // This is in the PHP file and sends a Javascript alert to the client
            // $message = "wrong answer";
            // echo "<script type='text/javascript'>alert('$message');</script>";
        }

    ?> 
</body>
</html>