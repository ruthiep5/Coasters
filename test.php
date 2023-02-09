<?php

echo "Hi <b>Brooke</b>, why are you late? ";
echo "and you too coen!<br>";

//echo $_GET;
print_r($_GET);
echo "Hello" . $_GET["name"];
echo <br>
foreach ($_GET as $id => $val){
    echo $id . "==>" . $val . "<br>"
};

$f=fopen("test.json", "a");
fwrite($f, "this is a file");
fclose($f);
echo "saved";

?>