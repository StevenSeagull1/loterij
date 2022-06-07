<?php


require 'model/model.php';
include 'view/header.php';
include 'view/menubalk.php';

?>

<?php
session_start();


// if(!isset($_SESSION['rechten'])){
//     inlogAction();
// }
// else{
    $function = filter_input(INPUT_GET, 'action');

    switch($function){
        case "login": 
            inlogAction();
            break;
        case "loterij":
            loterijAction();
            break;
        case "spel":
            spelAction();
            break;
        case "uitloggen":
            uitlogAction();
            break;
            default:

    }
//}


?>