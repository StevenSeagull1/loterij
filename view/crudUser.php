<?php

function inlogAction(){

    if(isset($_POST['name']))
{
<<<<<<<< HEAD:model/model.php
    require 'secure/config.php';
    $name = filter_input(INPUT_POST,'name');//$_POST['name'];
========
    require 'login/config.php';
    $name = filter_input(INPUT_POST,'username');//$_POST['name'];
>>>>>>>> 3cdc023a30f18878503bb30f025b999d2845fb63:view/crudUser.php
    $password = filter_input(INPUT_POST,'password');//$_POST['password'];
    $hashed_password = hash('sha256',$password);

    $sql = 'SELECT username, password,role FROM user
    WHERE username = :name';
    $statement = $pdo->prepare($sql);

    $statement->bindParam(':name',$name);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if(is_array($user))
    {

        if($user['password']==$hashed_password)
        {
            $_SESSION['username']=$name;
            $_SESSION['rechten']=$user['role'];
            switch($_SESSION['rechten'])
            {
                case 'admin':
                    include 'templates/admin.php';
                    break;
                case 'rol2':
                    include 'templates/rol2.php';
                    break;
                case 'rol3':
                    include 'templates/rol3.php';
                    break;
                default: break;
            }
        }
        else{

            include 'login/foutInlog.php';
            }
        }
        else{
            include 'login/foutInlog.php';
        }
    }
    else{
    include 'login/inlogForm.php';
    }
}


function uitlogAction(){
    session_unset();
    if(isset($_SESSION)){
        session_destroy();

    }}

?>