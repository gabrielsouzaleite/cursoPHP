<?php

$json = '[{"nome":"Gabriel","idade":21},{"nome":"Alan","idade":34}]';

$data = json_decode($json, true);

var_dump($data);


?>