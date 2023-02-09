<?php

echo "Hi <b>Brooke</b>, why are you late? ";
echo "and you too coen!<br>";
print_r($_GET) . "<br>";
echo "Hello" . $_GET["name"] . "<p>";

foreach ($_GET as $id => $val){
    echo $id . "==>" . $val . "<br>";
}

$f = fopen("test.json", "a");
fwrite($f, "this is a file. \n");
fwrite($f, json_encode($_GET) . "\n");

fclose($f);
echo "saved" . "<br>";

echo '<input type="button" value="hello">';

?>