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
<?php if ($GLOBALS['errorMsg']):?>
    <span><?=$GLOBALS['errorMsg'];?></span>
<?endif;?>
<form action="?ctrl=AddNews" method="post">
    <legend>Категория: </legend>
    <input type="text" name="category">
    <br>
    <legend>Заголовок: </legend>
    <input type="text" name="title">
    <p>
        <label for="content"> Текстовое содержание: </label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </p>
    <input type="hidden" name = "id" value="">
    <input type="submit" value="Добавить">
</form>
</body>
</html>