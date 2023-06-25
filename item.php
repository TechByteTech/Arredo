
<!DOCTYPE html>
<html lang="en" dir="ltr" style="background: #F8F8F8;">
  <head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <title>ARREDO</title>
  </head>
  <body style="font-family:arial;background:#F8F8F8;color:black;width:auto;margin:auto;position:relative;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>


  <?php
  session_start();
  include('mysql-connection.php');
  if(!isset($_GET['itemid'])){
    header("location:http://localhost/arredo");
    exit();
  }

  $item_id=$_GET['itemid'];

  $selectdata=mysqli_query($con,"select * from shopitem where itemid='$item_id'");
  $fetchdata=mysqli_fetch_array($selectdata);
  if(mysqli_num_rows($selectdata)==0){
    $selectdata->close();
    header("location:http://localhost/arredo");
    exit();
  }
  else{
    if(isset($_SESSION['userdata'])){
      $email=$_SESSION['userdata'];
      $selectnoofitemincarttable=mysqli_query($con,"select * from shoppingcart where email='$email' ");
    $noofitemsincart=mysqli_num_rows($selectnoofitemincarttable);
    $selectcarttable=mysqli_query($con,"select * from shoppingcart where itemid='$item_id' and email='$email' ");
    $itemspresentincart=mysqli_num_rows($selectcarttable);
    $iteminfofetch=$fetchdata;

  }

    $item_cover_img=$fetchdata['itemimg'];
    $item_name=$fetchdata['itemname'];
    $item_desc=$fetchdata['itemdescription'];
    $item_price=$fetchdata['itemprice'];


  }


/*
  $selectnoofitemincarttable=mysqli_query($con,"select * from shoppingcart where $email=$email ");
  $noofitemsincart=mysqli_num_rows($selectnoofitemincarttable);
  $selectcarttable=mysqli_query($con,"select * from shoppingcart where itemid='$itemid' and $email=$email ");
  $itemspresentincart=mysqli_num_rows($selectcarttable);

*/
  ?>

  <style>

  body{
    margin:0;
    font-family: arial;
  }
  *{
    box-sizing: border-box;
  }
  #header-container{
    width:100%;
    height:60px;

    background: #2db333;
      color: white;
  }
  #company-name-body{
    width: 50%;
height: 100%;
display: table-cell;
vertical-align: middle;
font-size: 25px;
font-family: arial;

  }
  #user-login-status{
    width:15%;
    height:100%;
    font-size: 16px;
    text-align: right;
    vertical-align:middle;
    display: table-cell;

  }
  #menu-button{
    width:15%;
    height: 100%;

    display: table-cell;
    vertical-align: middle;
  }
  #cart-button{
    width:15%;
    height: 100%;
    position: relative;
    display: table-cell;
    vertical-align: middle;
    user-select: none;
  }
  #header-body{
    width:100%;
    height:100%;
    display: table;
  }
  #body-container{

    position:relative;
  }
  #menu-body{
    width:0%;
    overflow:hidden;
    display: none;
    background-color: white;
    position:absolute;
    top:0;
    z-index: 2;
    border:2px solid black;
  }
  #cart-items-number{
    font-size: 14px;
        margin-top: 5px;
        float: left;
        position: absolute;
        left: 1px;
        text-align: center;
        top: 13px;
        font-family: arial;
        font-weight: 600;
        color: black;
        width: 30px;
  }
  a{
    -webkit-highlight-tap-color:transparent;
    text-decoration:none;
    color:white;


  }
  </style>
<?php  include('header.php'); ?>




  <body id="body-container" style="width:100%;">



    <style>
    #main-body{
      width:100%;
      height: auto;
      overflow: auto;
      margin: auto;
      margin-top:75px;
    }



        @media screen and (min-width:700px){

                #main-body{
                  width:100%;
                  height:auto;
                  overflow: auto;
                  margin: auto;
                  margin-top:105px;
                }
                #item-image-body{
                  height:525px !important
                }


                #item-image-whole-body{
                  width:50%;
                  float:left;
                }

                #item-details-whole-body{
                  width:50%;
                  float:left;
                  padding-left: 5%;
                  padding-right: 5%;

                }

                #super-profile-body{
                  width:100%;
                  margin-top:100px;

                }



        }

        @media screen and (max-width:700px){

          #item-image-body{
            height:300px !important;
          }

        }

    </style>
    <div id="main-body">


<style>
      #item-details-body{
        width: 95%;
    height: auto;

    padding-bottom: 10px;
    margin: auto;
    border-radius: 10px;

      }
      #item-image-body{
        width:100%;
        height:200px;

        padding:10px;

      }
      #item-image-box{
        width:100%;
        height: 100%;
        position: relative;
        margin: auto;

border-radius: 15px;



      }
      #item-image{
        max-width: 90%;
max-height: 90%;
        position: absolute;
        left:0;
        right:0;
        margin:auto;
      }
      #item-image-block{
        width:100%;
        height:100%;
        box-shadow: 0 1px 6px rgb(0 0 0 / 0.1);
        border-radius: 10px;


      }
      #item-pricing-block{
        width:100%;
        height:70px;
        padding-top:5px;
        padding:15px;
        text-align: center;
      }
      #item-price-box{
        width: 50%;
        height: 50px;
        font-size: 20px;

        font-family: arial;
        text-align: left;
      }
      #price-quantity-selector{
        width:50%;
        height: 50px;
        float:left;
      }
      #price-quantity-decrease-box{
        width:40px;
        height:40px;
        float:left;

      }
      #price-quantity-decrease{
        font-size: 25px;
        border-radius: 5px;
        border:1px solid black;
        cursor: pointer;
        user-select: none;
        font-weight: bold;
        -webkit-tap-highlight-color:transparent;
      }

      #price-quantity-show-box{
        padding-right: 5px;
        padding-left: 5px;
        height:30px;
                float:left;
      }
      #price-quantity-show{
        padding:5px;
        font-size: 13px;
        font-weight: bold;
        font-family: arial;
        cursor: pointer;
       user-select: none;


      }
      #price-quantity-increase-box{
        width:40px;
        height:40px;
                float:left;
      }
      #price-quantity-increase{
        font-size:25px;
        border:1px solid black;
        border-radius: 5px;
        user-select: none;
        cursor: pointer;
        font-weight: bold;
        -webkit-tap-highlight-color:transparent;
      }
      #item-name-and-description{

      }
      #item-name{
        font-size: 18px;
        font-family: arial;
        color:black;

      }
      #item-description{
        font-size:12px;
        font-family: arial;
      }
      #item-image-body::-webkit-scrollbar {
    display: none;
  }
  #show-image-preview::-webkit-scrollbar {
display: none;
}


</style>
<script>

$(document).ready(function(){
  windowHeight=window.innerHeight;
  $("#item-image-body").css({maxHeight:"500px",minHeight:"300px"});


  itemPrice=<?php echo$item_price;?>;
  originalPrice=<?php echo$item_price; ?>;
  quantity=1;
  <?php
 if(isset($_SESSION['userdata'])){
  ?>
  itemspresentincart=<?php echo $noofitemsincart; ?>;
  isitempresentincart=<?php echo $itemspresentincart;?>;
  itemid="<?php echo$iteminfofetch['itemid'];?>";
  <?php }
  else{?>

    itemspresentincart=0;
    isitempresentincart=0;

  <?php }?>
  cartclickstatus=0;


  $("#price-quantity-increase").click(function(){

    console.log("okokokok")
    if(isitempresentincart==1){

    $("#updating-box-show").show();
    $("#updating-show-text").text("updating..");
    }

    itemPrice=originalPrice+itemPrice;
    showPrice=itemPrice;
    quantity=quantity+1;
    $("#buynowlink").attr("href",`http://localhost/arredo/checkout.php?itemid=<?php echo $_GET['itemid'];?>&itemquantity=${quantity}`)
    showQuantity="Qty "+quantity;
    showPrice="₹"+showPrice;
    $("#item-price-box").text(showPrice);
    $("#price-quantity-show").text(showQuantity)
    <?php
    if(isset($_SESSION['userdata'])){

     ?>

    $.ajax({
      type:'post',
      url:'ajax_backend.php',
      data:{'itemid':itemid,'itemquantity':quantity,'update_item_to_cart':'update_item_to_cart'},
      success:function(data,status){
        if(data==1){
          console.log(data);
          isitempresentincart=1;
          $("#updating-box-show").show();
          $("#updating-show-text").text("updated");
          setTimeout(function(){
            $("#updating-show-text").text("");
            $("#updating-box-show").hide();
         },2000);
          $("#add-to-cart-button").hide();
          $("#check-cart-button").show();

        }
        else{
          isitempresentincart=0;
          $("#updating-box-show").hide();
          console.log(data);
        }
      }

    })

    <?php } ?>

  })

  $("#price-quantity-decrease").click(function(){
    if(quantity==1){
      return;
    }
    if(isitempresentincart==1){
    $("#updating-box-show").show();
    $("#updating-show-text").text("updating..");
    }
    itemPrice=itemPrice-originalPrice;
    showPrice=itemPrice;
    quantity=quantity-1;
    $("#buynowlink").attr("href",`http://localhost/arredo/checkout.php?itemid=<?php echo $_GET['itemid'];?>&itemquantity=${quantity}`)
    showQuantity="Qty " + quantity;
    showPrice="₹"+showPrice;
    $("#item-price-box").text(showPrice);
    $("#price-quantity-show").text(showQuantity)


    <?php
    if(isset($_SESSION['userdata'])){

     ?>

    $.ajax({
      type:'post',
      url:'ajax_backend.php',
      data:{'itemid':itemid,'itemquantity':quantity,'update_item_to_cart':'update_item_to_cart'},
      success:function(data,status){
        if(data==1){
          console.log(data);
          itemspresentincart=1;
          $("#updating-box-show").show();
          $("#updating-show-text").text("updated");
          setTimeout(function(){
            $("#updating-show-text").text("");
            $("#updating-box-show").hide();
         },2000);
          $("#add-to-cart-button").hide();
          $("#check-cart-button").show();

        }
        else{
          isitempresentincart=0;
          $("#updating-box-show").hide();
          console.log(data);
        }
      }

    })

    <?php }  ?>

  })
  $("#add-to-cart-button").click(function(){

    if(cartclickstatus!=0){
      return false;
    }
    cartclickstatus=1;

    itemid="<?php echo$_GET['itemid'];?>";
    $.ajax({
      type:'post',
      url:'ajax_backend.php',
      data:{'itemid':itemid,'itemquantity':quantity,'add_item_to_cart':'add_item_to_cart'},
      success:function(data,status){
        if(data==1){
          console.log(data);
          itemspresentincart=itemspresentincart+1;
          $("#add-to-cart-button").hide();
          $("#check-cart-button").show();
          $("#cart-items-number").text(itemspresentincart);
        }
        else{
          console.log(data);
        }
      }

    })


  })
})



</script>
      <div id="item-details-body" style="overflow:auto;">

        <div id="item-image-whole-body">
        <div id="item-image-body" style="
    overflow-x: auto;
    overflow-y:hidden;
    width: 100%;
    white-space: nowrap;
">


<?php
          $selectdata_images=mysqli_query($con,"select * from shopitem where itemid='$item_id' ");

          $fetch_data=mysqli_fetch_array($selectdata_images);
          $itemimg=$fetch_data['itemimg'];
          $itemid=$fetch_data['itemid'];


 ?>
          <div id="item-image-block1" style="width: 100%;
    height: 100%;
    box-shadow: 0 1px 6px rgb(0 0 0 / 0.1);
    border-radius: 10px;display: inline-block;">
           <div id="item-image-box" style="position:relative;" >
             <img src="photos/<?php echo $itemimg; ?>"  style="position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;" id="item-image"  >
           </div>
          </div>

          <?php


            $selectdata_images_more=mysqli_query($con,"select * from item_images where itemid='$itemid' ");
          if(mysqli_num_rows($selectdata_images_more)!=0){


            while($images_data=mysqli_fetch_array($selectdata_images_more)){

              $image=$images_data['image_name'];
           ?>

           <div id="item-image-block1" style="width: 100%;
       height: 100%;
       box-shadow: 0 1px 6px rgb(0 0 0 / 0.1);
       border-radius: 10px;display: inline-block;">
            <div id="item-image-box" style="position:relative;" >
              <img src="photos/<?php echo $image; ?>"  style="position: absolute;
       top: 0;
       bottom: 0;
       margin: auto;" id="item-image"  >
            </div>
           </div>

<?php
}
}

 ?>


        </div>
        <br>
        <center>
        <div id="show-image-preview" style="
    overflow-x: auto;
    overflow-y:hidden;
    width: 50%;
    white-space: nowrap">



    <a href="#item-image-block1">
    <div id="item-image-block-preview" style="display: inline-block;">
     <div id="item-image-box-preview" style="width:50px;height:40px;border:1px solid black;border-radius: 10px;opacity:0.6;">
       <img src="photos/<?php echo $itemimg;  ?>" style="max-width: 100%;max-height: 100%;object-fit:contain;"  id="item-image-preview"  >
     </div>
    </div>
  </a>

    <?php


      $selectdata_images_more=mysqli_query($con,"select * from item_images where itemid='$itemid' ");
    if(mysqli_num_rows($selectdata_images_more)!=0){


      while($images_data=mysqli_fetch_array($selectdata_images_more)){

        $image=$images_data['image_name'];
     ?>

    <a href="#item-image-block1">
    <div id="item-image-block-preview" style="display: inline-block;">
     <div id="item-image-box-preview" style="width:50px;height:40px;border:1px solid black;border-radius: 10px;opacity:0.6;">
       <img src="photos/<?php echo $image; ?>" style="max-width: 100%;max-height: 100%;object-fit:contain;"  id="item-image-preview"  >
     </div>
    </div>
  </a>

<?php
}
}

 ?>




        </div>
      </center>

    </div>




        <br>

        <div id="item-details-whole-body">

        <div id="item-name-and-description">
         <div id="item-name-box">
           <div id="item-name" style="font-size: 20px;
    font-family: arial;
    text-transform: capitalize;
    text-align:center;">
             <?php echo$item_name;?>  </div>
         </div>

       </div>


       <div id="item-pricing-block">
         <br>
         <div style="position:relative;font-size:30px;color:black;float:left;width:50%;height:50px;">

         <div id="item-price-box" style="font-size:30px;color:black;position:absolute;top:0;bottom:0;">
           <span style="font-weight:normal;">₹</span><?php echo $item_price;?>
         </div>
       </div>

         <div id="price-quantity-selector" style="    padding-top: 3px">
           <div id="price-quantity-selector-box" style="width:fit-content;margin:auto;height:50px;float:right;">
           <div id="price-quantity-decrease-box">
             <div id="price-quantity-decrease" class="material-icons" style="color:black;">
               remove
             </div>
           </div>
           <div id="price-quantity-show-box">
             <div id="price-quantity-show" >
               Qty 1
             </div>
           </div>
           <div id="price-quantity-increase-box">
             <div id="price-quantity-increase" class="material-icons" style="color:black;">
               add
             </div>
           </div>
           <?php if(isset($_SESSION['userdata'])){


             ?>

             <div id="updating-box-show" style="display:none;">
               <div id="updating-show-text" style="color:green;">

             </div>
           </div>
             <?php

         }

             ?>
         </div>

          </div>
       </div>

<br>
<br>
       <div id="add-to-cart-box" style="width:100%;height:35px;">
         <?php if(isset($_SESSION['userdata'])){

           if($itemspresentincart==0){

           ?>
<center>
         <button  id="add-to-cart-button" style="width: 80%;
    height: 40px;
    background: black;
    color: white;
    /* border: 1px solid black; */
    outline: none;
    border: none;
    border-radius:7px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    font-weight: bold;
    text-transform: capitalize;">add to cart</button>

  </center>


         <div id="check-cart-button" style="display:none;">
           <a href="http://localhost/arredo/cart.php" style="width:100%;">
             <center>
         <button  id="cart-button" style="width: 80%;
    height: 40px;
    background: black;
    color: white;
    /* border: 1px solid black; */
    outline: none;
    border: none;
    border-radius:7px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    font-weight: bold;
    text-transform: capitalize;">check cart</button>
    <center>
          </a>
       </div>
     <?php }
     if($itemspresentincart==1){
     ?>
     <div id="check-cart-buttons" >
       <a href="http://localhost/arredo/cart.php" style="width:100%;">
         <center>
     <button  id="cart-page-button" style="width: 80%;
height: 40px;
background: black;
color: white;
/* border: 1px solid black; */
outline: none;
border: none;
border-radius:7px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
font-weight: bold;
text-transform: capitalize;">check cart</button>
<center>
      </a>
    </div>
    <?php }} ?>



       <?php if(!isset($_SESSION['userdata'])){

         ?>
         <div id="login-to-check-cart-button">
           <a href="http://localhost/arredo/login-form.php" style="width:100%;">
<center>
         <button  id="check-cart" style="width: 80%;
    height: 40px;
    background: black;
    color: white;
    /* border: 1px solid black; */
    outline: none;
    border: none;
    border-radius:7px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    font-weight: bold;
    text-transform: capitalize;">add to cart</button>
    <center>
          </a>
       </div>
     <?php }?>
     </div>


     <style>
         #checkout-item-body{
           width:100%;
           height:50px;

           bottom:0;


         }
         #checkout-item{
           width:80%;
           height:50px;
           color:white;
           margin:auto;
           text-align: center;
           font-size:15px;
           font-family: arial;

           vertical-align: middle;
         }
     </style>
     <script>
     $(document).ready(function(){

     })
     </script>
     <br>
     <a style="width:100%;" id="buynowlink"href="http://localhost/arredo/checkout.php?itemid=<?php echo $_GET['itemid'];?>&itemquantity=1">
         <div id="checkout-item-body">

           <div id="checkout-item" >
             <center>
                      <button  id="check-cart" style="width: 100%;
                 height: 40px;
                 background:#0d6efd;
                 color: white;
                 /* border: 1px solid black; */
                 outline: none;
                 border: none;
                 border-radius:7px;
                     box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
                 font-weight: bold;
                 text-transform: capitalize;">BUY NOW</button>
                 <center>

           </div>

         </div>
     </a>



<br><br>
     <div id="item-description-box" style="padding-left:15px;padding-right:15px;padding-left: 15px;
    padding-right: 15px;
    font-size: 16px;
    text-transform: capitalize;">
    <div style="font-weight:bold;color:black;">Description</div>
       <div id="item-description" style="font-size:15px;padding-top:10px;">
         <?php echo $item_desc;?>  </div>
     </div>

   </div>







       </di1v>

       <style>
       #item-rating-and-reviews{
         width:100%;
         height: auto;
         padding:15px;
         margin-top:25px;
         color:Black;
       }
       #item-rating-block{
         width:100%;
         height:40px;
       }
       #item-rating-text{
         width:50%;
         height:100%;
         float:left;
         font-family: arial;
       }
       #item-rating-number{
         width:50%;
         height:100%;
         float:left;
        font-family: arial;
       }
       #item-reviews-block{
         width:100%;
         height: auto;
       }
       #item-review-text{
         width:100%;
         height:30px;
         font-family: arial;

       }
       #enter-item-reviews{
         width:100%;
         height: 50px;
       }
       #item-reviews-message{
         font-family: arial;
       }
       #super-profile-body::-webkit-scrollbar {
         display: none;
       }

       </style>

       <!--
       <div id="item-rating-and-reviews">
         <div id="item-rating-block">
           <div id="item-rating-text">
             Ratings
           </div>
           <div id="item-rating-number">
             no ratings yet

           </div>
         </div>
         <div id="item-reviews-block">
           <div id="item-review-text">
             Reviews
           </div>
           <div id="enter-item-reviews">
             <input type="text" style="padding:10px;width:100%;height:40px;border:1px solid black;border-radius:6px;font-family: arial;" placeholder="give reviews here...">
           </div>
           <div id="item-reviews-message">
             no reviews yet
           </div>
         </div>
       </div>


     </div><br><br><br>
</div>
-->
</div>
<br><br>


<div id="super-profile-body" style="Width:100%;">
    <div style="font-size:22px;padding:10px;margin-left:10px;">Latest Products</div>

<center>


<div   style="white-space:nowrap;overflow-x:auto;padding-top:10px;padding-bottom:10px;padding-right:10px;">

<?php


  $select_shopItem=mysqli_query($con,"select * from shopitem order by rand() limit 5");

  $i=0;
  while($data=mysqli_fetch_array($select_shopItem)){

    $name=$data['itemname'];
    $description=$data['itemdescription'];
    $price=$data['itemprice'];
    $img=$data['itemimg'];



 ?>

     <div id="profile-body" style="    background:#b88ae938;margin-left:10px;display:inline-block;width: 270px;height:312px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
       <div id="profile" style="float: left;width:100%;">
    <img src="photos/<?php echo $img; ?>" style="width:120px;
        height:120px;

        margin-top: 5px;

        object-fit: contain;">
      </div>


<br>
<div id="product-name" style="color:black;float:left;width:98%;padding:10px;font-size:15px;overflow: hidden;font-weight:bold;">
<?php echo $name; ?>

</div>
<div id="person-rating" style="color:black;font-weight:Bold;float:left;width:100%;width:100%;position:relative;">



</div>
<div id="person-description" style="
color: #7d7979;;
height: 68px;
overflow: hidden;
width: 100%;
padding: 10px;
/* padding: 17px; */
font-size: 14px;
white-space: normal;
">
<?php echo $description; ?>
</div>

<div id="product-price" style="color:black;float:left;width:100%;padding:10px;font-size:25px;">
₹<?php echo $price; ?>

</div>

  </div>

<?php
$i++;
if($i==5){
  break;
}
}


 ?>



</div>
</center>



<br><br>
</body>
</html>
