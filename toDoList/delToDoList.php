<?php 
session_start();
echo $_POST['delTask'];
$result = array_search($_POST['delTask'], $_SESSION['toDoList']);
echo $result;
array_splice($_SESSION['toDoList'], $result,1);
include 'todolist.php';
?>
