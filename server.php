<?php


header('Content-Type: application/json; charset=utf-8');

//fetch data
$random = rand(1, 5); //use random number to simulate data hit from db
$data = ($random == 1) ? array('aaa' => time()) : array();

//there is no data updated
if (empty($data)) {
    header('HTTP/1.0 204 No Content');
    die;
}

echo json_encode($data);
flush();
exit(0);
