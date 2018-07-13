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
<?php foreach ($this->articles as $item):?>
<article>
    <h3><?= $item->title;?></h3>
    <p><?=$item->content;?></p>
</article>
<hr>
<?php endforeach;?>
</body>
</html>