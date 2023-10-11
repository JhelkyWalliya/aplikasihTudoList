<?php

require_once "../model/todolist.php";
require_once "../businessLogic/addTodoList.php";



addTodoList("Jhelky");
addTodoList("walliya");
addTodoList("Papua");

var_dump($todoList);
