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


?>




<?php include('header.php'); ?>
  <body id="body-container" >

    <div id="admin-panel-body" style="margin-top:100px;width:100%;height:100px;text-align:center;font-size:25px;font-weight:Bold;">
      <div id="admin-panel-text">ADMIN PANEL</div>
    </div>



    <script>
    function test(i){
      arr=["new-order.php","inventory.php","all-order.php","customer.php","upload-item.php"];
      $("#continue-loading"+i).show();
      $("#continue"+i).hide();
     window.location=arr[i-1];
    }

    </script>

    <center>

      <div id="admin-panel-btn-body" style="Width:100%;">

              <div id="admin-panel-btn" style="width:50%;float:left;height:70px;">
            <div id="continue-loading1" style="display: none;color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">
              <span class="spinner-border" style="    margin-top: 10px;"></span>
            </div>

        <button id="continue1" onclick="test(1)" style="color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">New Order(5)</button>
      </div>

      <div id="admin-panel-btn" style="width:50%;float:left;height:70px;">
    <div id="continue-loading2" style="display: none;color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">
      <span class="spinner-border" style="    margin-top: 10px;"></span>
    </div>

<button id="continue2" onclick="test(2)" style="color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">Inventory(200)</button>
</div>


<div id="admin-panel-btn" style="width:50%;float:left;height:70px;">
<div id="continue-loading3" style="display: none;color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">
<span class="spinner-border" style="    margin-top: 10px;"></span>
</div>

<button id="continue3" onclick="test(3)" style="color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">All Orders(100)</button>
</div>


<div id="admin-panel-btn" style="width:50%;float:left;height:70px;">
<div id="continue-loading4" style="display:none;color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">
<span class="spinner-border" style="    margin-top: 10px;"></span>
</div>



<button id="continue4" onclick="test(4)" style="color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">Customers(1000)</button>
</div>


<div id="admin-panel-btn" style="width:50%;float:left;height:70px;">
<div id="continue-loading5" style="display: none;color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">
<span class="spinner-border" style="    margin-top: 10px;"></span>
</div>

<button id="continue5" onclick="test(5)" style="color:black;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight:bold;background: #ee990b;">List Item</button>
</div>







</div>

</center>



  </body>
</html>
