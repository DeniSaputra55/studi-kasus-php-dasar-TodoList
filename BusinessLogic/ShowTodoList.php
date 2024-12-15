<?php 
/**
 * Menampilkan todo di list
 */
function showTodolist()
{
    global $todoList;
    echo "TODOLIST" . PHP_EOL;

    //menggunakan perulangan foreach
    foreach ($todoList as $number => $value){
        echo "$number . $value" . PHP_EOL;
    }
}
?>