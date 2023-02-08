<?php

echo "Hi <b>Brooke</b>, why are you late?";
echo "and you too coen!";

//echo $_GET;
print_r($_GET);
echo $_GET[name];

$f=fopen("test.json", "a");
fwrite($f, "this is a file");
fclose($f);
echo "saved";
?>