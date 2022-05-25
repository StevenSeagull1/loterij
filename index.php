
<?php
include 'view/index.html'
?>


<?php
session_start();

require 'login/crudUser.php';
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



function randomUser() {
    GLOBAL $pdo;

}

