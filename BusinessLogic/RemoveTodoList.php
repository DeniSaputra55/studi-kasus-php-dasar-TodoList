<?php 
/**
 * Menghapus todo di list
 */
function removeTodoList(int $number) : bool 
{
    global $todoList;
    //jika data tidak ada 
    if ($number > sizeof($todoList)){
        return false;
    }
    //perulangan
    for ($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);
    return true;
}
?>