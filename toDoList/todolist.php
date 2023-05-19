<?php
echo "<ul>";
foreach ($_SESSION['toDoList'] as $task){
    echo "<li>".$task."</li>";
    echo "<form action='delToDoList.php' method='post'>
    <input type='hidden' id='delTask' name='delTask' value='$task'>
    <input type='submit' value='supprimer'>
    </form>";
}
echo "</ul>";
echo '<form action="updateToDoList.php" method="post"> 
<input type="text" id="newTask" name="newTask">
<input type="submit">
</form>'
?>