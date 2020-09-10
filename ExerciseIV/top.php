<?php

$number = intval(readline());

printTopNumbers($number);

function printTopNumbers(int $number) : void
{
    for ($i = 1; $i <= $number; $i++) {
        $current = $i;
        $sumDigits = 0;
        $hasOdd = false;
        while ($current > 0) {
            $lastDigit = $current % 10;
            $sumDigits += $lastDigit;
            $current = intval($current / 10);
            if ($lastDigit % 2 == 1) {
                $hasOdd = true;

            }
        }
        if ($sumDigits % 8 == 0 && $hasOdd) {
            echo $i . PHP_EOL;
        }
    }
}