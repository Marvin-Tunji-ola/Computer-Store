$(function() {
    //computers tab
    $('#computers').ready(function(){

       var category = 'computers'
          $.ajax({
            url: "/php/get_products.php",
            type: "post",
            data: ({ category: category }),
            success: function(data){
              //console.log(data);
              var products = JSON.parse(data);
              var output = ``;
              var count = 0;
              products.forEach(function(product){
                count++;
                  var product_id = product.product_id;
                  var product_name = product.product_name;
                  var selling_price = product.selling_price;
                  var standard_price = product.standard_price;
                  output +=`<!-- first Item-->

                      <div class="col-md-4 agile_ecommerce_tab_left">

                      <div class="hs-wrapper">
                      	<div class="preloader">
          	        	    <div class="cssload-speeding-wheel"></div>
      		              </div>
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%;  width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%;  width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%;  width:100%;"class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;" class="img-responsive " />

                        <div class="w3_hs_bottom">
                          <ul>
                            <li>
                              <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <h5><a href="single.html">`+product_name+`</a></h5>
                      <div class="simpleCart_shelfItem">
                        <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                          <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>
                        </div>
                      </div>


                    `;





                if(count%3 == 0){
                    output +=`<div class="clearfix"> </div> </div>`
                    output +=`<div class="agile_ecommerce_tabs"> `

                }


                })

                $("#computers").append(``+output+` `);


             }

        })

      })


    //mobiles tab
    $('#mobiles').ready(function(){

      var category = 'mobiles'
          $.ajax({
            url: "/php/get_products.php",
            type: "post",
            data: ({ category: category }),
            success: function(data){
              var products = JSON.parse(data);
              var output = ``;
              var count = 0;
              products.forEach(function(product){
                count++;
                  var product_id = product.product_id;
                  var product_name = product.product_name;
                  var selling_price = product.selling_price;
                  var standard_price = product.standard_price;
                  output +=`<!-- first Item-->

                      <div class="col-md-4 agile_ecommerce_tab_left">

                      <div class="hs-wrapper">
                        <div class="preloader">
                          <div class="cssload-speeding-wheel"></div>
                        </div>
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" "style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" "style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" "style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" "style="height:100%; width:100%;" class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                        <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />

                        <div class="w3_hs_bottom">
                          <ul>
                            <li>
                              <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <h5><a href="single.html">`+product_name+`</a></h5>
                      <div class="simpleCart_shelfItem">
                        <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                        <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>
                      </div>
                      </div>


                    `;





                if(count%3 == 0){
                    output +=`<div class="clearfix"> </div> </div>`
                    output +=`<div class="agile_ecommerce_tabs">`
                }


                })

                $("#mobiles").append(``+output+` `);


            }

      })

    })

    //accessories tab
    $('#accessories').ready(function(){

       var category = 'accessories'
        $.ajax({
          url: "/php/get_products.php",
          type: "post",
          data: ({ category: category }),
          success: function(data){

            var products = JSON.parse(data);
            var output = ``;
            var count = 0;
            products.forEach(function(product){
              count++;
                var product_id = product.product_id;
                var product_name = product.product_name;
                var selling_price = product.selling_price;
                var standard_price = product.standard_price;
                output +=`<!-- first Item-->

                    <div class="col-md-4 agile_ecommerce_tab_left">

                    <div class="hs-wrapper">
                    	<div class="preloader">
        	        	    <div class="cssload-speeding-wheel"></div>
    		              </div>
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" "style="height:100%; width:100%;" class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />

                      <div class="w3_hs_bottom">
                        <ul>
                          <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <h5><a href="single.html">`+product_name+`</a></h5>
                    <div class="simpleCart_shelfItem">
                      <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                      <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>

                    </div>
                    </div>


                  `;





              if(count%3 == 0){
                  output +=`<div class="clearfix"> </div> </div>`
                  output +=`<div class="agile_ecommerce_tabs">`
              }


              })

              $("#accessories").append(``+output+` `);


           }

      })

    })

    //Sign-in Form
     $("#sign-in").submit(function() {
                    var formdata = $("#sign-in").serialize()
                    //console.log(formdata);
                    $.ajax({
                    url: "/php/sign_in.php",
                    type: 'post',
                    data: formdata,
                    success: function(data) {
                    //console.log(data);
                     $('.alert').remove();
                        if(data == "1"){
                             $('#myModal88Label').append(`<div id="" class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>Sucessful</strong>
                            </div>`);
                            $('#myModal88').fadeOut(5000);
                            $('#myModal88').modal('hide');
                            $('#sign_out').remove();
                            $('.sign_out').append(`<li id = "sign_out"><a href="/php/sign_out.php">                                Sign Out
                              </a></li>`);


                            //alert(data);
                        }else if(data== "0"){
                            $('#myModal88Label').append(`<div id="" class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>Wrong Email or Password</strong>
                            </div>`)
                        }
                    }
                });

             return false;
           })

    //Sign-up Form
     $("#sign-up").submit(function() {
                    var formdata = $("#sign-up").serialize()
                    //console.log(formdata);
                    $.ajax({
                    url: "/php/sign_up.php",
                    type: 'post',
                    data: formdata,
                    success: function(data) {
                     $('.alert').remove();
                        if(data == "1"){
                             $('#myModal88Label').append(`<div id="" class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>Sucessful</strong>
                            </div>`);
                            $('#myModal88').modal('hide');
                            $('#sign_out').remove();
                            $('.sign_out').append(`<li id = "sign_out"><a href="/php/sign_out.php">
                              Sign-out
                              </a></li>`);

                        }else if(data=="4"){
                            $('#myModal88Label').append(`<div id="" class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>Email Exist</strong>
                            </div>`);
                        }else if(data=="2"){
                            $('#myModal88Label').append(`<div id="" class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>Password Mismatch</strong>
                            </div>`);
                        }else if(data== "0"){
                            $('#myModal88Label').append(`<div id="" class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times; </a>
                                <strong>An Error Occured</strong>
                            </div>`);
                        }
                    }
                });
                return false;
      })

    //load computers
    $("#load_computers").click(function() {
        var category = 'computers'
        $.ajax({
          url: "/php/get_products.php",
          type: "post",
          data: ({ category: category }),
          success: function(data){
            var products = JSON.parse(data);
            var output = ``;
            var count = 0;
            products.forEach(function(product){
              count++;
                var product_id = product.product_id;
                var product_name = product.product_name;
                var selling_price = product.selling_price;
                var standard_price = product.standard_price;
                output +=`<!-- first Item-->

                    <div class="col-md-4 agile_ecommerce_tab_left">

                    <div class="hs-wrapper">
                    	<div class="preloader">
        	        	    <div class="cssload-speeding-wheel"></div>
    		              </div>
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />

                      <div class="w3_hs_bottom">
                        <ul>
                          <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <h5><a href="single.html">`+product_name+`</a></h5>
                    <div class="simpleCart_shelfItem">
                      <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                      <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>
                  </div>
                    </div>


                  `;





              if(count%3 == 0){
                  output +=`<div class="clearfix"> </div> </div>`
                  output +=`<div class="agile_ecommerce_tabs">`
              }


              })

              $("#computers").append(``+output+` `);


           }

              })



       })

      //load mobiles
     $("#load_mobiles").click(function() {
        var category = 'mobiles'
        $.ajax({
          url: "/php/get_products.php",
          type: "post",
          data: ({ category: category }),
          success: function(data){
            var products = JSON.parse(data);
            var output = ``;
            var count = 0;
            products.forEach(function(product){
              count++;
                var product_id = product.product_id;
                var product_name = product.product_name;
                var selling_price = product.selling_price;
                var standard_price = product.standard_price;
                output +=`<!-- first Item-->

                    <div class="col-md-4 agile_ecommerce_tab_left">

                    <div class="hs-wrapper">
                    	<div class="preloader">
        	        	    <div class="cssload-speeding-wheel"></div>
    		              </div>
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />

                      <div class="w3_hs_bottom">
                        <ul>
                          <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <h5><a href="single.html">`+product_name+`</a></h5>
                    <div class="simpleCart_shelfItem">
                      <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                    <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>

                    </div>
                    </div>


                  `;





              if(count%3 == 0){
                  output +=`<div class="clearfix"> </div> </div>`
                  output +=`<div class="agile_ecommerce_tabs">`
              }


              })

              $("#mobiles").append(``+output+` `);


           }

              })



       })

   //load accesories
    $("#load_accessories").click(function() {
        var category = 'accessories'
        $.ajax({
          url: "/php/get_products.php",
          type: "post",
          data: ({ category: category }),
          success: function(data){
            var products = JSON.parse(data);
            var output = ``;
            var count = 0;
            products.forEach(function(product){
              count++;
                var product_id = product.product_id;
                var product_name = product.product_name;
                var selling_price = product.selling_price;
                var standard_price = product.standard_price;
                output +=`<!-- first Item-->

                    <div class="col-md-4 agile_ecommerce_tab_left">

                    <div class="hs-wrapper">
                    	<div class="preloader">
        	        	    <div class="cssload-speeding-wheel"></div>
    		              </div>
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=1" alt=" " style="height:100%; width:100%;"class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=2" alt=" " style="height:100%; width:100%;class="img-responsive " />
                      <img src="/php/get_product_image.php?id=`+product_id+`&index=3" alt=" " style="height:100%; width:100%;class="img-responsive " />

                      <div class="w3_hs_bottom">
                        <ul>
                          <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <h5><a href="single.html">`+product_name+`</a></h5>
                    <div class="simpleCart_shelfItem">
                      <p><span><strike>N</strike>`+standard_price+`</span> <i class="item_price"><strike>N</strike>`+selling_price+`</i></p>
                      <button type="submit" class="carta" value="`+product_id+`" >Add to cart</button>

                    </div>
                    </div>


                  `;





              if(count%3 == 0){
                  output +=`<div class="clearfix"> </div> </div>`
                  output +=`<div class="agile_ecommerce_tabs">`
              }


              })

              $("#accessories").append(``+output+` `);


           }

              })



       })

       //submit car info

    //onclick add to cart function
    $(document).on("click", ".carta", function() {
           var product_id = $(this).attr('value');
           $.ajax({
             url: "/php/cart.php",
             type:"post",
             data: ({product_id:product_id }),
             success: function(data){
               $("#cart_count").remove();
               $(".view_cart").append(`
                 <sup id="cart_count" style="color:#fff;">`+data+`</sup>`)
             }

           })


       })

    //view_cart function
    $(".view_cart").click(function(){

         $.ajax({
           url:"/php/get_status.php",
           success: function(data){
             if(data == 1){
               $("#cart_modal").modal('show');
             }else{

               $("#myModal88").modal('show');

             }


           }
         })

         $.ajax({
           url:"/php/view_cart_items.php",
           success: function(data){
             var items = JSON.parse(data);
             var total_amount = 0;
             $(".cart_items").remove();
             items.forEach(function(item){
               total_amount += item.total;
               $(".cart_table_body").append(`
                 <tr class ="cart_items" >
                 <td>` + item.product_name + `</td>
                 <td >`+ item.quantity + `</td>
                 <td><strike>N</strike>` + item.price+ `</td>
                 <td><strike>N</strike>` + item.total+ `</td>
                 <td>

                 <button type="submit"  class="del_item btn glyphicon glyphicon-trash " id="`+item.product_id+`" quantity="`+item.quantity+`"> Delete-Item</button>


                 </td>
                 </tr>

                 `)
               })
               $(".cart_table_body").append(`
                 <tr class ="cart_items" >
                 <td><b>
                 Total Amount:
                 </b>
                 </td>
                 <td>
                 </td>
                 <td>
                 </td>
                 <td>
                 </td>

                 <td><b><strike>N</strike>
                 `+total_amount+`
                 </b>
                 </td
                 </tr>

                 `)




               }
             })


           })

    //onclick delitem
    $(".del_item").live("click", function(){
            var product_id = $(this).attr('id');
            var quantity = $(this).attr('quantity');

            $.ajax({
              url:"/php/del_item.php",
              type: "post",
              data:({product_id:product_id, quantity:quantity}),
              success:function(data){
                $("#cart_count").remove();
                $(".view_cart").append(`
                  <sup id="cart_count" style="color:#fff;">`+data+`</sup>`);

                $.ajax({
                  url:"/php/view_cart_items.php",
                  success: function(data){
                    var items = JSON.parse(data);
                    var total_amount = 0;
                    $(".cart_items").remove();
                    items.forEach(function(item){
                      total_amount += item.total;
                      $(".cart_table_body").append(`
                        <tr class ="cart_items" >
                        <td>` + item.product_name + `</td>
                        <td >`+ item.quantity + `</td>
                        <td><strike>N</strike>` + item.price+ `</td>
                        <td><strike>N</strike>` + item.total+ `</td>
                        <td>

                        <button type="submit"  class="del_item btn glyphicon glyphicon-trash " id="`+item.product_id+`" quantity="`+item.quantity+`"> Delete-Item</button>


                        </td>
                        </tr>

                        `)
                      })
                      $(".cart_table_body").append(`
                        <tr class ="cart_items" >
                        <td><b>
                        Total Amount:
                        </b>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>

                        <td><b><strike>N</strike>
                        `+total_amount+`
                        </b>
                        </td
                        </tr>

                        `)




                      }
                    })
              }
            })


           })




           //mobiles tab

           //mobiles tab
 })
