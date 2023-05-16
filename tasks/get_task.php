<?php
require_once('../boot.php');
$content = "";
if (!empty($_SESSION['login'])){
    $sql = "SELECT * FROM tasks";
    $stmt = get_mysqli()->query($sql);
    $content = $content."<table border = '1' class='table'>";
    $count = 0;
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
echo $content;
?>