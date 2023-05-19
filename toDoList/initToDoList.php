<?php
session_start();
$_SESSION['toDoList']=array();

echo "</ul>";
echo '<form action="updateToDoList.php" method="post"> 
<input type="text" id="newTask" name="newTask">
<input type="submit">
</form>'
?>