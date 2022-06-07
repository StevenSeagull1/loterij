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
        default:
            include 'view/index.html';

    }

    switch($function){
        case "loterij": 
            loterijAction();
            break;
        default:
            include 'view/index.html';

    }
// }


?>