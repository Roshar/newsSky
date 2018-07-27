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
<ul->
    <li><a href="?ctrl=AddNews">Добавить новую статью </a></li>
    <li><a href="?ctrl=Index">Выйти из панели управления </a></li>
</ul->

<?php foreach ($this->articles as $item):?>
    <form action="?ctrl=DeleteArticleInDb" method="post">
<article>
    <h3><a href="?ctrl=Article&id=<?=$item->id;?>"><?= $item->title;?></a></h3>
    <p><?=$item->content;?></p>
</article>
<hr>
        <input type="hidden" name="id" value="<?=$item->id;?>">
        <input type="submit" value="Удалить статью">
    </form>
<?php endforeach;?>
</body>
</html>