<?php
session_start();
$title = "скрытая страница";
$page_title = "список задач";
$content = "авторизируйся ёмаё!";

if (isset($_SESSION['login'])) {
    $content = "";
    // <form>
    // <textarea cols = 10 rows = 10></textarea>
    // <input type='submit' value='отправить'>
    // </form>";
} else {
    $content = "залогинься";
}

include("components/layout.php");
?>
