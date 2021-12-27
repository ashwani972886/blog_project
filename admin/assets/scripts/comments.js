function displayComment(postId, title, like, comment) {
  // alert(postId + title + like + comment);

  $.ajax({
    type: "POST",
    url: "actions.php?action=commentDetail",
    data: "post_id=" + postId,
    success: function (result) {
      $comment_detail = jQuery.parseJSON(result);
    //   console.log(result);
      var postView = document.querySelector("#post_view");
      postView.innerHTML = `<div class="custom_card_header text-center">
                                    <h6 style="float:right"> </h6>
                                    <h5><b>${title}</b></h5>

                                </div>
                                <hr>
                                <div class="custom_card_header text-center">
                                    <h6 style="float:right"> </h6>
                                    <h5><b>All Messages </b></h5>
                                                                  
                                    <div class="row" style="margin-left: 40%">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <!-- <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" /> -->
                                            <i style="font-size: 20px;" class="fas fa-thumbs-up"></i>
                                            <span>${like}</span>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill=" yellow" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                                            <!-- <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" /> -->
                                            <i style="font-size: 20px" class="fas fa-comment"></i>
                                            <span>${comment}</span>
                                        </svg>
                                        <hr>
                                    </div> 
                                </div>
                                `;
      Object.values($comment_detail).map(($items) => {
        postView.innerHTML += `

                    
                    <div class="card">
                        <div class="card-body">
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </h5>
                        <h5 class="card-title">${$items.name}</h5>
                        <p class="card-text">${$items.comment}</p>
                        
                `;
      });
      postView.innerHTML += `                                    
                                    </div>
                                </div>
                                `;
    },
  });
}
