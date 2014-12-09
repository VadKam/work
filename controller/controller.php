<?php
/**
 * Created by PhpStorm.
 * User: Vad Kaminskiy
 * Date: 08.12.2014
 * Time: 13:29
 */
header("Content-Type: text/html; charset=utf-8");
require_once __DIR__ . '/../config.php';

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

/*<?php
if (isset($_POST['a'])) {header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); exit;}
?>*/