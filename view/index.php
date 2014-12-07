<html>
<head>
    <title>Новости</title>
</head>
<body>
<div id="pagesnews">
    <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
        <div class="data">Дата публикации <?= $article['date'];?></div>
    </article>
    <?php endforeach; ?>
<div>
</body>
</html>