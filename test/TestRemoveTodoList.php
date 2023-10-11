<?php



require_once "../model/todolist.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Jhelky");
addTodoList("walliya");
addTodoList("Magebume");
addTodoList("Wamena");
addTodoList("Tolikara");


showTodoList();

removeTodoList(3);

showTodoList();
