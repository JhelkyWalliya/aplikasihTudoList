<?php
require_once "../model/todolist.php";
require_once  "../Helper/input.php";
require_once "../BusinessLogic/addTodoList.php";

function viewaddtodolist()
{

                    echo "MENAMBAH TODO" . PHP_EOL;
                    $todo = input("Todo (x untuk batal)   ");
                    if ($todo == "x") {
                                        echo "Batal Menamba Todo" . PHP_EOL;
                    } else {
                                        addTodoList($todo);
                    }
}
