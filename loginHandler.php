<?php include './dbconnect.php'?>
<?php include './functions.php'?>

<?php
    if(isset($_POST['loginButton'])){
        $userNameInput = $_POST['username'];
        $userPasswordInput = $_POST['password'];

        if(checkIfUserExists($userNameInput) == 0){
            header('Location: askToSignup.php');
        } else {
            //$_COOKIE['usernameCookie'] = $userNameInput;
            
             header('Location: books.php');
        }
        


    }
?>