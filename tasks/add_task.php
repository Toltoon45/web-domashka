<?php
require_once('../boot.php');
if (!empty($_SESSION['login']) and !empty($_POST['task'])){
    
    $login = $_SESSION['login'];
    $sql = "SELECT * FROM users WHERE LOGIN = '$login'";
    $stmt = get_mysqli()->query($sql);
    $user_id = $stmt->fetch_row()[0];
    //echo
    $task = $_POST['task'];
    $sql = "INSERT INTO `tasks`(`user_id`, `task`) VALUES ('$user_id','$task')";
    $stmt = get_mysqli()->query($sql);

}
?>