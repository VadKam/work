<?
$db = "mysql:host=localhost;dbname=news;";
$user = 'root';
$password= '';
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // В большинстве случаев предпочтительнее, Из хабра:
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //PDO::ATTR_PERSISTENT => true //Постоянное соединение
);
$db = new PDO($db, $user, $password, $opt);

require_once __DIR__ . '/models/modelnews.php';
require_once __DIR__ . '/controller/controller.php';