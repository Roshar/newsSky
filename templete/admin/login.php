<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (!empty($GLOBALS['errorMsg'])):?>
<p><?php echo $GLOBALS['errorMsg'];?></p>
<?php endif;?>
<form action="" method="post">
    <div>
        <label for="login">Email:
            <input type="text" name="login">
        </label>
    </div>
    <div>
        <label for="password">Пароль:
            <input type="password" name="pass" >
        </label>
    </div>
    <div>
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Войти">
    </div>
</form>
<p><a href="/newsSky/index.php">Вернуться на главную страницу</a></p>
</body>
</html>