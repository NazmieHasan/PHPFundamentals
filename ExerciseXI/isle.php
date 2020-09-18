<?php

$command = readline();
$pattern = '/^([#$%*&])(?<name>[a-zA-Z]+)\1=(?<length>[d]+)!!(?<geohash>.*)$/m';

while(true) {
    $matches = false;
    preg_match_all($pattern, $command, $matches);

    if (isset($matches['name'][0]) && isset($matches['length'][0]) && isset ($matches['geohash'][0]) && (strlen($matches['geohash'][0])==$matches['length'][0])) {
        echo 'Coordinates found! '.$matches['name'][0].' -> '.decryptEnigma($matches['geohash'][0]);
        break;
    } else {
        echo 'Nothing found!'.PHP_EOL;
        $command = readline();
    }
}

function decryptEnigma($hash) {
    $decodedString = [];
    $hash = str_split($hash);
    $key = count($hash);
    foreach ($hash as $symbol) {
        $decodedString[]=chr(ord($symbol) + $key);
    }
    return implode('', $decodedString);
}