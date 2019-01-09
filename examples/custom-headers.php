<?php

// Include the library
require __DIR__ . '/../Zebra_cURL.php';

// Instantiate the Zebra_cURL class
$curl = new Zebra_cURL;

// Set custom headers with option method
$curl->option(CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'X-Token-Foo-Bar: ABC123' // Pass keys to api's for example
]);

echo $curl->scrap('http://httpbin.org/get') . PHP_EOL;