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

    $query_comment = "SELECT * FROM comments WHERE post_id = '".$row['post_id']."' ORDER BY id desc";
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
                                
                                <div style="border: 1px solid gray; border-radius: 10px; padding:25px; ">
                                    <div style="border-bottom: 1px solid black; overflow-y: scroll; height: 300px;">
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
                                            <div class="single-post__comment__item card" style="background-color: rgb(206, 205, 205)">
                                                <div class="single-post__comment__item__text ">
                                                    <h4><b><?php echo $comments['name']; ?></b></h4>
                                                    <span><?php echo $day.' '.$monthName.' '.$year; ?></span>
                                                    <p><?php echo $comments['comment']; ?></p>
                                                    <ul>
                                                        <!-- <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                            <?php

                                    }
                                }
                            ?>
                            
                                </div>
                            
                            
                                <div>

                                <?php 
                                    if($user_session_id){
                                ?>
                                        <hr>
                                        <div style=" margin-top: 10px;">
                                            
                                            <div class="row" style="margin-left:5px;">
                                                <div class="col-md-11" style="margin-right: 0; padding: 0px;">
                                                    <input type="text"  id="post_comment" class="form-control">
                                                </div>
                                                <div class="col-md-1" style="margin-left: 0; ">
                                                    <button  onclick="sendComment()" class="btn" style="padding: 0px;"><i class="fa fa-paper-plane" style="font-size: 30px;"></i></button>
                                                </div>
                                            </div>
                                            
                                </div>
                                <?php 
                                    } else {
                                ?>
                                        <div style="background-color: lemonchiffon; margin-top: 10px;">
                                            <p class="text-center" style="font-size: 20px;">
                                                To comment, Please <a href="" data-toggle="modal" data-target="#signIn">Sign In</a>!
                                            </p>
                                        </div>
                                    <?php
                                        }
                                    ?>

                                    </div>
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
                
            </div>
            
        </div>
        </div>
    </div>

    

    <script>
        
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
            });
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

        <?php 
        
            if($user_session_id){
        ?>

                function sendComment(){
                    $.ajax({
                        type: "POST",
                        url: "actions.php?action=sendComment",
                        data:  "post_id=" + "<?php echo $row['post_id']; ?>" + "&name=" + "<?php echo $userData['name']; ?>"
                                    + "&email=" + "<?php echo $userData['email']; ?>" + "&comment=" + $("#post_comment").val(),
                        success: function(result) {
                        
                            if(result ==1){
                                window.location.reload('http://localhost/blog_project/?p=blogView&id='+<?php echo $_GET['id']; ?>+'#comments');
                            } else{
                                alert("Not posted! Please try again!");
                                // alert(result);
                            }
                            
                            
                            
                        }
                
                    });
                };
        

        <?php 
            }

        ?>
        

        

    </script>