<?php

$ch = curl_init('https://pokeapi.co/api/v2/pokemon?limit=100');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if ($e = curl_error($ch)) {
    var_dump($e);
} else {
    $decoded = json_decode($resp, true);

    print_r($decoded['results']);
    $results = $decoded['results'];
}

curl_close($ch);