<?php
    $query_posts = "SELECT * FROM `posts` WHERE `user_id` = '".$user['user_id']."' ORDER BY id DESC";

    $result_posts = mysqli_query($link, $query_posts);
?>
<div class="row">
  <div class="col-md-4">
    <div class="card" style="overflow-y: scroll; height: 420px; padding: 10px;">

    <?php 

    if(mysqli_num_rows($result_posts) > 0 ){
      while($posts = mysqli_fetch_assoc($result_posts)){
        // $num_postId = $posts['post_id'];
        // $num_postId = explode("_","$num_postId");
        // $num_postId = $num_postId[0];
          $time = calculate_order_date($posts['date_time']);
    ?>
    <form method="POST">
      <div style="padding: 10px;" id="show_comment" class="card" name="comment" onclick="displayComment('<?php echo $posts['post_id']; ?>','<?php echo $posts['title']; ?>', '<?php echo $posts['Likes']; ?>', <?php echo $posts['Comments']; ?>);" value="<?php echo $posts['post_id']; ?>">
        <div class="custom_card_header">
          <h6 style="float:right"><?php echo $time; ?></h6>
          <h6><b><?php echo $posts['post_id']; ?> </b></h6>
          <hr>
        </div>
        <div class="custom_card_body_order">
          <h5><b><?php echo $posts['title']; ?> </b></h5>
          <!-- <button type="submit" name="comment" style="float: right; border: none; background-color: white;">Comments</button> -->
          <br>
          <hr>
        </div>
      </div>
    </form>
      <br>
    <?php 
          }
        }
    ?>
    </div>

  </div>
  

  <!-- ----------------------------------- div 1 imp he ------------------------------------- -->
  <div class="col-md-8">
        <div class="card" style="overflow-y: scroll; height: 420px;">
          <div class="col-md-11 d-flex align-items-center" style="margin:auto; width: 100%; margin-top: 5px;">
            <div class="card" id="post_view" style="width: 100%;">
              <div class="text-center">
                <i class="fa fa-hand-point-left" style="font-size: 50px;"></i>
                <h1>Please Select Any Post First!</h1>
               
              </div>
            </div>

          </div>
        </div>
      </div>
  <!-- ----------------------------------- div 1 imp he ------------------------------------- -->
  <!-- ----------------------------------- div 2 imp he ------------------------------------- -->


  <!-- <div class="col-md-8">
    <div class="card" style="overflow-y: scroll; height: 600px;">
      <div class="col-md-11 " style="margin:auto; width: 100%; margin-top: 10px;">
        <div style="width: 100%;">
          <div class="custom_card_header text-center">
            <h6 style="float:right"> </h6>
            <h5><b>hjghjfhg</b></h5>

          </div>
          <hr>
          <div class="custom_card_header text-center">
            <h6 style="float:right"> </h6>
            <h5><b>All Messages </b></h5>

          </div>
          <hr>
          <div class="card">
            <div class="card-body">
              <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
              </h5>
              <h5 class="card-title">PRIYA KUMARI</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                <i style="font-size: 20px;" class="fas fa-thumbs-up"></i>
                <span>100</span>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill=" yellow" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                <i style="font-size: 20px;" class="fas fa-comment"></i>
                <span>100</span>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                <i style="font-size: 20px;" class="fas fa-share"></i>
                <i style="font-size: 20px;" class="fas fa-reply"></i>
              </svg>
              <a href="#" class="btn btn-primary">Add your comments</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
