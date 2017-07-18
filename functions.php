<?php

function read_from_cache($file) {

    $link = fopen($file, "r");

    $data = fread($link, filesize($file));
    fclose($link);
    $decode_data = json_decode($data, true);


    return $decode_data;
}

function get_weather($url, $filename) {

    $link = fopen($url, "r");

    if (!$apidata = stream_get_contents($link)) {

        return false;
    } else {

        file_put_contents($filename, $apidata);

        return true;
    }
}

?>
