<?php 
session_start();
array_push($_SESSION['toDoList'], $_POST['newTask']);
include 'todolist.php';
?>
