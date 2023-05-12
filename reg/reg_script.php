    <?php
require_once('../boot.php');

//уникален ли логин
    if (!empty($_POST['login']) && !empty($_POST['password']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE `login` = '$login' and `password` = '$password'";
        $stmt = get_mysqli()->query($sql);
        if ($stmt->fetch_row())
        {
            header("Location: ../error/error.php");
            exit();
        }
    }

//регистрация
    if (!empty($_POST['login']) && !empty($_POST['password']))
    {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $sql = ("INSERT INTO `users`(`login`, `password`) VALUES ('$login', '$password')");
            $stmt = get_mysqli()->query($sql);
            header("Location: ../login/login.php");
    }
    else{
        header("Location: ../error/error.php");
        exit();
    }
    ?>