
<?php

    $query = "SELECT * FROM post_draft WHERE id = '".$_GET['draft']."'";
    $result = mysqli_query($link, $query);
    $draft = mysqli_fetch_assoc($result);
?>

<form method="POST" enctype="multipart/form-data" >
<!-- Header start -->
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <!-- <div class="page-title-icon">
                
                <i class="icon-gradient bg-happy-itmeo fa fa-list-alt" aria-hidden="true"></i>
            </div> -->
            <div>
               BLOGS
                <div class="page-title-subheading">Add new blog to your profile!</div>
            </div>
        </div>
        <!-- Generator -->
        <div class="page-title-actions">
            <div class="position-relative form-group">
                <button class="btn btn-info" name="preview" type="submit" target="_blank" value="preview" style="font-size: 24px; width: 150px;">Preview</button>
            </div>
        </div>

    </div>
</div>

<!-- Header End -->

<!-- New Blog start -->
<div class="tab-content" style="margin-bottom: 100px;">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">New Blog</h5>
                
                <!-- <form class="" method="POST" enctype="multipart/form-data"> -->
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <label for="title_img">
                                <img id="prod_Image" src="assets/images/click_to_upload1.png" alt="" width="100%" style="max-height: 250px;">
                            </label>
                            <input type="file" id="title_img" name="title_img" accept=".png" hidden onchange="readURL(this);">
                            <br>
                            <!-- <a href="" ><u> Add more Images</u></a> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <textarea name="title" id="title" placeholder="New Blog Title"  class="form-control" style="font-size: 20px; min-height: 130px;"><?php echo $draft['title']; ?></textarea>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <select name="getCategory" id="getCategory" class="form-control">
                                    <option selected><?php if($draft['category'] != "") { echo $draft['category']; } ?></option>
                                    <option value="Food Recipes">Food Recipes</option>
                                    <option value="Fiction">Fiction</option>
                                    <option value="Relationship">Relationship</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Health & Beauty">Health & Beauty</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <select name="getSubCategory" id="getSubCategory" class="form-control">
                                    <option selected><?php if($draft['sub_category'] != "") { echo $draft['sub_category']; } ?></option>
                                    <option value="Technology">Technology</option>
                                    <option value="Historical Monuments">Historical Monuments</option>
                                    <option value="Health Tips">Health Tips</option>
                                    <option value="Seafood Recipes">Seafood Recipes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12" style="margin-bottom: 1rem;">
                            <textarea name="editor1" id="editor1" ><?php echo $draft['description']; ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input name="quote" id="quote" placeholder="Quote Description" class="form-control" value="<?php echo $draft['quote_desc']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input name="quote_author" id="quote_author" placeholder="Quote Author" class="form-control" value="<?php echo $draft['quote_author']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input type="text" name="tagsInput" id="tagsInput" class="form-control" data-role="tagsinput" value="<?php echo $draft['tags'];  ?>" placeholder="Tags">
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title text-muted">Settings:</h5>
                <div class="form-control" style="height: auto;">
                    <label for="quote" class="text-muted">Quote:</label>
                    <?php 
                        if($draft['quote_s'] != "" && $draft['quote_s'] == 0){
                    ?>
                        <input type="radio" name="quote_settings" id="quote_settings" value="0" style="position:relative; left:10px; margin-right: 10px; " checked> Show before Blog
                        <input type="radio" name="quote_settings" id="quote_settings" value="1" style="position:relative; left:10px; margin-right: 10px;"> Show after Blog
                    <?php
                        } elseif($draft['quote_s'] != "" && $draft['quote_s'] == 1) {
                    ?>
                        <input type="radio" name="quote_settings" id="quote_settings" value="0" style="position:relative; left:10px; margin-right: 10px; "> Show before Blog
                        <input type="radio" name="quote_settings" id="quote_settings" value="1" style="position:relative; left:10px; margin-right: 10px;" checked> Show after Blog
                    <?php
                        } else {
                    ?>
                        <input type="radio" name="quote_settings" id="quote_settings" value="0" style="position:relative; left:10px; margin-right: 10px; "> Show before Blog
                        <input type="radio" name="quote_settings" id="quote_settings" value="1" style="position:relative; left:10px; margin-right: 10px;"> Show after Blog
                    <?php
                        }
                    ?> 
                </div>    
                <br>
                <div class="form-control" style="height: auto;">
                    <label for="profile" class="text-muted">Profile:</label>
                    <?php 
                        if($draft['profile_s'] != "" && $draft['profile_s'] == 0){
                    ?>
                        <input type="radio" name="profile_settings" id="profile_settings" value="1" style="position:relative; left:10px; margin-right: 10px; " > Show your profile along with the blog
                        <input type="radio" name="profile_settings" id="profile_settings" value="0" style="position:relative; left:10px; margin-right: 10px;" checked> Do not show your profile along with the blog
                    <?php
                        } elseif($draft['profile_s'] != "" && $draft['profile_s'] == 1) {
                    ?>
                        <input type="radio" name="profile_settings" id="profile_settings" value="1" style="position:relative; left:10px; margin-right: 10px; " checked> Show your profile along with the blog
                        <input type="radio" name="profile_settings" id="profile_settings" value="0" style="position:relative; left:10px; margin-right: 10px;"> Do not show your profile along with the blogr Blog
                    <?php
                        } else {
                    ?>
                        <input type="radio" name="profile_settings" id="profile_settings" value="1" style="position:relative; left:10px; margin-right: 10px; " > Show your profile along with the blog
                        <input type="radio" name="profile_settings" id="profile_settings" value="0" style="position:relative; left:10px; margin-right: 10px;"> Do not show your profile along with the blog
                    <?php
                        }
                    ?>  
                </div>
                <br>
                <div class="form-control" style="height: auto;">
                    <label for="profile" class="text-muted">Comments:</label>
                    <?php 
                        if($draft['comment_s'] != "" && $draft['comment_s'] == 0){
                    ?>
                        <input type="radio" name="comment_settings" id="comment_settings" value="1" style="position:relative; left:10px; margin-right: 10px; "> Enable Comments
                        <input type="radio" name="comment_settings" id="comment_settings" value="0" style="position:relative; left:10px; margin-right: 10px;" checked> Disable Comments
                        <?php
                        } elseif($draft['comment_s'] != "" && $draft['comment_s'] == 1) {
                    ?>
                        <input type="radio" name="comment_settings" id="comment_settings" value="1" style="position:relative; left:10px; margin-right: 10px; " checked> Enable Comments
                        <input type="radio" name="comment_settings" id="comment_settings" value="0" style="position:relative; left:10px; margin-right: 10px;"> Disable Commentsr Blog
                    <?php
                        } else {
                    ?>
                        <input type="radio" name="comment_settings" id="comment_settings" value="1" style="position:relative; left:10px; margin-right: 10px; "> Enable Comments
                        <input type="radio" name="comment_settings" id="comment_settings" value="0" style="position:relative; left:10px; margin-right: 10px;"> Disable Comments
                    <?php
                        }
                    ?> 
                </div>
                
            </div>
        </div>
    </div>

</div>
<!-- New Blog End -->

<!-- Footer Start -->
<div class="app-wrapper-footer fixed-footer">
    <div class="app-footer ">
        <div class="app-footer__inner ">
            <div class="app-footer-left">
                <ul class="nav">
                    <li class="nav-item">
                        <button name="saveDraft" type="submit" class="btn btn-warning" onclick="saveDraft()">
                            Save as Draft
                        </button>
                    </li>
                </ul>
            </div>
            
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <button class="btn btn-danger">
                            Publish
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> 
<!-- Footer end -->

</form>

<script>
    CKEDITOR.replace( 'editor1' );
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#prod_Image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    
</script>

<?php

if(isset($_POST['preview'])){
    // echo "<script> window.location.assign('http://localhost/blog_project/preview'); </script>";
    $isPreview = 1;
    draftpost($session_id, $isPreview);
}



if(isset($_POST['saveDraft'])){
    $isPreview = 0;
    draftpost($session_id, $isPreview);
}

function draftpost($session_id, $isPreview){
    $link = mysqli_connect("localhost", "root", "", "blog_db");

    $date = date("Y-m-d H:i:s");


    $tags = explode(",",$_POST['tagsInput']);

    
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

            // $i = 0;
    
            // while($i < count($tags)){
            //     $tags_query = "INSERT INTO tags (`post_id`, `tags`)
            //                 VALUES ('".mysqli_real_escape_string($link, $post_id)."',
            //                             '". mysqli_real_escape_string($link, $tags[$i])."')";

            //     mysqli_query($link, $tags_query);
            //     $i = $i+1;
            // } 

            echo "<script> alert('Draft Saved'); </script>";

            if($isPreview == 0){
                echo "<script> window.location.assign('http://localhost/blog_project/admin/?p=new_post&draft=".$draft_id."'); </script>";
                
            } else {
                echo "<script> window.location.assign('http://localhost/blog_project/preview/?draft=".$draft_id."'); </script>";
            }

        } 

    
}


?>
