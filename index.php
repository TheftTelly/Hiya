<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авт и рег</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button type="submit">Войти</button>
    <p>
        У Вас нет аккаунта? - <a href="register.php">Зарегестрируйтесь</a>
    </p>
    <?php
    if ($_SESSION['message']){
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset ($_SESSION['message']);
    ?>

</form>
</body>

</html>