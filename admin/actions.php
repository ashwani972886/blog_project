<?php

    include("functions.php");
    

    if($_GET['action'] == "signUp_admin"){
        
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'Email is not valid';

        } else if(!preg_match('/^[0-9]{10}+$/', $_POST['mobile'])) {
            echo 'Mobile Number should be 10 digit';

        } else if(!preg_match("#.*^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $_POST['password'])) {
            echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';

        } else {
            $query = "INSERT INTO blogger_users (`name`, `email`, `mobile`, `password`)
                        VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."',
                        '". mysqli_real_escape_string($link, $_POST['email'])."',
                        '". mysqli_real_escape_string($link, $_POST['mobile'])."',
                        '". mysqli_real_escape_string($link, $_POST['password'])."')";

            if(mysqli_query($link, $query)){
                $_SESSION['id'] = mysqli_insert_id($link);
                        
                $query = "UPDATE blogger_users SET password = '". md5(md5($_SESSION['id']).$_POST['password']) ."' WHERE id = ".$_SESSION['id']." LIMIT 1";
                
                if(mysqli_query($link, $query)){
                    
                    echo 1;

                }
                
            }     
                    
        }

    }

    if($_GET['action'] == "logIn_admin"){
    
        $query = "SELECT * FROM `blogger_users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($result);
            
            if ($row['password'] == md5(md5($row['id']).$_POST['password'])) {
                
                echo 1;
                
                $_SESSION['id'] = $row['id'];
                
            } else {
                echo "Enter correct username/password";
            }
    
    }

    if($_GET['action'] == "saveAsDraft"){
    
        
        echo $_POST['blogContent'];
    }
    

?>