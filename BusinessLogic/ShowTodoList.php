<?php

/**/
function showTodoList()
{
                    //global scop ini saya ambil dari 
                    //folder model karena dia Global
                    global $todoList;
                    echo "TODOLIST " . PHP_EOL;
                    foreach ($todoList as $number => $value) {
                                        echo ("$number . $value") . PHP_EOL;
                    }
}
