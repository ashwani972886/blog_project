<div class="row">

    <?php 

        $query_posts = "SELECT * FROM posts WHERE `user_id` = '".$user['user_id']."' ORDER BY id DESC";
        $result_posts = mysqli_query($link, $query_posts);
        if(mysqli_num_rows($result_posts) > 0 ){
            while($posts = mysqli_fetch_assoc($result_posts)){
    ?>

        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Month', 'Views', 'Likes', 'Comment', 'Share'],
                ['Jan',  <?php echo $posts['id'] ?> , 3, 2, 5],
                ['Feb',  0, 5, 6, 8]
            
                ]);

                var options = {
                title: 'Post Trend',
                curveType: 'function',
                legend: { position: 'bottom' }
                };

                var stat_1 = new google.visualization.LineChart(document.getElementById('<?php echo $posts['post_id']; ?>'));
                

                stat_1.draw(data, options);
            }

        </script>

        
            <div class="col-md-6">
                <div class="mb-3 card card-body"><h5 class="card-title"><?php echo $posts['title']; ?></h5>
                    
                    <div class="row">
                        <div class="col-md-3" style="border: 1px solid gray; font-size: 14px; ">
                            Views <br><span style="float: right; font-size: 20px; font-weight: bold;"><?php echo $posts['Views']; ?></span>
                        </div>
                        <div class="col-md-3" style="border: 1px solid gray; font-size: 14px;">
                            Like <br><span style="float: right; font-size: 20px; font-weight: bold;"><?php echo $posts['Likes']; ?></span>
                        </div>
                        <div class="col-md-3" style="border: 1px solid gray; font-size: 14px;">
                            Comments <br><span style="float: right; font-size: 20px; font-weight: bold;"><?php echo $posts['Comments']; ?></span>
                        </div>
                        <div class="col-md-3" style="border: 1px solid gray; font-size: 14px;">
                            Share <br><span style="float: right; font-size: 20px; font-weight: bold;"><?php echo $posts['Shares']; ?></span>
                        </div>
                    </div>

                    <div class="col-md-12">
            
                        <div id="<?php echo $posts['post_id']; ?>" ></div>
                            
                    </div>    
                    <br>
                    <button class="btn btn-primary">Go somewhere</button>
                </div>
            </div>
            
        

    <?php 
            }
        }
    ?>

</div>