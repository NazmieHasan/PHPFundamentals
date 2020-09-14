<?php

$word = readline();
$case = readline();
$sum = 0;

for ($i = 0; $i < strlen($word); $i++) {
    $current = $word[$i];
    if ($case === "LOWERCASE") {
        if (ctype_lower($current)) {
          $sum +=ord($current);
        }
    } else {
        if (ctype_upper($current)) {
            $sum +=ord($current);
        }
    }
}
 echo "The total sum is: $sum";