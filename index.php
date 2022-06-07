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
<<<<<<< HEAD
//}
=======

    switch($function){
        case "loterij": 
            loterijAction();
    }

    switch($function){
        case "spel": 
            spelAction();
    }
// }
>>>>>>> 137fa85263d164a7952ce6ad4d33443b1d0794c3


?>