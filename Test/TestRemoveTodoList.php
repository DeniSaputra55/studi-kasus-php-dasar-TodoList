<?php 
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("eko"); //1
addTodoList("kurniawan"); //2
addTodoList("khannedy"); //3
addTodoList("budi"); //4
addTodoList("joko"); //5

showTodolist();
//mengahapus data ke 3
removeTodoList(3);
showTodolist();
//menghapus data ke 2
removeTodoList(2);
showTodolist();

$succes = removeTodoList(4);
var_dump($succes);
showTodolist();
?>