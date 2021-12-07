<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title><?= "Авторизация и регистария"; ?></title>
</head>

<body>
    

    <form action="auth.php" method="POST" enctype="multipart/form-data">
        <h1>Авторизация</h1>
        <label>Логин</label>
        <input placeholder = 'Введите свой логин' type="text" name="login">
        <label for="">Пароль</label>
        <input type="password" placeholder = 'Введите свой пароль' name="pass">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href='register.php'>зарегистрируйтесь</a>
        </p>
        </form>

</body>

</html>