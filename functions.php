<?php

function read_from_cache($file) {

    $link = fopen($file, "r");

    $data = fread($link, filesize($file));
    fclose($link);
    $decode_data = json_decode($data, true);


    return $decode_data;
}

function get_weather($url, $filename) {

    echo 'Обновляю данные, пожалуйста подождите.<br>';

    $link = fopen($url, "r");

    if (!$apidata = stream_get_contents($link)) {

        echo 'Сервер недоступен';

        return false;
    } else {

        file_put_contents($filename, $apidata);

        return true;
    }
}

?>
