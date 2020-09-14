<?php

$commands = readline();

while ($commands !== "Lumpawaroo"){
    $newCommands = explode(" | ", $commands);
    if (count($newCommands) > 1 ) {
        $forceSlide = $newCommands[0];
        $forceUser = $newCommands[1];
        if (!isset($users[$forceUser])) {
            $users[$forceUser] = $forceSlide;
        }
    } else {
        $newCommands = explode(" -> ", $commands);
        $forceSlide = $newCommands[1];
        $forceUser = $newCommands[0];

        if (!isset($users[$forceUser])) {
            $users[$forceUser] = $forceSlide;
        } else {
            $users[$forceUser] = $forceSlide;
        }
        echo "$forceUser joins the $forceSlide side!".PHP_EOL;
    }

    $commands = readline();
}

$sides = [];
foreach ($users as $name => $side) {
    if (isset($sides[$side])) {
        $sides[$side]++;
    } else {
        $sides[$side] = 1;
    }
}

uksort($sides, function ($key1, $key2) use ($sides) {
    $midRes = $sides[$key2]<=>$sides[$key1];
    if ($midRes == 0) {
        return $key2<=>$key1;
    } else {
        return $midRes;
    }
});
