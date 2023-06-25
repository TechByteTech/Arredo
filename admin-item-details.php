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

  $con=new mysqli("localhost","root","","arredo");

  if(!isset($_GET['orderid']) || empty($_GET['orderid'])){
    header("location:admin-panel.php");
    exit();
  }

  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");

 $orderid=$_GET['orderid'];

  $selectuniqueorder=mysqli_query($con,"select DISTINCT orderid,email from itemorder where orderid='$orderid' and status='1' ");
  if(mysqli_num_rows($selectuniqueorder)==0){
    header("location:new-order.php");
    exit();
  }



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
    border-radius: 10px;
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
    border-radius: 10px;
}

          </style>


                    <div id="new-order-body">

                      <?php



                      $i=0;
                      while($orderiddata=mysqli_fetch_array($selectuniqueorder)){

                        $email=$orderiddata['email'];
                        $selectuserdata=mysqli_query($con,"select * from ecom_customer_delivery_details where email='$email' ");
                        if(mysqli_num_rows($selectuserdata)==1){

                        $userdata=mysqli_fetch_array($selectuserdata);
                        $username=$userdata['username'];
                        $useraddress=$userdata['address'];
                        $userphoneno=$userdata['phonenumber'];
                        $userpincode=$userdata['pincode'];
                        $useremail=$userdata['email'];
                        $delivery_data=1;
                        }
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
                         <div id="item-description-box">
                           <div id="item-description">
                             <?php echo $fetchselectitem['itemdescription'];?>
                           </div>
                         </div>
                       </div>
                       <div id="item-quantity" style="width: 100%;
    height: 42px;
    float: left;
    margin-left: 19px;
    font-weight:bold;/* margin-top: 12px; */
    padding-top: 10px;">
                         <div id="item-qty" style="font-size:15px;
              font-family: arial;

              max-height: 43px;">
                        Quantity  <?php echo $qty;?> X <?php echo $itemprice; ?>
                         </div>
                       </div>


                      </div>
                    </a>

                    <?php }
                     ?>
                     <br>
                     <div id="totalamount" style="margin-left:19px;font-size: 15px;font-family: arial;line-height: 20px;">Total amount:- ₹<?php echo $totalAmount+$deliveryCharges;?>/-</div>
                     <BR><div id="orderid" style="margin-left:19px;font-size: 15px;font-family: arial;line-height: 20px;">Order Id:- <?php echo $orderid;?></div>
                      <BR><div id="view-more-details-body">
                        <div id="item-status" style="color:green;text-align:center;">

                      <br>
                        </div>
                      </div>




                    </div>

                  <?php
                  $i++;
                } ?>
                  </div>


                  <style>
                  #user-address-body{

                    width: 95%;
                  height: auto;
                  overflow: auto;
                  box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
                  border-radius: 10px;
                  margin: auto;
                  padding: 10px;

                  }
                  #my-details-text{
                    width: 50%;
                    display: table-cell;
                    height: 25px;
                    vertical-align: middle;
                    font-family: arial;

                    color:black;
                    font-size:18px;
                  }
                  #edit-my-details{
                    width: 50%;
                  display: table-cell;
                  vertical-align: middle;
                  height: 20px;
                  font-family: arial;
                  }
                  #edit-my-details-button {
                      width: 40%;
                      height: 26px;
                      float: right;
                      margin-right: 10px;

                  #user-name{
                    display: table-row;
                    width:100%;
                    font-size:13px;
                          font-family: arial;

                  }
                  #user-address{
                    width:100%;
                    height: 32px;
                    overflow: hidden;
                  text-overflow: ellipsis;
                  display: -webkit-box;
                  -webkit-line-clamp: 2;
                  -webkit-box-orient: vertical;
                    font-size:13px;
                          font-family: arial;
                  }
                  #user-phone-number{
                    width:100%;
                    display: table-row;
                    font-size:13px;
                          font-family: arial;
                  }
                  </style>


                  <br>
                           <div id="user-address-body" style="padding:15px;">
                             <div id="user-details-heading" style="display:table;width:100%;height:30px;">
                             <div id="my-details-text" style="text-align:center;font-size:20px;">
                               Customer Details
                             </div>

                           </div><br>
                             <div id="user-name">
                               <?php echo $username;?>
                             </div><br>
                             <div id="user-address">
                               <?php echo $useraddress;?>

                             </div><br>
                             <div id="user-pincode">
                               <?php echo $userpincode;?>

                             </div><br>
                             <div id="user-phone-number">
                              <?php echo $userphoneno;?>
                             </div><br>
                             <div id="user-phone-number">
                               <?php echo $useremail;?>

                             </div><br>
                           </div>
                           <br>
                      </div><br><br><br>



        <div id="confirm-delete-body" style="position:fixed;display:none;top:0;bottom:0;background-color: white;left:0;right:0;margin:auto;width:80%;height:200px;border-radius:10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
          <br><br><br><div id="delete-text" style="text-align:center;font-size:15px;font-family:arial;">
            Do You Want To Decline This Order?
          </div><br><br>
          <div id="yes-no-confirm-buttons" style="width:100%;height:50px;">
          <div id="yes-button-box" style="width:50%;height:50px;float:left;">
            <div id="yes-button-center" style="margin:auto;width:40%;height:30px;">
            <input type="button" value="yes" onclick="decline_order()" id="yes-button" style="width:100%;height:30px;">
           </div>
          </div>
          <div id="no-button-box" style="width:50%;height:50px;float:left;">
            <div id="no-button-center" style="margin:auto;width:40%;height:30px;">
            <input type="button" value="no" id="no-button" style="margin:auto;width:100%;height:30px;">
          </div>
        </div>
        </div>
        </div>


        </div>
        <script>

        $(document).ready(function(){
          $("#decline-button").click(function(){
            $("#confirm-delete-body").show();
            $("#main-body").css({opacity:'0.2'});

          })
          $("#no-button").click(function(){
            $("#confirm-delete-body").hide();
            $("#main-body").css({opacity:'1'});

          })

          $("#yes-button").click(function(){
            $("#confirm-delete-body").hide();
            $("#main-body").css({opacity:'1'});

          })

        })


        </script>



                    <div id="accept-and-decline-body" style="height:90px;padding-top:25px;">

                      <div id="spinner-body-box" style="display:none;">
                        <center>
                        <div class="spinner-border">
                        </div>
                      </center>

                      </div>

                      <div id="accept-decline-btn-body">

                        <div id="accept-button-box">
                          <button onclick="accept_order()" id="accept-button">Accept</button>
                        </div>

                        <div id="decline-button-box">
                          <button  id="decline-button">Decline</button>
                        </div>

                      </div>


                    </div>

                    <script>

                    function accept_order(){

                      $("#accept-decline-btn-body").hide();
                      $("#spinner-body-box").show();

                    orderid ="<?php echo $_GET['orderid'];?>";

                     $.ajax({
                       type:'POST',
                       url:'ajax_backend.php',
                       data:{'accept_order':'accept_order','itemid':orderid},

                       success:function(data,textStatus){
                        if(data==1){
                         window.location="new-order.php";
                          //$("#loading-image-body").hide();

                        }
                        else{
                          console.log(data)
                          //$("#loading-image-body").hide();

                        }
                       }


                       })

                       return false;

                    }



                            function decline_order(){

                              $("#accept-decline-btn-body").hide();
                              $("#spinner-body-box").show();

                             orderid="<?php echo $_GET['orderid'];?>";

                             $.ajax({
                               type:'POST',
                               url:'ajax_backend.php',
                               data:{'decline_order':'decline_order','itemid':orderid},

                               success:function(data,textStatus){
                                if(data==1){
                                  window.location="new-order.php";
                                  //$("#loading-image-body").hide();

                                }
                                else{
                                  console.log(data)
                                  //$("#loading-image-body").hide();

                                }
                               }


                               })

                               return false;

                            }
                    </script>
        </body>

        </html>
