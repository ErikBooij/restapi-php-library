<?php

use Transip\Api\Client\TransipAPI;

include(__DIR__ . '/../vendor/autoload.php');

// Your login name on the TransIP website.
$login = '';

// If the generated token should only be usable by whitelisted IP addresses in your Controlpanel
$generateWhitelistOnlyTokens = true;

// One of your private keys; these can be requested via your Controlpanel
$privateKey = '';

$api = new TransipAPI(
    $login,
    $privateKey,
    $generateWhitelistOnlyTokens
);

// Create a test connection to the api
$response = $api->test()->test();

// if ($response === true) {
//     echo 'API connection successful!';
// }