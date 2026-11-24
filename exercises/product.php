<?php

$product = [
    "id"    => 101,
    "title" => "لپ‌تاپ لنوو",
    "price" => 25000000
];


echo "عنوان محصول: " . $product["title"] . "<br>";
echo "قیمت: "        . number_format($product["price"]) . " تومان";
?>