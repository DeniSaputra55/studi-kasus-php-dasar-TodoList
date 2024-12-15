<?php 
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
addTodoList("eko");
addTodoList("kurniawan");
addTodoList("khanedy");
addTodoList("program");
addTodoList("zaman");
addTodoList("now");

showTodolist();
viewRemoveTodoList();
showTodolist();
?>