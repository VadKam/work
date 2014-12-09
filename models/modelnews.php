<?php
header("Content-Type: text/html; charset=utf-8");
require_once __DIR__ . '/../config.php';

// Получаем данные из БД по новостям

try {
        $news = [];
        $newsid = [];
        /// Запросы можно делать 3 функциями: exec(), query() и prepare+execute.
        $res = $db->query('SELECT * from news'); //Выполняет SQL запрос и возвращает результирующий набор в виде объекта PDOStatement
        //Установка fetch mode
        $res->setFetchMode(PDO::FETCH_ASSOC); // Задает режим выборки по умолчанию для объекта запроса. Возвращает 1 в случае успешной установки режима или FALSE в случае возникновения ошибки
        while ($row = $res->fetch()) { //- fetch() - обычный фетч, аналог mysql_fetch_array().- fetchAll() - функция получения всех строк разом. Возвращает массив, содержащий все строки результирующего набора - fetchColumn() - возвращает единственное скалярное значение
            //var_dump($row);
            $news[] = $row;
            //echo "<p>" . $row['id'] . $row['title'] . "<br>" . $row['text'] . $row['date'] . "</p>";
        }
} catch (PDOException $e) { //Представляет ошибку, вызываемую PDO
    echo 'Error : ' . $e->getMessage();
    exit();
}


// Передайм данные методом пост в БД
$title = $_POST["title"];
$text = $_POST["text"];
$date = date_create();
$date1 = date_format($date, 'Y-m-d') . "\n";
if ($text != null){
    $stmt = $db->prepare("INSERT INTO news (title,text,datanews) VALUES (?,?,?)");
    $stmt->execute(array($title, $text, $date1));
    echo "Новост добавлена";
}

foreach ($news as $article):
    $article['title'];
endforeach;

var_dump($_GET['statya']);


/*
// Выборка данных с использованием подготовленных запросов В этом примере производится выборка из базы по ключу, который вводит пользователь через форму. Пользовательский ввод автоматически заключается в кавычки, поэтому нет риска SQL иньекции.
$stmt = $db->prepare("SELECT * FROM NEWS where id = 2"); // вместо 2 стояло ?
if ($stmt->execute(array($_GET['id']))) {
    while ($row = $stmt->fetch()) {
        print_r($row);
        echo $row['text'];
    }
}*/