<?php


require_once "../model/todolist.php";
require_once "../BusinessLogic/addTodoList.php";


addTodoList("jhelky Walliya");
addTodoList("USTJ");
addTodoList("Fokom");

var_dump($todoList);
