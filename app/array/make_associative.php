<pre>
<?php
// $result1 = array(
//     "Japanese" => 80,
//     "math" => 75,
//     "science" => 90
// );
// var_dump($result1);

// $result1["math"] = 85;
// var_dump($result1);

// $result2 = [
//     "history" => 85,
//     "English" => 80
// ];
// $result2["music"] = 90;
// var_dump($result2);

// $result = array("math" => 90, "English" => 80);

// $friends = array("Haruki" => $result);
// var_dump($friends);

// $friends["Kaoru"] = array("math" => 95, "English" => 85);
// var_dump($friends);

$friends = array("はるき", "かおる", "ひでと");
for ($i = 0; $i < 3; $i++) {
    echo $friends[$i] . "<br>";
}

$results = array(
    "math" => 90,
    "english" => 80,
    "japanese" => 85
);
foreach ($results as $title => $score) {
    echo $title . ":" . $score . "<br>";
}
?>
<pre>