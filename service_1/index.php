<?php

if (!isset($_GET['request'])) {
    echo 'Service 1', PHP_EOL;

    echo '<br><a target="_blank" href="http://first.services.local">first.services.local</a><br>',
        '<a target="_blank" href="http://second.services.local">second.services.local</a><br>',
        '<a target="_blank" href="http://third.services.local">third.services.local</a><br>';
} else {
    // Request example

    $service2IsAvailable = false;
    $service3IsAvailable = false;

    $url        = 'http://192.168.128.5';
    $connection = curl_init();
    curl_setopt($connection, CURLOPT_URL, $url);
    curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($connection, CURLOPT_HTTPHEADER, ['Host: second.services.local']);
    curl_exec($connection);
    $responseStatusCode = curl_getinfo($connection, CURLINFO_HTTP_CODE);
    if ($responseStatusCode === 200) {
        $service2IsAvailable = true;
    }

    curl_setopt($connection, CURLOPT_HTTPHEADER, ['Host: third.services.local']);
    curl_exec($connection);
    $responseStatusCode = curl_getinfo($connection, CURLINFO_HTTP_CODE);
    if ($responseStatusCode === 200) {
        $service3IsAvailable = true;
    }

    echo 'Service 2 is available: ', $service2IsAvailable ? 'true' : false, '<br>',
        'Service 3 is available: ', $service3IsAvailable ? 'true' : false,  '<br>';
}
