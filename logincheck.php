<?php
include 'login/model.php';
include 'login/config.php';

if(isset($_GET['action'])) {

    if($_GET['action']=="login" ){
        include 'login/inlogForm.php';
    }

    if($_GET['action']=="sumbit"){
        include 'index.php';
    }

    else{
        include 'FoutInlog.php';
    }
}


// echo '<a href="?action=login">Login</a>';








