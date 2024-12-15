<?php 
/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todoList;
    //untuk mengetahui panjanganya data
    $number = sizeof($todoList) + 1;
    $todoList[$number] = $todo;
}
?>