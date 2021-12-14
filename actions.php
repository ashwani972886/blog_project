<?php 

    include("functions.php");

    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
    
    if($_GET['action'] == "viewPost"){

        $query = "SELECT * FROM like_stats WHERE post_id = '".$_POST['post_id']."' AND mac = '".$_POST['macAddress']."' LIMIT 1";
        $result = mysqli_query($link, $query);
        // $check = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            
        } else {
            $query = "INSERT INTO like_stats (`mac`, `post_id`, `likes`)
            VALUES ('".mysqli_real_escape_string($link, $_POST['macAddress'])."',
                    '".mysqli_real_escape_string($link, $_POST['post_id'])."',
                    '".mysqli_real_escape_string($link, 0)."')";
            if(mysqli_query($link, $query)){
                
                $newViewCount = $_POST['current_views'] + 1;
                $query_up_view = "UPDATE posts SET Views = '".$newViewCount."' WHERE  `post_id` = '".$_POST['post_id']."' LIMIT 1";
                if(mysqli_query($link, $query_up_view)){
                    echo 1;
                }

            } else {
                echo "Error Occured";
            }
        }
        
    }   


    if($_GET['action'] == "makeLike"){
    
        $query = "SELECT * FROM like_stats WHERE post_id = '".$_POST['post_id']."' AND mac = '".$_POST['macAddress']."' LIMIT 1";
        $result = mysqli_query($link, $query);
        $check = mysqli_fetch_assoc($result);
        if($check['likes'] == 0){
            $updatesLike = "UPDATE `like_stats` SET likes = 1 WHERE post_id = '".$_POST['post_id']."' AND mac = '".$_POST['macAddress']."' LIMIT 1";

            $query_likes = "SELECT * FROM posts WHERE post_id = '".$_POST['post_id']."' LIMIT 1";
            $result_likes = mysqli_query($link, $query_likes);
            $check_likes = mysqli_fetch_assoc($result_likes);
            
            
            $newLikeCount = $check_likes['Likes'] + 1;
            
            $updateLikeCount = "UPDATE `posts` SET Likes = '".$newLikeCount."' WHERE `post_id` = '".$_POST['post_id']."' "; 
           
            if( mysqli_query($link, $updatesLike) && mysqli_query($link, $updateLikeCount)){
                echo $newLikeCount;
            }
            
            
        }

    }

    if($_GET['action'] == "makeDisLike"){
    
        $query = "SELECT * FROM like_stats WHERE post_id = '".$_POST['post_id']."' AND mac = '".$_POST['macAddress']."' LIMIT 1";
        $result = mysqli_query($link, $query);
        $check = mysqli_fetch_assoc($result);
        if($check['likes'] == 1){
            $updatesLike = "UPDATE `like_stats` SET likes = 0 WHERE post_id = '".$_POST['post_id']."' AND mac = '".$_POST['macAddress']."' LIMIT 1";


            $query_likes = "SELECT * FROM posts WHERE post_id = '".$_POST['post_id']."' LIMIT 1";
            $result_likes = mysqli_query($link, $query_likes);
            $check_likes = mysqli_fetch_assoc($result_likes);
            
            $newLikeCount = $check_likes['Likes'] - 1;
            
            $updateLikeCount = "UPDATE `posts` SET Likes = '".$newLikeCount."' WHERE `post_id` = '".$_POST['post_id']."' "; 
           
            if( mysqli_query($link, $updatesLike) && mysqli_query($link, $updateLikeCount)){
                echo $newLikeCount;
            }
            
            
        }

    }

    if($_GET['action'] == "viewerSignIn"){


        $query_check = "SELECT * FROM viewer_users where email = '".$_POST['user_email']."' LIMIT 1";
        $result_check = mysqli_query($link, $query_check);
        if(mysqli_num_rows($result_check) > 0){
            $check = mysqli_fetch_assoc($result_check);
            $_SESSION['userId'] = $check['id'];
            echo 1;
        } else {
            $query = "INSERT INTO viewer_users ( `name`, `email`)
                        VALUES ('".mysqli_real_escape_string($link, $_POST['user_name'])."',
                                    '". mysqli_real_escape_string($link, $_POST['user_email'])."')";

            if(mysqli_query($link, $query)){
                $_SESSION['userId'] = mysqli_insert_id($link);
                
                echo 1;

            }     
        }


    }

?>

