
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
                                    <option selected><?php if($draft['category'] != "") { echo $draft['category']; } else { echo "Category"; } ?></option>

                                    <option value="food_recipies">Food Recipes</option>
                                    <option value="fiction">Fiction</option>
                                    <option value="relationship">Relationship</option>
                                    <option value="travel">Travel</option>
                                    <option value="health_n_beauty">Health & Beauty</option>
                                    <option value="finance_n_money">Finance & Money</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <select name="getSubCategory" id="getSubCategory" class="form-control">
                                    <option selected><?php if($draft['sub_category'] != "") { echo $draft['sub_category']; } else { echo "Sub-Category"; }?></option>
                                    <option value="Technology">Technology</option>
                                    <option value="Historical Monuments">Historical Monuments</option>
                                    <option value="Health Tips">Health Tips</option>
                                    <option value="Seafood Recipes">Seafood Recipes</option>
                                    <option value="Lifestyle">Lifestyle</option>
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
                        <button name="publishBlog" class="btn btn-danger">
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

if(isset($_POST['publishBlog'])){
    draftpost($session_id,2);
    
}


?>
