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

    <article>
        <h3><?=$this->article->title;?></h3>
        <span><?=$this->article->newsdate;?></span>
        <p><?=$this->article->content;?></p>
    </article>


</body>
</html>