$(function() {
  $('#product_form').submit(function(){
    var file = $(':file_1').files[0];
    var formdata = $('#product_form').serialize();
    alert(file);
    $.ajax({
                url: "/php/upload_product.php",
                type: 'post',
                data: formdata,
                success: function(data) {
                console.log(data);

                }
            });



  })
  return false;



})
