<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Gabriel',
    'idade' => 21
));

array_push($pessoas, array(
    'nome' => 'Alan',
    'idade' => 34
));

echo json_encode($pessoas);
?>