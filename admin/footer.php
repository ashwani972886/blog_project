                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="./assets/scripts/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
                <script src="assets/scripts/tagsinput.js"></script>
                <!-- <script src="assets/scripts/new_post.js"></script> -->
                            
                <script>

                    $("#new_post").click(function (){
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