<?php
function strcat($left, $right)
{
    return $left . $right;
}
$first = "This is a";
$second = " complete sentence!";

echo strcat($first, $second) . PHP_EOL;

$a = 3;

function foo()
{
    global $a;

    $a += 2;
}

foo();
echo $a;

function sayIt()
{
    $ws = <<< "StufftoSay"
    The quick brown fox
    Jumps over the lazy dog.
    StufftoSay;
    return $ws;
}

echo sayIt();
