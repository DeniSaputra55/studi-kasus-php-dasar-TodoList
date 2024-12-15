<?php 
function input(string $info): string 
{
    echo "$info : ";
    $result = fgets(STDIN); //standar input
    return trim($result); //untuk mencegah adanya enter
}
?>