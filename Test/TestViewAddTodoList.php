<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php"; 
addTodoList("eko");
addTodoList("kurniawan");
addTodoList("khanedy");

viewAddTodoList();
showTodolist();
viewAddTodoList();
showTodolist();
?>