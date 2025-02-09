<?php
$who = 'Kilroy';
$where = 'here';
echo "$who was $where<br/>";

$n = 12;
echo "You are the {$n}th person";

$text = "あいうえお\nかきくけこ";
echo nl2br($text . PHP_EOL);

$name = "Tim O'Reilly";
echo "$name<br/>";

$string = 'Hello';
for ($i = 0; $i < strlen($string); $i++) {
    printf("The %dth character is %s<br/>", $i, $string[$i]);
}

if (print("test\n")) {
    print("It worked!");
}
