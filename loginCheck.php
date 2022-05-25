<?php
include 'model/model.php';
require_once('secure/config.php');
include 'index.php';



if(isset($_GET['action'])) {

    if($_GET['action']=="login" ){

        include 'view/inlogForm.php';


        if($_GET['action']=="sumbit"){
            include 'index.php';
        }

        else{
            include 'view/FoutInlog.php';
        }
}
}


echo '<a href="?action=login">Login</a>';









