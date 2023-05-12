<?php
require_once('../boot.php');
$title = "список задач";
$page_title = "список задач (скрытая страница)";
if (isset($_SESSION['login'])){
    $content = "
    <form action = 'add_task.php' method='post'>
    <textarea cols = 10 rows = 10 name = 'task>
    </textarea><br>
    <input type='submit' value = 'отправить'>
    </form>";

    $sql = "SELECT * FROM tasks";
    $stmt = get_mysqli()->query($sql);
    $content = $content."<table border = '1' class='table'>";
    $count = 0;
    while ($row = $stmt->fetch_row())
    {
        $html_row = "";
        $html_row = $html_row . '<tr>';
        $html_row = $html_row . '<td>' . $row[1] . '</td><td>' . $row[2] . '</td>';
        $html_row = $html_row . '</tr>';

        $content = $content.$html_row;

    }
}



else {
    $content = "авторизируйся блин";
}


include("../components/layout.php");
?>