<?php

$pattern = '/(?<= |^):([a-z]{4,}):(?=[ ,.!?])/';

$emojiString = readline();
$emojiArr = array_map("chr", explode(":", readline()));
$specialEmoji = implode("", $emojiArr);

preg_match_all($pattern, $emojiString, $matches);

$power = 0;
$foundEmojis = $matches[1];
foreach ($foundEmojis as $emoji) {
    for ($i = 0; $i < strlen($emoji); $i++) {
        $power += ord($emoji[$i]);
    }
}

if (count($foundEmojis) > 0) {
    echo "Emojis found: " . implode(":, :", $foundEmojis). "." . PHP_EOL;
}
if (in_array($specialEmoji, $foundEmojis)) {
    $power *= 2;
}
echo "Total Emoji Power: $power".PHP_EOL;