<?php 
//import folder.
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
addTodoList("eko");
addTodoList("kurniawan");
addTodoList("khannedy");

var_dump($todoList);
?>