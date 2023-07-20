
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
  <body style="font-family:none;background:#F8F8F8;color:black;width:auto;margin:auto;position:relative;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



<?php
session_start();
include('header.php');

include('mysql-connection.php');

 ?>

<br><br><br><br>

 <div id="trending-item-body">

   <center><div style="font-size:55px;padding:10px;text-transform:uppercase;font-family:none;">ALL CATEGORIES</div></center>
   <center>

   <div  id="super-profile-body" style="white-space:nowrap;overflow-x:auto;padding-top:10px;padding-bottom:10px;padding-right:10px;">
     <center>
   <?php


     $select_shopItem=mysqli_query($con,"select DISTINCT itemcategory from shopitem order by rand()");

     $i=0;
     while($data=mysqli_fetch_array($select_shopItem)){

       $itemcategory=$data['itemcategory'];



    ?>

        <a href="category.php?category-name=<?php echo $itemcategory; ?>">

        <div id="profile-body" style="    background:#b88ae912;width:45%;float:left;height:390px;margin:2.5%; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">

          <div id="profile" style="float: left;width:100%;">
       <img src="photos/default.webp" style="width:200px;
           height:200px;

           margin-top: 5px;

           object-fit: contain;">
         </div>


   <br>
   <div id="product-name" style="color:black;float:left;width:98%;padding:10px;font-size:25px;overflow: hidden;">
   <?php echo $itemcategory; ?>

   </div>



     </div>
     </a>


   <?php
   $i++;

   }


    ?>

  </center>

   </div>
   </center>

 </div>


</body>
</html>
