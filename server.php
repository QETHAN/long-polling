<?php


header('Content-Type: application/json; charset=utf-8');

while (true) {
    //fetch data
    $random = rand(1, 10); //use random number to simulate data hit from db
    $data = ($random == 1) ? array('aaa' => time()) : array();

    //has data
    if (!empty($data)) {
        echo json_encode($data);
        flush();
        exit(0);
    }
    sleep(5);
}

