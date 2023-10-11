<?php

require_once "../model/todolist.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../view/viewRemoveTodoList.php";
require_once "../view/viewaddtodolist.php";
require_once "../Helper/input.php";

function viewshowtodolist()
{
                    while (true) {
                                        showTodoList();

                                        echo "MENU" . PHP_EOL;
                                        echo "1. Tamba Todo" . PHP_EOL;
                                        echo "2. Hapus Todo" . PHP_EOL;
                                        echo "x. Keluar" . PHP_EOL;


                                        $pilihan = input("Pilih");

                                        if ($pilihan == "1") {
                                                            viewaddtodolist();
                                        } else if ($pilihan == "2") {
                                                            viewromovetodolist();
                                        } else if ($pilihan == "x") {

                                                            break;
                                        } else {
                                                            echo "Pilihan Tidak Dimegenrti" . PHP_EOL;
                                        }
                                        echo " sampi jumpa lagi" . PHP_EOL;
                    }
}
