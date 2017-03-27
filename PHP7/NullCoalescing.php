<?php

//declare(strict_types=1);

$id1 = null;
$id2 = 25;

//$id = $_GET['id'] ?? $_POST['id'] ?? 20;
$id = $id1 ?? $id2 ?? 40;

var_dump($id);