<?php

    echo "Hi <em>Brooke</em>, Why are you late??? "; 
   // echo $_GET["name"];
    print_r($_GET);

    // get information from the url parameters if one of the parameters in called 'name'
    //if (!empty($_GET['firstName'])){
        
        $_GET["time"] = time();
        $_GET['saved'] = True;

        //save info to database file
        $dbFileName = 'coaster.json';

        $file = fopen($dbFileName, 'a');
        fwrite($file, json_encode($_GET)."\n");
        fclose($file);
        //send the information back as confimration
        echo json_encode($_GET);
   // } else {
     //   echo "DATA NOT SAVED";
        
   // }
?>