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
    <form action="check.php" method = "POST">
        <h1>Регистрация</h1>
        <label for="">Логин</label>
        <input type="text" placeholder = "Введите свой логин" name ="login">
        <label for="">Фио</label>
        <input type="text" name="name" placeholder ="Введите имя">
        <label for="">Пароль</label>
        <input type="password" name="pass" placeholder = 'Введите пароль'>
        <button type="submit">зарегистрируйтесь</button>
        <p>
            У вас есть аккаунта? - <a href='autrisation.php'>авторизуйтесь</a>
        </p>
    </form>

</body>

</html>