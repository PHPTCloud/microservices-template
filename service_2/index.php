<?php

if (isset($_GET['response'])) {
    // Return some JSON response
    echo json_encode(['response' => 'service 2']);
} elseif (isset($_GET['request'])) {

    // Request example

    $service1IsAvailable = false;
    $service3IsAvailable = false;

} else {
    echo 'Service 2', PHP_EOL;

    echo '<br><a target="_blank" href="http://first.services.local">first.services.local</a><br>',
        '<a target="_blank" href="http://second.services.local">second.services.local</a><br>',
        '<a target="_blank" href="http://third.services.local">third.services.local</a><br>';
}
