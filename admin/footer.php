                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="./assets/scripts/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
                <script src="assets/scripts/tagsinput.js"></script>

                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Month', 'Posts'],
                        ['Jan',  0],
                        ['Feb',  0],
                        ['Mar',  0],
                        ['Apr',  0],
                        ['May',  0],
                        ['Jun',  0],
                        ['Jul',  0],
                        ['Aug',  0],
                        ['Sep',  2],
                        ['Oct',  5],
                        ['Nov',  0],
                        ['Dec',  3]
                        ]);

                        var options = {
                        title: 'Post Trend',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                    }
                </script>
                
                <!-- <script src="assets/scripts/new_post.js"></script> -->
                            
                <script>

                    $(".new_post").click(function (){
                        $.ajax({
                            type: "POST",
                            url: "actions.php?action=save_new_draftId",
                            success: function(result) {
                                
                                window.location.assign('http://localhost/blog_project/admin/?p=new_post&draft='+ result);
                            }
                        
                        })
                    })

                </script>

</body>

</html>