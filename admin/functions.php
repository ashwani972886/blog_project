<?php
    date_default_timezone_set('Asia/Kolkata');
    session_start();

    $page = isset($_GET['p']) ? $_GET['p'] : '';
    $function = isset($_GET['function']) ? $_GET['function'] : '';
    $session_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';


    // $link = mysqli_connect("localhost", "root", "", "blog_db");
    $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");

    if (mysqli_connect_errno()) {
        
        print_r(mysqli_connect_error());
        exit();
        
    }
    
    if ($function == "logout_admin") {
        
        session_unset();
        header("Location: http://localhost/blog_project/admin");
        exit();
        
    }
    

?>
<?php

if($session_id){
        
    $query = "SELECT * FROM blogger_users WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    $user = mysqli_fetch_assoc($result);
}


function draftpost($session_id, $isPreview){
    
    // $link = mysqli_connect("localhost", "root", "", "blog_db");
    $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
    date_default_timezone_set('Asia/Kolkata');

    $date = date("Y-m-d H:i:s");

    $query = "SELECT * FROM blogger_users WHERE `id` = '".$session_id."' ";

    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    $post_id = $_GET['draft']."_post";

    // Get file location
    $fileloc = $_FILES['title_img']['tmp_name'];

    // Get Original File Name
    $filenameorg = $_FILES['title_img']['name'];
    
    // file extension
    $file_extension = pathinfo($filenameorg, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    // Modified File Name
    $filename = $post_id.".".$file_extension;

    // File Location store
    $filestore = "post_images/".$filename;
    move_uploaded_file($fileloc, $filestore);

    $query = "UPDATE `post_draft` SET title_img = '". mysqli_real_escape_string($link, $filename)."',
                                        title = '". mysqli_real_escape_string($link, $_POST['title'])."',
                                        category = '". mysqli_real_escape_string($link, $_POST['getCategory'])."',
                                        sub_category = '". mysqli_real_escape_string($link, $_POST['getSubCategory'])."',
                                        description = '". mysqli_real_escape_string($link, $_POST['editor1'])."',
                                        quote_desc = '". mysqli_real_escape_string($link, $_POST['quote'])."',
                                        quote_author = '". mysqli_real_escape_string($link, $_POST['quote_author'])."',
                                        tags = '". mysqli_real_escape_string($link, $_POST['tagsInput'])."',
                                        quote_s = '". mysqli_real_escape_string($link, $_POST['quote_settings'])."',
                                        profile_s = '". mysqli_real_escape_string($link, $_POST['profile_settings'])."',
                                        comment_s = '". mysqli_real_escape_string($link, $_POST['comment_settings'])."',
                                        date_time = '". mysqli_real_escape_string($link, $date)."'
                                        WHERE `id` = '".$_GET['draft']."' ";
    
    if(mysqli_query($link, $query)){

        $draft_id = $_GET['draft'];
        $post_id = $draft_id."_post";

        $update_postID = "UPDATE `post_draft` SET `post_id` = '".mysqli_real_escape_string($link, $post_id)."' WHERE id = ".$draft_id." LIMIT 1";

        mysqli_query($link, $update_postID);
        

        if($isPreview == 0){
            echo "<script> alert('Draft Saved'); </script>";
            echo "<script> window.location.assign('http://localhost/blog_project/admin/?p=new_post&draft=".$draft_id."'); </script>";
            
        } else if($isPreview == 1){
            echo "<script> window.open('http://localhost/blog_project/preview/?draft=".$draft_id."','_blank'); </script>";
        } else {
            post_blog($_GET['draft']);
        }

    } 
  
}

function post_blog($draft_id){
    // $link = mysqli_connect("localhost", "root", "", "blog_db");
    $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
    date_default_timezone_set('Asia/Kolkata');

    $date = date("Y-m-d H:i:s");
    $tags = explode(",",$_POST['tagsInput']);

    $query = "INSERT INTO `posts` (post_id, user_id, user_name, title_img, title, category, sub_category, description, quote_desc, quote_author, tags, quote_s, profile_s, comment_s)
                SELECT post_id, user_id, user_name, title_img, title, category, sub_category, description, quote_desc, quote_author, tags, quote_s, profile_s, comment_s
                FROM `post_draft` WHERE `id` = '".$draft_id."' ";
    if(mysqli_query($link, $query)){
        $recent = mysqli_insert_id($link);
        $query1 = "UPDATE `posts` SET date_time = '".mysqli_real_escape_string($link, $date)."' WHERE `id` = '".$recent."'";
        if(mysqli_query($link, $query1)){
            $delete_draft = "DELETE FROM `post_draft` WHERE `id` = '".$draft_id."'";
            if(mysqli_query($link, $delete_draft)) {
                $i = 0;
    
                while($i < count($tags)){
                    $tags_query = "INSERT INTO tags (`tags`)
                                VALUES ('". mysqli_real_escape_string($link, $tags[$i])."')";

                    mysqli_query($link, $tags_query);
                    $i = $i+1;
                } 
                echo "<script> alert('Post Published!'); </script>";
            }
            
        }
    }
}

?>