<?php

function read_from_cache($file, $utc = 3 * 60 * 60) {

    $link = fopen($file, "r");

    $data = fread($link, filesize($file));
    fclose($link);
    $decode_data = json_decode($data, true);

    $decode_data['sunrise_utc'] = date('H:i:s', $decode_data['sys']['sunrise'] + date($utc));
    $decode_data['sunset_utc'] = date('H:i:s', $decode_data['sys']['sunset'] + date($utc));

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
