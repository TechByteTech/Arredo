
<?php
  session_start();



if(isset($_SESSION['userdata'])){

  $email=$_SESSION['userdata'];
}
else{
  header('location:index.html');
  exit();
}




  $con=new mysqli("localhost","root","","arredo");
  $selectnoofitemincarttable=mysqli_query($con,"select * from shoppingcart where email='$email' ");
  $noofitemsincart=mysqli_num_rows($selectnoofitemincarttable);



    $selectshoppingcart=mysqli_query($con,"select itemid,quantity from shoppingcart where email='$email' ");
    $itemsincart=mysqli_num_rows($selectshoppingcart);


?>


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


  <style>

   * {

 box-sizing:border-box;

   }
   body{
     margin: 0;
     font-family: arial;
   }
   #header-container{
    width:100%;
    height:60px;
    background: #2db333;
color: white;
   }
   #company-name-body{
     max-height: 38px;
     margin-top: 8px;
     text-align: center;
     font-size: 18px;
     overflow: hidden;
     font-family: arial;

   }
   #user-login-status{
    width:30%;
    height:100%;
    display: table-cell;
    vertical-align: middle;
   }
   #menu-button{
    width:15%;
    height: 100%;

    display: table-cell;
    vertical-align: middle;
   }
   #header-body{
    width:100%;
    height:100%;
    display: table;
   }
   #body-container{
     position: relative;

   }
   a{
     text-decoration:none;
     color:black;
     -webkit-tap-highlight-color:transparent;

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

   #cart-button{
     width:15%;
     height: 100%;
     position: relative;
     display: table-cell;
     vertical-align: middle;
     user-select: none;
   }

  </style>
  <?php   include('header.php'); ?>
  <body id="body-container" style="width:100%;">

    <style>
    #main-body{
      width:100%;
      height: auto;
      overflow: auto;
      margin: auto;
      margin-top:75px;

    }


    </style>
    <div id="main-body">
      <br>

<style>
      #item-details-body{
        width: 95%;
    height: auto;
    padding: 10px;
    padding-bottom:30px;
    margin: auto;
    border-radius: 10px;
    margin-top:10px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    border-radius: 10px;

      }
      #item-image-and-pricing{
        width:100%;
        height:140px;


      }
      #item-image-box{
        width: 120px;
height: 120px;
position: absolute;
/* margin: auto; */
left: 0;
bottom: 0;
left: 0;
top: 0;
bottom: 0;
right: 0;
margin: auto;


      }
      #item-image{
        max-width: 100%;
        max-height: 100%;
        position: absolute;
        left:0;
        right:0;
        top:0;
        bottom:0;
        margin:auto;
      }
      #item-image-block{
        width:50%;
        height:120px;
        float:left;
        position:relative;

      }
      #item-pricing-block{
        width:50%;
        height:120px;
        float:left;
        text-align: center;

      }
      #item-price-box{
        text-align:center;
      }
      #price-quantity-selector{
        width:100%;
        height: 50px;
      }
      #price-quantity-decrease-box{
        width:20px;
        height:20px;
        float:left;

      }
      #price_quantity_decrease{
        font-size: 18px;
        border-radius: 5px;
        border:1px solid black;
        cursor: pointer;
        user-select: none;
      }
      #price-quantity-show-box{
        padding-right: 5px;
        padding-left: 5px;
        height:20px;

                float:left;
      }
      #price-quantity-show{
        font-size: 15px;
        font-family: arial;


      }
      #price-quantity-increase-box{
        width:20px;
        height:20px;
                float:left;
      }
      #price_quantity_increase{
        font-size:18px;
        border:1px solid black;
        border-radius: 5px;
        cursor:pointer;
        user-select: none;
      }
      #item-name-and-description{
        padding-left: 15px;
      }
      #item-name{
        font-size: 15px !important;
    font-family: arial;
    font-weight: bold;
    /* line-height: 35px; */
    text-transform: capitalize;
      }
      #item-description{
        font-size:12px;
        font-family: arial;
      }


</style>
      <div style="text-align:center;font-size:15px;font-family:arial; display:none;" id="no-items-in-cart">no item in cart</div>

      <div id="item-main-body" >
      <?php

      if($itemsincart==0){
        echo "<div style='text-align:center;font-size:15px;font-family:arial;'>no item in cart</div>";
      }



      $i=0;
      $itemprice=0;
      while($shoppingcartinfo=mysqli_fetch_array($selectshoppingcart)){
        $i=$i+1;

        $itemid=$shoppingcartinfo['itemid'];

        $selectshopitemtable=mysqli_query($con,"select * from shopitem where itemid='$itemid' ");

        $cartiteminfo=mysqli_fetch_array($selectshopitemtable);

        $item_img=$cartiteminfo['itemimg'];
        $item_name=$cartiteminfo['itemname'];
        $item_price=$cartiteminfo['itemprice'];
          $itemprice=$itemprice+$item_price*$shoppingcartinfo['quantity'];


      ?>
    <!--  <a href=" -->
    <div id="item-details-body" class="item-details-body-class<?php echo $i;?>">
      <div id="delete-item-box" style="width:97%;text-align:right">
        <div id="delete-item" onclick="removeitem('.item-details-body-class<?php echo $i;?>','<?php echo $itemid;?>','#quantity<?php echo $i;?>',<?php echo $item_price;?>)" class="material-icons" style="width:20px;height:20px;font-size:18px;font-weight:800;cursor:pointer;user-select:none;">
          close
        </div>
      </div>
      <div id="item-image-and-pricing">
        <div id="item-image-block">
         <div id="item-image-box">
           <img src="photos/<?php echo $item_img; ?>"  id="item-image"  >
         </div>
        </div>
        <div id="item-pricing-block">
          <br>
          <input type="hidden" id="itemPrice<?php echo$i;?>" value="<?php echo $item_price*$shoppingcartinfo['quantity'];?>">
          <div id="item-price-box<?php echo $i;?>" style="font-size: 20px;
    font-weight: bold;color:black;">
            ₹<?php echo $item_price*$shoppingcartinfo['quantity'];?>
          </div>
          <br>
          <div id="price-quantity-selector">
            <div id="price-quantity-selector-box" style="width:fit-content;margin:auto;height:50px;">
            <div id="price-quantity-decrease-box">
              <div id="price_quantity_decrease" style="font-weight: bold;
    color: black;" onclick="price_quantity_decrease('#item-price-box<?php echo $i;?>',<?php echo $item_price;?>,'<?php echo $itemid;?>','#quantity<?php echo $i;?>','#itemPrice<?php echo$i;?>','#price-quantity-show<?php echo$i;?>')" class="material-icons">
                remove
              </div>
            </div>
            <div id="price-quantity-show-box">
              <input type="hidden" id="quantity<?php echo$i;?>" value="<?php echo$shoppingcartinfo['quantity'];?>">
              <div id="price-quantity-show<?php echo $i;?>">
                Qty <?php echo $shoppingcartinfo['quantity'];?>
              </div>
            </div>
            <div id="price-quantity-increase-box">
              <div id="price_quantity_increase" style="font-weight: bold;
    color: black;" onclick="price_quantity_increase('#item-price-box<?php echo $i;?>',<?php echo $item_price;?>,'<?php echo $itemid;?>','#quantity<?php echo $i;?>','#itemPrice<?php echo$i;?>','#price-quantity-show<?php echo$i;?>')" class="material-icons">
                add
              </div>
            </div>
          </div>

           </div>
        </div>
      </div>

      <div id="item-name-and-description">
       <div id="item-name-box">
         <div id="item-name" style="color:black;font-size:18px;font-weight:normal;">
           <?php echo $cartiteminfo['itemname'];?>
         </div>
       </div>

     </div>


    </div>


  <!--  </a> -->

  <?php } ?>


</div>


  <script>



      totalamount=<?php echo$itemprice?>;
      originalPrice=<?php echo$itemprice?>;

      itemspresentincart=<?php echo $noofitemsincart; ?>;

      function price_quantity_increase(itempricebox,originalPrice,itemid,quantityid,itemPriceid,quantityshow){

        quantity=$(quantityid).val();
        quantity=parseInt(quantity);
        itemPrice=$(itemPriceid).val();
        itemPrice=parseInt(itemPrice);
        itemPrice=originalPrice+itemPrice;
        $(itemPriceid).val(itemPrice);
        showPrice=itemPrice;
        quantity=quantity+1;
        $(quantityid).val(quantity);
        totalamount=totalamount+originalPrice;
        $("#item-price-number").text(totalamount);
        $("#item-total-price-number").text(totalamount);
        showQuantity="Qty "+quantity;
        $(itempricebox).text("₹"+showPrice);
        $(quantityshow).text(showQuantity)

        $.ajax({
          type:'post',
          url:'ajax_backend.php',
          data:{'quantity_change':'quantity_change','quantity':quantity,'itemid':itemid},
          success:function(data,status){
            if(data==1){
              console.log(data);
            }
            else{
              console.log(data);
            }
          }


        })
      }
      itemsincart=<?php echo $itemsincart; ?>;

      function removeitem(divid,itemid,quantityid,originalPrice){
        quantity=$(quantityid).val();
        quantity=parseInt(quantity);
        totalamount=totalamount-(quantity*originalPrice);

        $("#item-price-number").text(totalamount);
        $("#item-total-price-number").text(totalamount);

        $(divid).remove(divid);

        $.ajax({
          type:'post',
          url:'ajax_backend.php',
          data:{'removeitem':'removeitem','itemid':itemid},
          success:function(data,status){
            itemsincart=itemsincart-1
            if(itemsincart==0){
              console.log("okgg")
              $("#no-items-in-cart").show();
              $("#checkout-item-body").hide();
            }
            $("#cart-items-number").text(itemsincart)
            if(data==1){


            }
            else{
              console.log(data);
            }
          }


        })

      }
      function price_quantity_decrease(itempricebox,originalPrice,itemid,quantityid,itemPriceid,quantityshow){
        quantity=$(quantityid).val();
        itemPrice=$(itemPriceid).val();
        itemPrice=parseInt(itemPrice);
        quantity=parseInt(quantity);
        if(quantity==1){
          return;
        }
        itemPrice=$(itemPriceid).val();
        itemPrice=itemPrice-originalPrice;
        totalamount=totalamount-originalPrice;
        $("#item-price-number").text(totalamount);
        $("#item-total-price-number").text(totalamount);
        $(itemPriceid).val(itemPrice);
        showPrice=itemPrice;
        quantity=quantity-1;
        $(quantityid).val(quantity);
        showQuantity="Qty " + quantity;
        $(itempricebox).text("₹"+showPrice);
        $(quantityshow).text(showQuantity)

        $.ajax({
          type:'post',
          url:'ajax_backend.php',
          data:{'quantity_change':'quantity_change','quantity':quantity,'itemid':itemid},
          success:function(data,status){
            if(data==1){
              console.log(data);
            }
            else{
              console.log(data);
            }
          }


        })
      }

  </script>




<br>
    <style>
    #checkout-item-body{
      width:100%;
      height:50px;
      padding:0px;

    }
    #checkout-item{
      width:80%;
      height:40px;
      color:white;
      margin:auto;
      text-align: center;
      font-size:16px;
      font-family: arial;
      background:#0d6efd;
      border:none;
      outline: none;
      padding:6px;
      border-radius:10px;


    }


    @media screen and (min-width:700px){

      #main-body{
        width:40% !important;
      }
    }

    @media screen and (max-width:700px){



    }

    </style>
    <?php
    if($itemsincart!=0){
    ?>

    <center>
    <a href="checkout.php" style="width:100%;">
    <div id="checkout-item-body">
      <button id="checkout-item">
          CONTINUE
      </button>
    </div>
  </a>
</center>
  <?php }?>


  </body>
</html>
