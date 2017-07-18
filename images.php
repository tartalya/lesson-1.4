<?php

$api_icon_path = 'http://openweathermap.org/img/w/';


$icons = array(
    '04d' => array(200, 201, 203, 210, 211, 212, 221, 230, 231, 232, 803, 804),
    '09d' => array(300, 301, 302, 310, 311, 312, 313, 314, 321),
    '10d' => array(500, 501, 502, 503, 504),
    '09d' => array(511, 520, 521, 522, 531),
    '13d' => array(600, 601, 602, 611, 612, 615, 616, 620, 621, 622),
    '50d' => array(701, 711, 721, 731, 741, 751, 761, 762, 771, 781),
    '02d' => array(801),
    '03d' => array(802)
);

$img_id = $info['weather'][0]['id'];

foreach ($icons as $firstkey => $firstvalue) {

    if (is_array($firstvalue)) {

        foreach ($firstvalue as $value) {



            if ($value == $img_id) {

                $img_name = $firstkey . '.png';
            }
        }
    }
}

$img_url = $api_icon_path . $img_name;
?>