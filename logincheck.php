<?php
include 'login/model.php';
include 'login/config.php';

if(isset($_GET['action'])) {

    if($_GET['action']=="login" ){
        include 'login/inlogForm.php';
    }
}


// echo '<a href="?action=login">Login</a>';








