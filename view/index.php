<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8">
</head>
<body>
<div id="maket">
    <div id="pagesnews">
        <?php foreach ($news as $article): ?>
            <article>
                <h1><?=$article['title'];?></h1>
                <div><?=$article['text'];?><a href="view/pagenews.php/?statya=<?=$article['id'];?>" target="_blank">Читать далее...</a></div>
                <div style="float: right; font-size: 12px; margin: 5px">Дата публикации <?=$article['datanews'];?></div>
            </article>
        <?php endforeach; ?>
    </div>
    <div id="knopkanews">
        <a target="_blank" href="view/addnews.php">Добавиить Новость</a>
    </div>
</div>
</body>
</html>