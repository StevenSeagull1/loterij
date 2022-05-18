<?php
include 'model.php';

if(isset($_GET['action'])) {

    if($_GET['action']=="login" ){
        include 'inlogForm.php';
    }
}


// echo '<a href="?action=login">Login</a>';








