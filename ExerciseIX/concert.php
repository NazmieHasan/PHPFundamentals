<?php

$bands = [];
$playTimes = [];
$input = readline();
$totalPlayTime = 0;

while ($input !== "start of concert") {

    $args = explode("; ", $input);
    $command = args[0];
    $bandName = args[1];
    if ($command === "Add") {
        $members = explode(", ", $args[2]);
        foreach ($members as $member) {
                $bands[$bandName][$member] = $member;
        }
    } else {
        $currentTime = $args[2];
        $totalPlayTime += $currentTime;
        if (!key_exists($bandName, $playTimes)) {
            $playTimes[$bandName] = $currentTime;
        } else {
            $playTimes[$bandName] += $currentTime;
        }
    }
    $input = readline();
}

ksort($playTimes);
arsort($playTimes);

uksort($playTimes, function ($key1, $key2) use ($playTimes) {
    $diff = $playTimes[$key2] <=> $playTimes[$key1];
    if ($diff === 0) {
        return $key1 <=> $key2;
    } else {
        return $diff;
    }
});

echo "Total time: $totalPlayTime".PHP_EOL;
foreach ($playTimes as $band => $time) {
    echo "$band -> $time".PHP_EOL;
}

$bandToPrint = readline();
echo $bandToPrint.PHP_EOL;
foreach ($bands[$bandToPrint] as $members) {
    echo "=> $member".PHP_EOL;
}



