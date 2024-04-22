<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forest</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <a href="index.html"><img src="pics/logo (1).svg" class="logo"></a>
            </div>
            <ul class="navbar">
                <a href="#">
                    <li class="nav">Одежда</li>
                </a>
                <a href="#">
                    <li class="nav">Палатки</li>
                </a>
                <a href="#">
                    <li class="nav">Спальники</li>
                </a>
                <a href="#">
                    <li class="nav">Мебель</li>
                </a>
                <a href="#">
                    <li class="nav">Бренды</li>
                </a>
            </ul>
            <a href="login.html" class="user-link">
                <div class="user">
                    <img src="pics/user.svg" class="user-pic">
                    <h5 class="user-text">Личный кабинет</h5>
                </div>
            </a>
        </div>
    </header>
    <main>
        <section class="login-block">
            <div class="signup-content">
                <h2 class="login-title">Авторизаиция</h2>
                   <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="login" class="input" placeholder="Почта / телефон" required>
                        <input type="password" name="password" class="input" placeholder="Пароль" required>
                        <input type="password" name="password_confirm" class="input" placeholder="Павторите пароль" required>
                        <button class="login-btn" type="submit">Войти</button>
                        <a href="login.php"><h4 class="input-text">Есть аккаунт?</h4></a>
                        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
                    </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <img src="pics/logo (1).svg" class="logo">
            <div class="social">
                <img src="pics/Vector.svg" class="footer-icons">
                <img src="pics/Vector (1).svg" class="footer-icons">
                <img src="pics/Group 16.svg" class="footer-icons">
            </div>
            <h4 class="footer-num">8 (800) 55 35 35</h4>
        </div>
    </footer>
</body>

</html>