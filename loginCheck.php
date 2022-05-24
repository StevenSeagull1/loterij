<?php
include 'login/model.php';
require_once('login/config.php');
include 'index.php';


if(isset($_GET['action'])) {

    if($_GET['action']=="login" ){

        include 'login/inlogForm.php';


        if($_GET['action']=="sumbit"){
            include 'index.php';
        }

        else{
            include 'FoutInlog.php';
        }
}
}



echo '<a href="?action=login">Login</a>';








