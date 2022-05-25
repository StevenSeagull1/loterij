<?php
require 'model/model.php';
include 'view/index.html';
?>

<?php
session_start();

require 'view/crudUser.php';
if(!isset($_SESSION['rechten'])){
    inlogAction();
}
else{
    $function = filter_input(INPUT_GET, 'fun');

    switch($function){
        case 1: inlogAction();
        break;
        default:
    }
}


?>