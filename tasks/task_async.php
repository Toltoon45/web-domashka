<?php
require_once('../boot.php');

$title = "скрытая страница";
$page_title = "список задач скрытая";
$content = file_get_contents("task_async_content.php");
include("../components/layout.php");
?>