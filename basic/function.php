<?php
// function strcat($left, $right)
// {
//     return $left . $right;
// }
// $first = "This is a";
// $second = " complete sentence!";

// echo strcat($first, $second) . PHP_EOL;

// $a = 3;

// function foo()
// {
//     global $a;

//     $a += 2;
// }

// foo();
// echo $a;

// function sayIt()
// {
//     $ws = <<< "StufftoSay"
//     The quick brown fox
//     Jumps over the lazy dog.
//     StufftoSay;
//     return $ws;
// }

// echo sayIt();

function get_price($price)
{
    $price = $price * 1.1;
    return round($price);
}
echo get_price(300);

function default_demo($name = '太郎')
{
    echo "私の名前は" . $name . "です<br>";
}
default_demo("花子");
default_demo();

function vending_machine($price, $juice_name)
{
    if ($price >= 120) {
        return $juice_name . "のお買い上げありがとうございます!<br>";
    } else {
        return $juice_name . "の購入金額が不足しています。<br>";
    }
}

echo vending_machine(120, "オレンジジュース");

$price = 90;
$juice_name = "アップルジュース";
echo vending_machine($price, $juice_name);
