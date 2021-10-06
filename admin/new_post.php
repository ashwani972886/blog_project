
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
                <a href="http://localhost/blog_project/preview" class="noLineHref"><button class="btn btn-info" style="font-size: 24px; width: 150px;">Preview</button></a>
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
                
                <form class="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <label for="image-input">
                                <img id="prod_Image" src="assets/images/click_to_upload1.png" alt="" width="100%" style="max-height: 250px;">
                            </label>
                            <input type="file" id="image-input" name="prod_img" accept=".png" hidden onchange="readURL(this);">
                            <br>
                            <!-- <a href="" ><u> Add more Images</u></a> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <textarea name="title" id="title" placeholder="New Blog Title" class="form-control" style="font-size: 20px; min-height: 130px;"></textarea>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <select name="getCategory" id="getCategory" class="form-control">
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
                            <textarea name="editor1" id="editor1" ></textarea>
                                
                               

                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input name="title" id="title" placeholder="Quote Description" class="form-control">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input name="title" id="title" placeholder="Quote Author" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <!-- <label for="title" class=""><h3>Title</h3></label> -->
                                <input type="text" name="tagsInput" class="form-control" data-role="tagsinput" value="" placeholder="Tags">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title text-muted">Settings:</h5>
                <div class="form-control" style="height: auto;">
                    <label for="quote" class="text-muted">Quote:</label>
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px; "> Show before Blog
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px;"> Show after Blog
                      
                </div>    
                <br>
                <div class="form-control" style="height: auto;">
                    <label for="profile" class="text-muted">Profile:</label>
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px; "> Show your profile along with the blog
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px;"> Do not show your profile along with the blog
                      
                </div>
                <br>
                <div class="form-control" style="height: auto;">
                    <label for="profile" class="text-muted">Comments:</label>
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px; "> Enable Comments
                        <input type="radio" name="quote" style="position:relative; left:10px; margin-right: 10px;"> Disable Comments
                      
                </div>
                
            </div>
        </div>
    </div>
    



    <!-- <form method="POST">
        <textarea name="editor1" id="editor1"></textarea>

        <button name="button">Click ME</button>
    </form>
    <script>
            CKEDITOR.replace( 'editor1' );
            
    </script> -->


</div>
<!-- New Blog End -->

<!-- Footer Start -->
<div class="app-wrapper-footer fixed-footer">
    <div class="app-footer ">
        <div class="app-footer__inner ">
            <div class="app-footer-left">
                <ul class="nav">
                    <li class="nav-item">
                        <button class="btn btn-warning">
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

if(isset($_POST['button'])){
    echo $_POST['tagsInput'];
}


?>
