<?php

$feature = strip_tags($_POST['feature']);
$desc = strip_tags($_POST['desc']);

try {
    $db = new PDO('sqlite:../db.sqlite');
} catch (Exception $e) {

    throw $e;
}
$stmt = $db->prepare('INSERT INTO todo (name,desc,added) VALUES(:name,:desc,:added)');

$stmt->execute(array(
    ':name' => $feature,
    ':desc' => $desc,
    ':added' => time()
));

header('Location: todo.php');
