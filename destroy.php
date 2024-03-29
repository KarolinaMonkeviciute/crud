<?php
session_start();

$id = $_GET['id'] ?? 0;

$boxes = json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true);
foreach ($boxes as $index => $box) {
    if ($box['boxId'] == $id) {
        unset($boxes[$index]);
        break;
    }
}
$boxes = array_values($boxes);
file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT));

header('Location: http://localhost/bit/crud/read.php');