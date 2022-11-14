<?php

include "../connection.php";
include "../mail/mail.php";
include "../config.php";


if (isset($_POST['RegisterForm'])) {

    // storing values of form 
    $username =  $_POST['RUsername'];
    $email =  $_POST['REmail'];
    $password =  $_POST['RPassword'];

    $userFlag = usernameCheck($username);
    $emailFlag = emailCheck($email);
    $passFlag = passwordCheck($password);

    if($userFlag == 0 && $emailFlag == 0 && $passFlag == 0){

        // if password match then convert password to md5 hash
        $password = md5($password);

        // Generating Verification Key
        $vkey = md5(time() . $username);

        $query = "INSERT INTO accounts(username,  password,  email, vkey) VALUES ('$username', '$password', '$email','$vkey')";
        $result =  mysqli_query($conn, $query) or die(mysqli_error($conn));

        $subject = "Account Verification Mail From ".STORE_NAME;
        $messsage = "Thank You ! for creating account in ".STORE_NAME.". Please click on";
        $action = "Verify Account";
        $flag = "activate";

        VerificationMail($email, $subject, $messsage, $action, $vkey, $flag);

        echo "1";

        // echo $userFlag.$emailFlag.$passFlag;
        


    }


}






if (isset($_POST['username'])) {

    echo usernameCheck($_POST['username']);
}

if (isset($_POST['Email'])) {
    echo emailCheck($_POST['Email']);
}



function usernameCheck($Parsedusername)
{

    $username =  $Parsedusername;


    if (!empty($username)) {

        if (!preg_match_all('/^[A-Za-z][A-Za-z0-9]{4,31}$/', $username)) {

            // if username format is invalid then show error
            return "username 5 charaters long with letters and numbers";
        } else {

            $query = "SELECT username FROM accounts WHERE username='$username'";
            $result = mysqli_query($GLOBALS['conn'], $query) or die(mysqli_error($GLOBALS['conn']));
            if (mysqli_num_rows($result) > 0) {

                return "* username already exist";
            } else {
                return 0;
            }

        }
    } else {
        return "username cannot empty";
    }
}

function emailCheck($Parsedemail)
{

    $email =  $Parsedemail;

    if (!empty($email)) {

        // checking email format 
        if (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)) {

          // if email format is invalid then show error
          return "* Invalid email format";
        }
        else{

            $query = "SELECT email FROM accounts WHERE email='$email'";
        
            $result = mysqli_query($GLOBALS['conn'], $query) or die(mysqli_error($GLOBALS['conn']));
            if (mysqli_num_rows($result) > 0) {
        
                return "* email already exist";
            } else {
                return 0;
            }
        }
    }
    else {
        return "email cannot empty";
    }
    

}

function passwordCheck($password){
    if (!empty($password)) {

        // checking password match the conditions or not
        if (!preg_match_all('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m', $password)) {

          // if password not match condition display error
          return "enter strong password";
        }
        else{
            return 0;
        }
    
    }
    else{
        return "password can not empty";
    }
}