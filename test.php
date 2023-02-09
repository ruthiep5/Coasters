<?php

echo "Hi <b>Brooke</b>, why are you late? ";
echo "and you too coen!<br>";
print_r($_GET) . "<br>";
echo "Hello" . $_GET["name"] . "<p>";

foreach ($_GET as $id => $val){
    echo $id . "==>" . $val . "<br>";
}

$f = fopen("test.json", "w");
fwrite($f, "this is a file.");
fclose($f);
echo "saved";

echo 'type="button" value="hello"';

?>