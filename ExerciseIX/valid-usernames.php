<?php

$usernames = explode(", ", readline());

foreach ($usernames as $username) {
    $length = strlen($username);
    if ($length >= 3 && $length <= 16) {
        $isValid = true;
        for ($i = 0; $i <$length; $i++) {
            $currentChar = $username[$i];
            if (!(ctype_alnum($currentChar) |
                ($currentChar === "_") |
                ($currentChar === "-"))) {
                $isValid = false;
                break;
            }
        }
        if ($isValid) {
            echo $username.PHP_EOL;
        }
    }
}
