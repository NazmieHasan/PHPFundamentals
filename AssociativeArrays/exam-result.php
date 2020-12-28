<?php

$users = [];
$submissions = [];

$command = readline();

while ($command = "exam finished") {

    $args = explode("-", $command);
    $name = $args[0];
    $lang = $args[1];

    if ($lang === "banned") {
        unset($users[$name]);
    } else {
        $points = $args[2];
        if (!array_key_exists($name, $users)) {
            $users[$name] = $points;
        } else {
            if ($points > $users[$name]) {
                $users[$name] = $points;
            }
        }
        if (!array_key_exists($lang, $submissions)) {
            $submissions[$lang] = 1;
        } else {
            $submissions[$lang]++;
        }
    }
    $command = readline();
}

ksort($users);
arsort($users);
ksort($submissions);
arsort($submissions);

echo "Results:".PHP_EOL;
foreach ($users as $user => $points) {
    echo "$user | $points".PHP_EOL;
}
echo "Submissions:".PHP_EOL;
foreach ($submissions as $lang => $count) {
    echo "$lang | $count".PHP_EOL;
}