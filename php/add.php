<?php

$feature = strip_tags($_POST['feature']);

try {
    $db = new PDO('sqlite:../db.sqlite');
} catch (Exception $e) {

    throw $e;
}
$stmt = $db->prepare('INSERT INTO todo (name,votes,added) VALUES(:name,:votes,:added)');

$stmt->execute(array(
    ':name' => $feature,
    ':votes' => 0,
    ':added' => time()
));

header('Location: todo.php');
