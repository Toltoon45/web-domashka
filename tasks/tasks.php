<?php
require_once('../boot.php');
$title = "список задач";
$page_title = "список задач (скрытая страница)";
if (isset($_SESSION['login'])){
    $content = "
    <form action = 'add_task.php' method='post'>
    <textarea cols = 50 rows = 10 name = 'task'>
    </textarea><br>
    <input type='submit' value = 'отправить'>
    </form>";

    $sql = "SELECT * FROM tasks";
    $stmt = get_mysqli()->query($sql);
    $content = $content."<table border = '1' class='table'>";
    while ($row = $stmt->fetch_row())
    {
        $html_row = "";
        $html_row = $html_row . '<tr>';
        $html_row = $html_row . '<td>' . $row[0] . '</td><td>' . $row[1] . '</td>';
        $html_row = $html_row . '</tr>';

        $content = $content.$html_row;
    }
    $content = $content."</table>";
}

else {
    $content = "авторизируйся блин";
}


include("../components/layout.php");
?>