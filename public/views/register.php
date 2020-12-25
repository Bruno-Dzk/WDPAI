<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/registers.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>
<body>
<div class="container">
    <div class="photo">
        <img src="public/img/login.svg">
    </div>
    <div class="login-container">
        <div class="logo"></div>
        <div class="vademecum">
            <h1>Twoje żeglarskie vademecum zawsze pod ręką</h1>
        </div>
        <form class="register" action="register" method="POST">
            <div class="messages">
                <?php
                    if(isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <div class="inputs">
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <input name="confirmedPassword" type="password" placeholder="confirm password">
                <input name="name" type="text" placeholder="name">
                <input name="surname" type="text" placeholder="surname">
            </div>
            <div class="button">
                <button type="submit">zarejestruj się</button>
            </div>

        </form>
    </div>

</div>
</body>