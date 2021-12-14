<?php
    
    $MAC = exec('getmac');
    $MAC = strtok($MAC, ' ');
    echo "<script> localStorage.setItem('MacAddress','".$MAC."'); </script>";
    // echo "<script> console.log('".$MAC."'); </script>";
    
    $query = "SELECT * FROM posts WHERE `id` = '".$_GET['id']."' ";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    $splitDateTime = explode(" ",$row['date_time']);
    $date = $splitDateTime[0];
    $splitDate = explode("-",$date);

    $year = $splitDate[0];
    $month = $splitDate[1];
    $day = $splitDate[2];
            
    $monthName = date('M', mktime(0, 0, 0, $month, 10));

    $query_comment = "SELECT * FROM comments WHERE post_id = '".$_GET['id']."' ORDER BY id desc";
    $result_comment = mysqli_query($link, $query_comment);
    
    if($user_session_id){
        $userDataQuery = "SELECT * FROM viewer_users WHERE `viewer_id` = '".$user_session_id."' ";
        $resultUserData = mysqli_query($link, $userDataQuery);
        $userData = mysqli_fetch_assoc($resultUserData);
    
    }

?>
<!-- Single Post Section Begin -->
<section class="single-post spad">
        <div>
            <img style="height: 50vh; width: 70vw; margin-left: 15%; border: 2px solid #F4952F; border-radius: 30px;" src="admin/post_images/<?php echo $row['title_img']; ?>">
        </div>
        
        <div class="container">

        
            
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="single-post__title">
                        <div class="single-post__title__meta">
                            <h2><?php echo $day; ?></h2>
                            <span><?php echo $monthName; ?></span>
                        </div>
                        <div class="single-post__title__text">
                            <ul class="label">
                                <li><?php echo $row['category'] ?></li>
                                <li><?php echo $row['sub_category'] ?></li>
                            </ul>
                            <h4><?php echo $row['title']; ?></h4>
                            <ul class="widget">
                                <li>by <?php echo $row['user_name'] ?></li>
                                <li>
                                    <a href="#" id="isLike" onclick="makeDislike()"><i class="fa fa-heart"></i></a>
                                    <a href="#" id="isNotLike" onclick="makeLike()"><i class="fa fa-heart-o"></i></a>
                                    <span id="likesCount"><?php echo $row['Likes']; ?></span>
                                </li>
                                <a href="#comments"><li><?php echo mysqli_num_rows($result_comment); ?> Comment</li></a>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="single-post__social__item">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>

                    <?php
                        if($row['quote_s'] == "0"){
                    ?>
                        <div class="single-post__quote">
                            <p><?php echo $row['quote_desc'] ?></p>
                            <span><?php echo $row['quote_author'] ?></span>
                        </div>
                    <?php 
                        }
                    ?>

                    <div style="font-size: large;">
                        <?php echo $row['description'] ?>
                    </div>

                    <?php
                        if($row['quote_s'] == "1"){
                    ?>
                        <div class="single-post__quote">
                            <p><?php echo $row['quote_desc'] ?></p>
                            <span><?php echo $row['quote_author'] ?></span>
                        </div>
                    <?php 
                        }
                    ?>
                    <div class="single-post__tags">
                        <?php
                            $i = 0;
                            $get_tag = $row['tags'];
                            $tag = explode(',', $get_tag);
                            while($i < count($tag)){
                        ?>
                                <a href="#">
                                    <?php 
                                        
                                        echo $tag[$i];
                                    ?>
                                </a>
                        <?php
                                $i += 1;
                            }
                        ?>

                        
                    </div>
                    
                    <?php
                    
                        if($row['profile_s'] == "1"){

                    ?>
                        <div class="single-post__author__profile">
                            <div class="single-post__author__profile__pic">
                                <img src="../img/categories/single-post/author-profile.jpg" alt="">
                            </div>
                            <div class="single-post__author__profile__text">
                                <h4>Lena Mollein.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="single-post__author__profile__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php 

                        }

                        if($row['comment_s'] == "1"){
                                                
                    ?>

                        <div class="single-post__comment" id="comments">
                            <div class="widget__title">
                                <h4><?php echo mysqli_num_rows($result_comment); ?> Comment</h4>
                            </div>
                            <?php
                                if(mysqli_num_rows($result_comment) > 0){
                                    while($comments = mysqli_fetch_assoc($result_comment)){
                                        
                                        $splitDateTime = explode(" ",$comments['time']);
                                        $date = $splitDateTime[0];
                                        $splitDate = explode("-",$date);

                                        $year = $splitDate[0];
                                        $month = $splitDate[1];
                                        $day = $splitDate[2];
                                        $monthName = date('M', mktime(0, 0, 0, $month, 10));
                            ?>
                                        <div class="single-post__comment__item">
                                            <div class="single-post__comment__item__text">
                                                <h5><?php echo $comments['name']; ?></h5>
                                                <span><?php echo $day.' '.$monthName.' '.$year; ?></span>
                                                <p><?php echo $comments['comment']; ?></p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                            <?php

                                    }
                                }
                            ?>
                            <div class="single-post__comment__item single-post__comment__item--reply">
                            <div class="single-post__comment__item__pic">
                                    <img src="../img/categories/single-post/comment/comment-2.jpg" alt="">
                                </div>
                                <div class="single-post__comment__item__text">
                                    <h5>Brandon Kelley</h5>
                                    <span>15 Aug 2017</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="single-post__comment__item">
                                <div class="single-post__comment__item__pic">
                                    <img src="../img/categories/single-post/comment/comment-3.jpg" alt="">
                                </div>
                                <div class="single-post__comment__item__text">
                                    <h5>Brandon Kelley</h5>
                                    <span>15 Aug 2017</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>

                                <?php 
                                    if($user_session_id){
                                ?>
                                        <div>
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-11" style="margin-right: 0; padding: 0px;">
                                                        <input type="text" name="comment" class="form-control">
                                                    </div>
                                                    <div class="col-md-1" style="margin-left: 0; ">
                                                        <button name="sendComment" class="btn" style="padding: 0px;"><i class="fa fa-paper-plane" style="font-size: 30px;"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                <?php 
                                    } else {
                                ?>
                                        <div style="background-color: lemonchiffon;">
                                            <p class="text-center" style="font-size: 20px;">
                                                To comment, Please <a href="" data-toggle="modal" data-target="#signIn">Sign In</a>!
                                            </p>
                                        </div>
                                <?php
                                    }
                                    // echo $userData['name'];
                                ?>

                                
                            </div>
                        </div>

                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Single Post Section End -->

    <!-- Modal -->
    <div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register to Comment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                <!-- <form method="dialog">
                    <div>
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="nameViewer">
                    </div>
                    <div>
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="emailViewer">
                    </div>
                    
                </form> -->
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="regViewer" class="btn btn-primary" onclick="viewerSign()" >Sign In</button>
            </div>
        </div>
        </div>
    </div>

    <?php
    
    if(isset($_POST['sendComment'])){

        $date = date("Y-m-d H:i:s");

        $query = "INSERT INTO comments(`post_id`, `name`, `email`, `comment`, `time`) 
                    VALUES('".mysqli_real_escape_string($link,$_GET['id'])."',
                            '".mysqli_real_escape_string($link,$userData['name'])."',
                            '".mysqli_real_escape_string($link,$userData['email'])."',
                            '".mysqli_real_escape_string($link,$_POST['comment'])."',
                            '".mysqli_real_escape_string($link,$date)."') ";

            if(mysqli_query($link,$query)){
                echo "<script> window.location.assign('http://localhost/blog_project/?p=blogView&id=1#comments'); </script>";
            }
    }
    
    ?>

    <script>
        // console.log(<?php echo $user_session_id; ?>);
        // $("#isLike").hide();
        // $("#isNotLike").show();
        <?php 
                $query = "SELECT * FROM like_stats WHERE post_id = '".$row['post_id']."' AND mac = '".$MAC."' LIMIT 1";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) > 0){
                    $check = mysqli_fetch_assoc($result);
                    if($check['likes'] == 0){
                
        ?>  
                    $("#isLike").hide();
                    $("#isNotLike").show();
        <?php 
                } else {
        ?>
                    $("#isLike").show();
                    $("#isNotLike").hide();
        <?php 
                }
            } else {
        ?>
                $("#isLike").hide();
                $("#isNotLike").show();
                view();
        <?php
            }
        ?>

        function view(){
            $.ajax({
                type: "POST",
                url: "actions.php?action=viewPost",
                data: "macAddress=" + "<?php echo $MAC; ?>" + "&post_id=" + "<?php echo $row['post_id']; ?>" + "&current_views=" + "<?php echo $row['Views']; ?>",
                success: function(result1){
                    if(result1 == 1){
                        console.log("Page Viewed");
                    } 
                }
            })
        }

        function makeLike(){
            $.ajax({
                type: "POST",
                url: "actions.php?action=makeLike",
                data:  "post_id=" + "<?php echo $row['post_id'] ?>" 
                            + "&macAddress=" + "<?php echo $MAC; ?>",
                success: function(result) {
                    
                    $("#isLike").show();
                    $("#isNotLike").hide();
                    document.getElementById('likesCount').innerHTML = result;
                    
                }
        
            });
        };

        function makeDislike(){
            $.ajax({
                type: "POST",
                url: "actions.php?action=makeDisLike",
                data:  "post_id=" + "<?php echo $row['post_id'] ?>" 
                            + "&macAddress=" + "<?php echo $MAC; ?>",
                success: function(result) {
                    
                    $("#isLike").hide();
                    $("#isNotLike").show();
                    document.getElementById('likesCount').innerHTML = result;
                    
                }
        
            });
        };

        function viewerSign(){
            if($("#nameViewer").val() == ""){
                alert("Please Enter your name");
            } else if($("#emailViewer").val() == ""){
                alert("Please Enter your email");
            } else {
                $.ajax({
                    type: "POST",
                    url: "actions.php?action=viewerSignIn",
                    data:  "user_name=" + $("#nameViewer").val() + "&user_email=" + $("#emailViewer").val(),
                    success: function(result) {
                        console.log(result);
                        // if(result == 1){
                            // window.location.reload('http://localhost/blog_project/?p=blogView&id=1#comments');
                        // } else {
                        //     alert("Hello!");
                        // }
                        
                    }
            
                });
            }
            
        }
        

    </script>