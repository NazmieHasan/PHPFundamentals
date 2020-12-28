<?php

$command = readline();

while ($command != "end") {
    $pattern = '/^[A-Z][a-z\' ]+:[A-Z ]+$/m';
    if (preg_match($pattern, $command)==1) {
        $key = strpos($command, ':');
        $command = str_replace(':', '@', $command);
        $symbols = str_split($command);
        $encryptedSong = [];
        foreach ($symbols as $symbol) {
            if ($symbol != '@' && $symbol !== ' ' && $symbol !== "'" ) {

                $ord = ord($symbol);
                $newVal = $key + $ord;
                if ($ord >= 65 && $ord <= 90) {
                    if (($ord + $key) > 90 ) {
                        $difference = ($ord + $key) - 90;
                        $newVal = $difference + 64;
                    }
                } else {
                    if (($ord + $key) > 122 ) {
                        $difference = ($ord + $key) - 122;
                        $newVal = $difference + 96;
                    }
                }
                $newSymbol = chr($newVal);

            } else {
                $newSymbol = $symbol;
            }
            $encryptedSong[] = $newSymbol;
        }
        echo "Successful encryption: ".implode('', $encryptedSong).PHP_EOL;
    } else {
        echo "Invalid input!".PHP_EOL;
    }
    $command = readline();
}