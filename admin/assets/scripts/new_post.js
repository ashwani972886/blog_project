function preview() {
  if (document.getElementById("title_img") == "") {
    alert("Please select title image");
  } else if (document.getElementById("title").val == "") {
    alert("Please enter blog title!");
  } else if (document.getElementById("getCategory").val == "") {
    alert("Please select one of the category");
  } else if (document.getElementById("getSubCategory").val == "") {
    alert("Please select one of the subcategories");
  } else if (document.getElementById("editor1").val == "") {
    alert("Please add some content to your blog to attract the readers!");
  }

  // if(file != undefined){
  //     formData= new FormData();

  //       formData.append("image", file);
  //       $.ajax({
  //         url: "upload.php",
  //         type: "POST",
  //         data: formData,
  //         processData: false,
  //         contentType: false,
  //         success: function(data){
  //             alert('success');
  //         }
  //       });

  //   }else{
  //     alert('Input something!');
  //   }
}

function saveDraft() {
  var input = document.getElementById("title_img");
  file = input.files[0];
  formData = new FormData();
  formData.append("image", file);

  $.ajax({
    type: "POST",
    url: "actions.php?action=saveAsDraft",
    data:
      "title=" +
      $("#title").val() +
      "&getCategory=" +
      $("#getCategory").val() +
      "&getSubCategory=" +
      $("#getSubCategory").val() +
      "&blogContent=" +
      CKEDITOR.instances.editor1.getData() +
      "&quoteDesc=" +
      $("#quote").val() +
      "&quoteAuth=" +
      $("#quote_author").val(),
    success: function (result) {
      if (result == 1) {
        window.location.assign("http://localhost/blog_project/admin");
      } else {
        console.log(result);
      }
    },
  });
}

$(document).ready(function () {
  $("#getCategory")
    .change(function () {
      $cat = $("#getCategory").val();
      //   console.log($cat);
      if ($cat == "Category") {
        $(document).ready(function () {
          $("#getSubCategory")
            .change(function () {
              $("#getSubCategory").val() == "Sub-Category";
            })
            .change();
        });
      } else {
        $.ajax({
          type: "POST",
          url: "actions.php?action=subCategory",
          data: "category=" + $cat,
          success: function (result) {
            $sub = jQuery.parseJSON(result);
            // console.log(result);
            var options = document.querySelector("#getSubCategory");

            options.innerHTML = "";
            Object.values($sub).map(($items) => {
                $str = $items.sub_category;
                $items1 = $str.charAt(0).toUpperCase() + $str.slice(1);
              options.innerHTML += `
                       <select name="getSubCategory" id="getSubCategory" class="form-control">
                           <option value="${$items.sub_category}">${$items1}</option>
                       </select>
                   `;
            });
          },
        });
      }
    })
    .change();
});
