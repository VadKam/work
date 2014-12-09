<?php
header("Content-Type: text/html; charset=utf-8");
require_once __DIR__ . '/../config.php';

foreach  ($news as $article) {
    if ($article['id'] == $_GET['statya']){
        echo $article['title'];
        echo $article['text'];
    }
}

?>

<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8">
</head>
<body>
<div id="maket">
    <div id="pagesnews">
        <?
            foreach  ($news as $article) {
                if ($article['id'] == $_GET['statya']){
                    echo '
                    ?>
                            <article>
                                <h1><?= ' .  $article['title'] . ' ?></h1>
                                <div><?= ' .  $article['text'] . ' ;?></div>
                                <div style="float: right; font-size: 12px; margin: 5px">Дата публикации <?= ' .  $article['datanews'] . ' ;?></div>
                            </article>
                     <?
                     ';
                }
            }
        ?>
            <article>
                <h1><?=$article['title'];?></h1>
                <div><?=$article['text'];?></div>
                <div style="float: right; font-size: 12px; margin: 5px">Дата публикации <?=$article['datanews'];?></div>
            </article>

    </div>
<div id="knopkanews">
    <a target="_blank" href="view/addnews.php">Добавиить Новость</a>
</div>
</div>
</body>
</html>