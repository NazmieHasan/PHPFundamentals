<?php

$groupCount = intval(readline());
$groupType = readline();
$dayOfWeek = readline();
$pricePerNight = 0;

switch ($groupType) {
    case "Students":
        if ($dayOfWeek == "Friday") {
            $pricePerNight = 8.45;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 9.80;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 10.46;
        }
        break;

    case "Business":
        if ($dayOfWeek == "Friday") {
            $pricePerNight = 10.00;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 15.60;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 16;
        }
        break;

    case "Regular":
        if ($dayOfWeek == "Friday") {
            $pricePerNight = 15;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 20;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 22.50;
        }
        break;

}
$total = $pricePerNight * $groupCount;

if($groupType == "Business" && $groupCount >= 100) {
    $groupCount -= 10;
}

if($groupType == "Students" && $groupCount >= 30) {
    $total *= 0.85;
}

if($groupType == "Regular" && $groupCount >= 10 && $groupCount <=20) {
    $total *= 0.95;
}

$formatted = number_format($total, 2, ".", "");
echo "Total price: $formatted";