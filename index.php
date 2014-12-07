<?php
header("Content-Type: text/html; charset=utf-8");

require_once __DIR__ . '/models/news.php';

$news = News_getAll();
include 'view/filestyle.php';
include 'view/index.php';

