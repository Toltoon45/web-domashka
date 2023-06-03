<!DOCTYPE html>
<html lang="en">
<head>
    <nav class = "navbar-nav" > 
    <ol class = "navbar-item">
        <li class="nav-item">
            <a href="http://localhost/domashka/reg/reg.php">Регистрация</a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/domashka/login/login.php">Авторизация</a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/domashka/tasks/tasks.php">Дела</a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/domashka/logout/logout.php">Выход</a>
        </li>
        <li>
            <a href="http://localhost/domashka/tasks/task_async.php">task async</a>
        </li>
    </ol>
    </nav>
    <h1><?= $page_title ?></h1>
    <main>
        <?= $content ?>
    </main>
</head>
<body>
    
</body>
</html>