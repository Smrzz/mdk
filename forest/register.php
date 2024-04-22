

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style='background-image:url()'>

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <div class="login_block">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
        <label>Введите код</label>
        <input type="password" name="password_confirm" placeholder="Введите код" required>
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href=".//login.php">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </div>
        
    </form>

</body>
</html>