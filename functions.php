<?php

function read_from_cache() {

    global $local_cache;

    $link = fopen($local_cache, "r");

    $data = fread($link, filesize($local_cache));

    $decode_data = json_decode($data, true);


    return $decode_data;
}

function get_weather() {

    global $apipath;
    global $local_cache;



    $link = fopen($apipath, "r");

    $apidata = stream_get_contents($link);

    //$data = json_decode($apidata, true);
    //echo '<pre>';
    //var_dump($data);
    file_put_contents($local_cache, $apidata);
}


?>

