<?php
session_start();


require 'model/model.php';




?>

<a href="?action=randomuser">We are rohit</a>

<?php



// if(!isset($_SESSION['rechten'])){
//     inlogAction();
// }
// else{

    $function = filter_input(INPUT_GET, 'action');

    switch($function){
        case "login": 
            inlogAction();
            if(isset($_SESSION['username'])){
                include 'view/naInlog.php';
            }
            break;
        case "loterij":
            loterijAction();
            break;
        case "spel":
            spelAction();
            break;

        case "randomuser":
            randomUser();
            break;

        case "logout":
            if(isset($_SESSION['username'])){
                uitlogAction();
            } 
            else{
                echo 'Werkt niet.';
            }

            break;
        
        case "winnaar":
            chooseName();
            break;
            default:
    }


    

//}

// }


include 'view/header.php';
include 'view/menubalk.php';
?>