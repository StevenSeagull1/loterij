<?php



function inlogAction(){

    if(isset($_POST['username']))
    {

        require 'secure/config.php';
        $name = filter_input(INPUT_POST,'username');//$_POST['name'];

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
                        include 'view/admin.php';
                        break;
                    case 'klant':
                        include 'view/klant.php';
                        break;
                    // case 'rol3':
                    //     include 'templates/rol3.php';
                    //     break;
                    default: break;
                }
            }
            else{

                include 'view/FoutInlog.php';
                }
            }
            else{
                include 'view/FoutInlog.php';
            }
        }
    else
    {
        include 'view/inlogForm.php';
    }
}


function uitlogAction(){
    session_unset();
    if(isset($_SESSION)){
        session_destroy();

    }}

function spelAction(){
    if(isset($_SESSION)){
        include 'view/spel.php';
    }
    else{
        echo 'Pagina niet gevonden.';
    }
}

function loterijAction() {
    if(isset($_SESSION)){
        include 'view/loterij.php';
    }
    else{
        echo 'Pagina niet gevonden';
    }

}

?>