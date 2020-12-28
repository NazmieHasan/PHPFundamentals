<?php

$validChars = range("d", "}");
$validChars[] = "#";

$encrypted = readline();
$replaceParams = explode(" ", readline());
$decrypted = "";
$isValid = true;

for ($i = 0; $i < strlen($encrypted); $i++) {
    $current = $encrypted[$i];
    if (in_array($current, $validChars)) {
        $correctPos = ord($current) - 3;
        $correct = chr($correctPos);
        $decrypted .= $correct;
    } else {
        $isValid = false;
    }
}
if ($isValid) {
    $search = $replaceParams[0];
    $replacement = $replaceParams[1];
    $result = str_replace($search, $decrypted, $replacement);
    echo $result.PHP_EOL;
} else {
    echo "This is not the book you are looking for." . PHP_EOL;
}