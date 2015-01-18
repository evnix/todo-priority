<?php

if (isset($_GET['action'])) {

    try {
        $db = new PDO('sqlite:../db.sqlite');
    } catch (Exception $e) {

        throw $e;
    }

    if ($_GET['action'] === 'up') {


        $id = (int) $_GET['id'];
        $db->query ('INSERT INTO votes VALUES (' . $id . ', "' . $_SERVER['REMOTE_ADDR'] . '")');
    } else if ($_GET['action'] === 'down') {

        $id = (int) $_GET['id'];
        $db->query('DELETE FROM votes WHERE ip_address="' . $_SERVER['REMOTE_ADDR'] . '" AND id='.$id);
    }
}

header('Location: todo.php');
