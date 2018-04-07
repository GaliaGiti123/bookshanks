<?php include './dbconnect.php'?>

<?php
    # jodi submit button ta clicked hoy, tahole:
    # isset($_POST['registerButton']) = true hobey.

    if(isset($_POST['registerButton']) == true ){
        
        $username = $_POST['username'];
        $userPassword = $_POST['userPassword'];
        $userEmail = $_POST['userEmail'];
        $userAddress = $_POST['userAddress'];
        $userPhone = $_POST['userPhone'];


//        $sql = "INSERT into  users(user_name, user_email, user_password, user_address, user_phone) VALUES ('$username', '$userPassword', $userEmail, $userAddress, $userPhone)"
        $sql = "INSERT INTO  users(user_name, user_password, user_email, user_address, user_phone) VALUES ('$username', '$userPassword', '$userEmail', '$userAddress', '$userPhone')";



        mysqli_multi_query($conn,$sql);
        header('Location: registrationSuccess.php');
        

    }


   
?>
