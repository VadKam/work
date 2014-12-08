<?php
header("Content-Type: text/html; charset=utf-8");

require_once __DIR__ . '/../config.php';
$news = [];
try{
    /// Запросы можно делать 3 функциями: exec(), query() и prepare+execute.
    $res = $db->query('SELECT * from news'); //Выполняет SQL запрос и возвращает результирующий набор в виде объекта PDOStatement
    //Установка fetch mode
    $res->setFetchMode(PDO::FETCH_ASSOC); // Задает режим выборки по умолчанию для объекта запроса. Возвращает 1 в случае успешной установки режима или FALSE в случае возникновения ошибки
    while($row = $res->fetch()){ //- fetch() - обычный фетч, аналог mysql_fetch_array().- fetchAll() - функция получения всех строк разом. Возвращает массив, содержащий все строки результирующего набора - fetchColumn() - возвращает единственное скалярное значение
        $news[] = $row;
        //echo "<p>" . $row['title'] . "<br>" . $row['text'] . "</p>";
    }
}
catch(PDOException $e){ //Представляет ошибку, вызываемую PDO
    echo 'Error : '.$e->getMessage();
    exit();
}


/*
// Выборка данных с использованием подготовленных запросов В этом примере производится выборка из базы по ключу, который вводит пользователь через форму. Пользовательский ввод автоматически заключается в кавычки, поэтому нет риска SQL иньекции.
$stmt = $db->prepare("SELECT * FROM NEWS where id = 2"); // вместо 2 стояло ?
if ($stmt->execute(array($_GET['id']))) {
    while ($row = $stmt->fetch()) {
        print_r($row);
        echo $row['text'];
    }
}*/