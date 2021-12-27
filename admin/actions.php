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
            $query = "INSERT INTO blogger_users (`first_name`, `last_name`, `email`, `mobile`, `password`)
                        VALUES ('".mysqli_real_escape_string($link, $_POST['first_name'])."',
                        '".mysqli_real_escape_string($link, $_POST['last_name'])."',
                        '". mysqli_real_escape_string($link, $_POST['email'])."',
                        '". mysqli_real_escape_string($link, $_POST['mobile'])."',
                        '". mysqli_real_escape_string($link, $_POST['password'])."')";

            if(mysqli_query($link, $query)){
                $_SESSION['id'] = mysqli_insert_id($link);
                        
                $query = "UPDATE blogger_users SET password = '". md5(md5($_SESSION['id']).$_POST['password']) ."', user_id = '".$_POST['first_name'].'_'.$_SESSION['id']."' WHERE id = ".$_SESSION['id']." LIMIT 1";
                
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

    if($_GET['action'] == "save_new_draftId"){

        $select_draft = "SELECT * FROM `post_draft` WHERE `user_id` = '".mysqli_real_escape_string($link, $user['user_id'])."' ";

        $result = mysqli_query($link,$select_draft);

            if(mysqli_num_rows($result)>0){

                $emptyDraft = 0;
                while( $draft = mysqli_fetch_assoc($result) ){
                    
                    
                    if($draft['post_id'] == ""){
                        echo $draft['id'];
                        $emptyDraft = 1;
                        break;
                    } else {
                        continue;
                    }
                
                }

                if($emptyDraft == 0){
                    $userName = $user['first_name']." ".$user['last_name'];
                    $query = "INSERT INTO post_draft (`user_id`, `user_name`)
                    VALUES ('".mysqli_real_escape_string($link, $user['user_id'])."',
                            '".mysqli_real_escape_string($link, $userName)."')";
    
                    if(mysqli_query($link, $query)){
                        $draft_id = mysqli_insert_id($link);
                        echo $draft_id;
                    }
                }

            } else {
                $userName = $user['first_name']." ".$user['last_name'];
                $query = "INSERT INTO post_draft (`user_id`, `user_name`)
                VALUES ('".mysqli_real_escape_string($link, $user['user_id'])."',
                        '".mysqli_real_escape_string($link, $userName)."')";

                if(mysqli_query($link, $query)){
                    $draft_id = mysqli_insert_id($link);
                    echo $draft_id;
                }
                
            }
    
    }
    
    if($_GET['action'] == "commentDetail"){
    
        $query_comment = "SELECT * FROM comments WHERE post_id = '".mysqli_real_escape_string($link, $_POST['post_id'])."' ORDER BY id DESC";
        $result_comment = mysqli_query($link, $query_comment);

        $row = mysqli_fetch_assoc($result_comment);
        echo json_encode($row);       
        
    
    }
?>