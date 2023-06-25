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

  if(!isset($_SESSION['userdata'])){
    header("location:http://localhost/arredo/login-form.php");
    exit();
  }

  if(isset($_SESSION['userdata'])){
    $email=$_SESSION['userdata'];

    $con=new mysqli("localhost","root","","arredo");

  }
  $_SESSION['payment-page-redirect']="redirecttohomepage";



  ?>


<?php include('header.php'); ?>
  <body id="body-container">




<style>
#main-body{
  width:100%;
  height:auto;
  margin-top:100px;
}
#order-body-block{
  width:100%;
  height:auto;
  margin-top:10px;
}
#order-box{
  width:100%;
  height:50px;

}
#new-order-button-box{
  width:50%;
  height:50px;
  float: left;
}
#new-order-button{
  width: 100%;
height: 50px;

background: black;
color: white;
}
#pending-order-button-box{
  width:50%;
  height: 50px;
  float:left;
}
#pending-order-button{
  width:100%;
  height: 50px;
}
button{
  text-align: center;
  border:none;
  outline:none;
  font-family: arial;
}
</style>
<script>

    $(document).ready(function(){
      $("#new-order-button-box").click(function(){
        $("#new-order-button").css("background","black");
        $("#new-order-button").css("color","white");
        $("#pending-order-button").css("background","rgb(239, 239, 239)");
        $("#pending-order-button").css("color","black");
        $("#pending-order-body").hide();
        $("#new-order-body").show();


      })

      $("#pending-order-button-box").click(function(){
        $("#pending-order-button").css("background","black");
        $("#pending-order-button").css("color","white");
        $("#new-order-button").css("background","rgb(239, 239, 239)");
        $("#new-order-button").css("color","black");
        $("#pending-order-body").show();
        $("#new-order-body").hide();


      })

    })



</script>
        <div id="main-body">



          <style>
                #item-details-body{
                  width: 95%;
              height: auto;
              margin-top: 20px;
              margin-left: auto;
              margin-right: auto;
              padding-bottom: 10px;
              border-radius: 10px;
              box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
                }
                #item-image-and-pricing{
                  width:100%;
                  height:120px;
                  padding-top: 10px;

                }
                #item-image-box{
                  width:70px;
                  height: 70px;
                  position: relative;
                  margin-left:auto;
                  margin-right:auto;

                }
                #item-image{
                  max-width: 100%;
                  max-height: 100%;
                  position: absolute;
                  left:0;
                  right:0;
                  margin:auto;
                }
                #item-image-block{
                  width:30%;
                  height:120px;
                  float:left;

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
                #price-quantity-decrease{
                  font-size: 18px;
                  border-radius: 5px;
                  border:1px solid black;
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
                #price-quantity-increase{
                  font-size:18px;
                  border:1px solid black;
                  border-radius: 5px;
                }
                #item-name-and-description{
                  width:70%;
                  float:left;
                  height:120px;
                }
                #item-description-box{
                  margin-top:5px;
                }
                #item-name{

font-size: 18px;
font-family: arial;
line-height: 20px;
max-height: 43px;
overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
                }
                #item-description{
                  font-size: 12px;
    font-family: arial;
    max-height: 40px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
                }

#view-more-details-body{
  width:100%;
  height: 25px;

}
#view-more-details{
  width:100%;
  height:40px;
  font-size:13px;
   font-weight: 600;
  font-family: arial;
  border: 1px solid black;
    border-left: none;
    border-right: none;
}
#view-more-details-form{
  width:100%;
  height: 40px;
}
#new-order-body{
  display: block;
}
#pending-order-body{
  display:none;
}
          </style>

          <?php

          $email=$_SESSION['userdata'];
          $con=new mysqli("localhost","root","","arredo");


          ?>




          <div id="new-order-body">
            <span style="font-size:25px;padding:3%;">My Order</span>

            <?php
            $selectuniqueorder=mysqli_query($con,"select DISTINCT orderid from itemorder where email='$email' ORDER BY ID DESC");
            while($orderiddata=mysqli_fetch_array($selectuniqueorder)){
              $orderid=$orderiddata['orderid'];
              $totalAmount=0;
              $selectitemorder=mysqli_query($con,"select * from itemorder where orderid='$orderid' ORDER BY ID DESC");

              ?>
              <div id="item-details-body">
              <?php
             while($itemorderdata=mysqli_fetch_array($selectitemorder)){
              $itemid=$itemorderdata['itemid'];
              $status=$itemorderdata['status'];
              $quantity=$itemorderdata['itemquantity'];
              $deliveryCharges="0";//$itemorderdata['delivery_charges'];
              $selectitem=mysqli_query($con,"select * from shopitem where itemid='$itemid'");
              $fetchselectitem=mysqli_fetch_array($selectitem);
              $itemimg=$fetchselectitem['itemimg'];
              $itemprice=$fetchselectitem['itemprice'];
              $itemtotalamount=$itemprice*$quantity;
              $totalAmount=$totalAmount+$itemtotalamount;
              $qty=$itemorderdata['itemquantity'];

              ?>
              <a href="item.php?itemid=<?php echo $itemid; ?>">

            <div id="item-image-and-pricing">
              <div id="item-image-block">
               <div id="item-image-box">
                 <img src="photos/<?php echo $itemimg;?>"  id="item-image"  >
               </div>
              </div>

              <div id="item-name-and-description">
               <div id="item-name-box">
                 <div id="item-name">
                  <?php echo $fetchselectitem['itemname'];?>
                 </div>
               </div>
               <div id="item-description-box">
                 <div id="item-description">
                   <?php echo $fetchselectitem['itemdescription'];?>
                 </div>
               </div>
             </div>
             <div id="item-quantity" style="width: 100%;
    height: 28px;
    float: left;
    margin-left: 19px;">
               <div id="item-qty" style="font-size:15px;
    font-family: arial;

    max-height: 43px;">
              Quantity  <?php echo $qty;?>
               </div>
             </div>

            </div>
          </a>

          <?php }
           ?>

           <div id="totalamount" style="margin-left:19px;font-size: 15px;font-family: arial;line-height: 20px;">Total amount:- ₹<?php echo $totalAmount+$deliveryCharges;?>/-</div>
           <BR><div id="orderid" style="margin-left:19px;font-size: 15px;font-family: arial;line-height: 20px;">Order Id:- <?php echo $orderid;?></div>
            <BR><div id="view-more-details-body">
              <div id="item-status" style="color:green;text-align:center;">
                <?php if($status==1){
                  echo "Order In Process";
                }
                ?>
                <?php if($status==2){
                  echo "In Transit";
                }
                ?>
                <?php if($status==3){
                  echo "Order Decline";
                }
                ?>
              </div>
            </div>




          </div>

        <?php } ?>
        </div>
      </br></br>






        </div>




</body>

</html>
