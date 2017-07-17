<?php

$apipath = 'http://api.openweathermap.org/data/2.5/weather?q=dubna,ru&units=metric&appid=bb3b71163929908d7327cab9dcb39189';
$local_cache = 'cache.txt';
$cache_time = time('now') - filemtime($local_cache);

var_dump($cache_time);

if (file_exists($local_cache) && $cache_time < 600) {

    //echo 'Кэш есть и он живой';
    $info = read_from_cache();

    echo 'Город ' . $info['name'] . ' Температура ' . $info['main']['temp'];
} else {

    get_weather();
}

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