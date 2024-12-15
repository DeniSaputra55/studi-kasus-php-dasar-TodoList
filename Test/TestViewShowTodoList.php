<?php 
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("eko");
addTodoList("kurniawan");
addTodoList("khanedy");
addTodoList("program");
addTodoList("zaman");
addTodoList("now");

viewShowTodoList();
?>