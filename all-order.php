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
                  width: 98%;
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
                  max-height:120px;
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
                  max-height:120px;
                }
                #item-description-box{
                  margin-top:5px;
                }
                #item-name{

font-size: 15px;
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

#accept-and-decline-body{
  width:100%;
  height: 55px;
  position: fixed;
  bottom:0px;
  background: white;

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
#item-price{
  width:100%;
  padding-left: 10px;
  font-size: 20px;
  font-family: arial;
    border-bottom:1px solid #03030312;


}
#item-quantity{
  width:100%;

  font-size: 16px;
  font-family: arial;

}
#item-payment-option{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
    border-bottom:1px solid #03030312;
}
#item-order-time{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
    border-bottom:1px solid #03030312;
}
#customer-details{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
    border-bottom:1px solid #03030312;
}
#customer-name{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
    border-bottom:1px solid #03030312;
}
#customer-phone-number{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
  border-bottom:1px solid #03030312;
}
#customer-address{
  width:100%;
  padding-left: 10px;
  font-size: 16px;
  font-family: arial;
    border-bottom:1px solid #03030312;
}

#accept-button-box{
  width:50%;
  position: relative;
  height:40px;
  float:left;
}
#decline-button-box{
  width:50%;
  height: 40px;
  float:left;
  position: relative;
}
#accept-button{
  width:96%;
  height:40px;
  margin:auto;
  position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    background: #40aa40;
    color: white;
    font-family: arial;
}
#decline-button{
  width:96%;
  height:40px;
  margin:auto;
  position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    background: #f43131;
    color: white;
    font-family: arial;
}

          </style>
            <div style="text-align:Center;">
          <span style="font-size:25px;">ALL ORDERS</span>
        </div>
        <br><br>
                    <div id="new-order-body">

                      <?php $email=$_SESSION['userdata'];
                      $con=new mysqli("localhost","root","","arredo");


                      $selectuniqueorder=mysqli_query($con,"select DISTINCT orderid from itemorder  ORDER BY ID DESC");
                      //$new_order=mysqli_num_rows($selectuniqueorder);
                      $selectuniqueorder2=mysqli_query($con,"select DISTINCT orderid from itemorder where status='2' ");
                      $accepted_order=mysqli_num_rows($selectuniqueorder2);
                      $selectuniqueorder3=mysqli_query($con,"select DISTINCT orderid from itemorder where status='3' ");
                      $rejected_order=mysqli_num_rows($selectuniqueorder3);
                      $selectuniqueorder4=mysqli_query($con,"select DISTINCT orderid from itemorder");
                      $all_order=mysqli_num_rows($selectuniqueorder4);

                       ?>
                        <div style="width:100%;height:50px;text-align:center;">
                      <span style="padding:10px;">All Orders(<?php echo $all_order; ?>)</span>
                      <span style="padding:10px;">Accepted(<?php echo $accepted_order; ?>)</span>
                      <span style="padding:10px;">Rejected(<?php echo $rejected_order; ?>)</span>
                    </div>
                      <?php

                      $i=0;
                      while($orderiddata=mysqli_fetch_array($selectuniqueorder)){
                        $orderid=$orderiddata['orderid'];
                        $totalAmount=0;
                        $selectitemorder=mysqli_query($con,"select * from itemorder where orderid='$orderid' ORDER BY ID DESC");

                        ?>
                        <div id="item-details-body" style="width:95%;padding:10px;">
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

                       </div>
                       <div id="item-quantity" style="width: 100%;
    height: 42px;
    float: left;
    margin-left: 19px;
    /* margin-top: 12px; */
    padding-top: 10px;">
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
                          <script>
                          function test(i){

                            $("#continue-loading"+i).show();
                            $("#continue"+i).hide();
                            //window.location="payment.php";
                          }

                          </script>

                          <center>

                            <div id="continue-loading<?php echo $i; ?>" style="display:none;color:white;width:80%;height:40px;border:none;outline:none;border-radius:10px;background:#0d6efd;color:white;">
                              <span class="spinner-border" style="    margin-top:4px;"></span>
                            </div>

                        <button id="continue<?php echo $i; ?>" onclick="test(<?php echo $i; ?>)" style="color:white;width:80%;height:40px;border:none;outline:none;border-radius:10px;background:#0d6efd;color:white;">View More</button>

                      </center>
                      <br>
                        </div>
                      </div>




                    </div>

                  <?php
                  $i++;
                } ?>
                  </div>


        </body>

        </html>
