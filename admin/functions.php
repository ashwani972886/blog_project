<?php
    date_default_timezone_set('Asia/Kolkata');
    session_start();

    $page = isset($_GET['p']) ? $_GET['p'] : '';
    $function = isset($_GET['function']) ? $_GET['function'] : '';
    $session_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';


    $link = mysqli_connect("localhost", "root", "", "blog_db");
    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");

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
    
    $link = mysqli_connect("localhost", "root", "", "blog_db");
    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
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
            echo "<script> window.location.assign('http://localhost/blog_project/admin/?p=new_post&draft=".$draft_id."'); </script>";
        } else {
            post_blog($_GET['draft']);
            echo "<script> window.location.assign('http://localhost/blog_project/admin/?p=post_li'); </script>";
        }

    } 
  
}

function post_blog($draft_id){
    $link = mysqli_connect("localhost", "root", "", "blog_db");
    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
    date_default_timezone_set('Asia/Kolkata');

    $date = date("Y-m-d H:i:s");
    if($_POST['tagsInput'] != ""){
        $tags = explode(",",$_POST['tagsInput']);
    }
    

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
                if($_POST['tagsInput'] != ""){
                    while($i < count($tags)){
                        $tags_query = "INSERT INTO tags (`tags`)
                                    VALUES ('". mysqli_real_escape_string($link, $tags[$i])."')";

                        mysqli_query($link, $tags_query);
                        $i = $i+1;
                    } 
                }
                echo "<script> alert('Post Published!'); </script>";
            }
            
        }
    }
}

function stringShorten($description, $id, $isDraft){
    $str = strip_tags($description);
        if(strlen($str) > 500){
          $strCut = substr($str, 0, 500);
          $strEnd = strrpos($strCut, ' ');
          $str = $strEnd? substr($strCut, 0, $strEnd) : substr($strCut, 0);
          if($isDraft ==1){
            $str .= "...<a href='../preview/?draft=".$id."' target='_blank'>Read More</a>";
          } else {
            $str .= "...<a href='../?p=blogView&id=".$id."' target='_blank'>Read More</a>";
          }
          
          return $str;
        }
}
function get_timeago( $time ) {
    date_default_timezone_set('Asia/Kolkata');
    $estimate_time = time() - $time;

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $condition = array(
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}

function deleteData($id, $image, $isDraft){
    $link = mysqli_connect("localhost", "root", "", "blog_db");

    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");
    date_default_timezone_set('Asia/Kolkata');

    if($isDraft == 1){
        $query = "DELETE FROM `post_draft` WHERE id = '".$id."'";
    } else {
        $query = "DELETE FROM `posts` WHERE id = '".$id."'";
    }
    
    if(mysqli_query($link, $query)) {
        unlink("post_images/".$image);

        echo "<script> alert('Deleted succesfully!'); </script>";

        echo "<script> window.location.assign('http://localhost/blog_project/admin/?p=post_li'); </script>";
    }
}

function calculate_order_date($date_time){
    $a = date('h:i a', strtotime($date_time));
    $splitDateTime = explode(" ",$date_time);
    $date = $splitDateTime[0];
    $splitDate = explode("-",$date);

    $year = $splitDate[0];
    $month = $splitDate[1];
    $day = $splitDate[2];
           
    $monthName = date('M', mktime(0, 0, 0, $month, 10));
    
    return $monthName." ".$day.", ".$a;
}

?>