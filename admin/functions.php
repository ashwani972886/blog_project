<?php
    date_default_timezone_set('Asia/Kolkata');
    session_start();

    $page = isset($_GET['p']) ? $_GET['p'] : '';
    $function = isset($_GET['function']) ? $_GET['function'] : '';
    $session_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';


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


?>