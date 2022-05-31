<?php


require 'model/model.php';
include 'view/homepage.php';

?>

<?php
session_start();


// if(!isset($_SESSION['rechten'])){
//     inlogAction();
// }
// else{
    $function = filter_input(INPUT_GET, 'fun');

    switch($function){
        case "inloggen": inlogAction();
        break;
        default:
            // include('view/homepage.php');
    }
// }


?>