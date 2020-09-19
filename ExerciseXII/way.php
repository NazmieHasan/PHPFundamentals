<?php

$shops = [];
$items = [];

$input = readline();

while ("END" !== $input) {
    $args = explode("->", $input);
    $command = $args[0];
    $shopName = $args[1];
    if ($command === "Add") {
        $items = $args[2];
        $items = explode(",", $items);
        if (count($items) > 1) {
            foreach ($items as $item) {
                $shops[$shopName][] = $item;
            }
        } else {
            $shops[$shopName][] = $args[2];
        }
    } else {
        unset($shops[$shopName]);
    }
    $input = readline();
}

uksort($shops, function ($shop1, $shop2) use ($shops) {
    $count1 = count($shops[$shop1]);
    $count2 = count($shops[$shop2]);
    if ($count1 === $count2) {
        return $shop2 <=> $shop1;
    }
    return $count2 <=> $count1;
});

echo "Stores list:" . PHP_EOL;
foreach ($shops as $name=>$products) {
    echo $name . PHP_EOL;
    foreach ($products as $product) {
        echo "<<$product>>" . PHP_EOL;
    }
}