// second solution
<?php

$command = readline();
$bands = [];
$totalTime = 0;

while ($command !== "start of concert") {
    $commands = explode("; ", $command);
    $bandName = $commands[1];
    if ($commands[0] == "Add" ) {
        if (!key_exists($bandName, $bands)) {
            $bands[$bandName] = [];
            $bands[$bandName]['time'] = 0;
            $bands[$bandName]['members'] = [];

        }
        $members = explode(", ", $commands[2]);
        foreach ($members as $member) {
            if (!in_array($member,$bands[$bandName]['members'])) {
                $bands[$bandName]['members'][] = $member;
            }
        }
    } else if ($commands[0] == "Play") {
        if (!key_exists($bandName, $bands)) {
            $bands[$bandName] = [];
            $bands[$bandName]['time'] = 0;
            $bands[$bandName]['members'] = [];
        }
        $bands[$bandName]['time'] += $commands[2];
        $totalTime += $commands[2];
    }
    $command = readline();
}

$finalBandName = readline();

uksort($bands, function ($bandName1, $bandName2)  use ($bands){
    $timeComparison = $bands[$bandName2]['time'] <=> $bands[$bandName1]['time'];
    if ($timeComparison == 0) {
        return $bandName1 <=> $bandName2;
    } else {
        return $timeComparison;
    }
});

echo "Total time: ".$totalTime.PHP_EOL;
foreach ($bands as $name=>$val) {
    echo $name." -> ".$val['time'].PHP_EOL;
}
echo $finalBandName.PHP_EOL;

foreach ($bands[$finalBandName]['members'] as $memberFinal) {
        echo "=> ".$memberFinal.PHP_EOL;
}