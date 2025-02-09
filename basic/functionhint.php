<?php

class Entertainment {}

class Clown extends Entertainment {}

class Job extends Entertainment {} // Job を Entertainment のサブクラスにする

function handleEntertainment(Entertainment $a, callable $callback = NULL)
{
    echo "Handling " . get_class($a) . " fun\n";

    if ($callback !== NULL) {
        $callback();
    }
}

$callback = function () {
    // do something
};

handleEntertainment(new Clown); // works
handleEntertainment(new Job, $callback); // 修正後は動作する
$array = array(
    "really long string here, boy",
    "this",
    "middling length",
    "larger"
);
$sortOption = 'random';

usort($array, function ($a, $b) use ($sortOption) {
    if ($sortOption == 'random') {
        // sort randomly by returning (-1, 0, 1) at random
        return rand(0, 2) - 1;
    } else {
        return strlen($a) - strlen($b);
    }
});

print_r($array);
