<?php

require_once "../Helper/input.php";
require_once "../BusinessLogic/RemoveTodoList.php";

function viewromovetodolist()
{
                    echo "MENGHAPUS TODO" . PHP_EOL;
                    $pilihan = input("Nomor (x untuk membatalkan)");
                    if ($pilihan == "x") {
                                        echo "Batal Menghapus todo" . PHP_EOL;
                                        else{
                                                            $success = removeTodoList($pilihan);
                                                            if ($success) {
                                                            echo "sukses meghapus todo nomor $pilihan". PHP_EOL;

                                                            } else {
                                                                                echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
                                                            }

                                        }
                    }
}
