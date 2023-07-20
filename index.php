
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
include('home-page-slider.php');
include('mysql-connection.php');

 ?>

<style media="screen">

@import url('https://fonts.googleapis.com/css?family=Open+Sans:700');

#super-profile-body::-webkit-scrollbar {
  display: Sans-serif;
}

</style>



<style media="screen">


#cat-profile-body{
 width:47% !important;
 float:left !important;
 margin-left:2% !important;
 margin-top:20px;
 color: ;
}


</style>


<div id="counter-body" style="Width: 100%;
    height: 145px;
    font-size: 30px;
    font-weight: Bold;
    color: white;
    padding-top:20px;
    text-transform:uppercase;
    background:white;padding-bottom:20px;">

  <center>
<div class="counter" style="    width: 31%;
    float: left;margin-left: 2%;
    background:#7c150c;
      border-radius: 10px;
    padding: 7px;
    ">
  <span class="total-clients">0</span>+</br>
  <span class="total-clients-text">Total Clients</span>
</div>

<div class="counter" style="    width: 31%;
    float: left;margin-left: 2%;
    background:#7c150c;
      border-radius: 10px;
    padding: 7px;
    ">
  <span class="ongoing-projects">0</span>+</br>
  <span class="ongoing-projects-text">OnGoing Projects</span>
</div>

<div class="counter" style="width: 31%;
margin-left: 2%;
    float: left;
    background:#7c150c;
      border-radius: 10px;
    padding: 7px;
    ">
  <span class="total-projects">0</span>+</br>
  <span class="total-project-text">Total Projects</span>
</div>
</center>
</div>

<br><br>


<div id="trending-item-body">

  <center><div style="font-size:55px;padding:10px;text-transform:uppercase;font-family:none;">Best Selling Products</div></center>
  <center>

  <div  id="super-profile-body" style="white-space:nowrap;overflow-x:auto;padding-top:10px;padding-bottom:10px;padding-right:10px;">

  <?php


    $select_shopItem=mysqli_query($con,"select * from shopitem order by rand() limit 3");

    $i=0;
    while($data=mysqli_fetch_array($select_shopItem)){

      $name=$data['itemname'];
      $description=$data['itemdescription'];
      $price=$data['itemprice'];
      $img=$data['itemimg'];
      $itemid=$data['itemid'];



   ?>

    <A href="item.php?itemid=<?php echo $itemid ?>">
       <div id="profile-body" style="    background:#b88ae912;margin-left:10px;display:inline-block;width:370px;height:390px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
         <div id="profile" style="float: left;width:100%;">
      <img src="photos/<?php echo $img; ?>" style="width:200px;
          height:200px;

          margin-top: 5px;

          object-fit: contain;">
        </div>


  <br>
  <div id="product-name" style="color:black;float:left;width:98%;padding:10px;font-size:25px;overflow: hidden;">
  <?php echo $name; ?>

  </div>
  <div id="person-rating" style="color:black;font-weight:Bold;float:left;width:100%;width:100%;position:relative;">



  </div>


  <div id="product-price" style="color:black;float:left;width:100%;padding:10px;font-size:25px;">
  ₹<?php echo $price; ?>

  </div>

    </div>
  </a>

  <?php
  $i++;
  if($i==5){
    break;
  }
  }


   ?>



  </div>
  </center>

</div>
<br><br>

<center><div style="font-size:40px;padding:10px;text-transform:uppercase;">Trending Products</div>

<div id="trending-item-body">

<div  id="super-profile-body" style="white-space:nowrap;overflow-x:auto;padding-top:10px;padding-bottom:10px;padding-right:10px;">

<?php


  $select_shopItem=mysqli_query($con,"select * from shopitem order by rand() limit 3");

  $i=0;
  while($data=mysqli_fetch_array($select_shopItem)){

    $name=$data['itemname'];
    $description=$data['itemdescription'];
    $price=$data['itemprice'];
    $img=$data['itemimg'];
    $itemid=$data['itemid'];



 ?>

  <A href="item.php?itemid=<?php echo $itemid ?>">
     <div id="profile-body" style="    background:#b88ae912;margin-left:10px;display:inline-block;width:370px;height:390px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
       <div id="profile" style="float: left;width:100%;">
    <img src="photos/<?php echo $img; ?>" style="width:200px;
        height:200px;

        margin-top: 5px;

        object-fit: contain;">
      </div>


<br>
<div id="product-name" style="color:black;float:left;width:98%;padding:10px;font-size:25px;overflow: hidden;">
<?php echo $name; ?>

</div>
<div id="person-rating" style="color:black;font-weight:Bold;float:left;width:100%;width:100%;position:relative;">



</div>


<div id="product-price" style="color:black;float:left;width:100%;padding:10px;font-size:25px;">
₹<?php echo $price; ?>

</div>

  </div>
</a>

<?php
$i++;
if($i==5){
  break;
}
}


 ?>



</div>
</center>

</div>
<br><br>



<script type="text/javascript">

const countEl = document.querySelector('.total-clients');

const updateCount = () => {
  const target = 10000;
  const count = +countEl.innerText;

  const speed = 30;
  const increment = target / speed;

  if (count < target) {
    countEl.innerText = Math.ceil(count + increment);
    setTimeout(updateCount, 100);
  } else {
    countEl.innerText = target;
  }
};

updateCount();

const countElL = document.querySelector('.total-projects');
const updateCountClient = () => {
  const target = 20000;
  const count = +countElL.innerText;

  const speed = 30;
  const increment = target / speed;

  if (count < target) {
    countElL.innerText = Math.ceil(count + increment);
    setTimeout(updateCountClient, 100);
  } else {
    countElL.innerText = target;
  }
};

updateCountClient();



const countElLL = document.querySelector('.ongoing-projects');
const updateCountClient3 = () => {
  const target = 100;
  const count = +countElLL.innerText;

  const speed = 30;
  const increment = target / speed;

  if (count < target) {
    countElLL.innerText = Math.ceil(count + increment);
    setTimeout(updateCountClient3, 100);
  } else {
    countElLL.innerText = target;
  }
};

updateCountClient3();

</script>


<style media="screen">

#yt-video-body{

  width:100%;
  height:500px;
}
#yt-video-content{

  width:50%;
  height:500px;
  float:left;


}

</style>

<div id="yt-video-body">
    <center>

  <div id="yt-video-content">
<iframe width="90%" height="400" src="https://www.youtube.com/embed/t3XCUHBW63o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
  <div id="yt-video-content">
<iframe width="90%" height="400" src="https://www.youtube.com/embed/t3XCUHBW63o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  </div>

</center>

</div>

 <div id="fur-category-body" style="width:100%;height:auto;overflow:auto;padding-bottom:70px;">

<center>
<center><div style="font-size:40px;padding:10px;text-transform:uppercase;">CATEGORY</div>

   <div id="cat-profile-body" style="background-color: #d2b48c54;width: 270px;height: 290px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
     <div id="profile" style="float: left;width:100%;">

  <img src="compressed-photos/cat01.png" style=" width: 150px;
    height: 180px;
      margin-top: 5px;

      object-fit: contain;">
    </div>


<br>
<div id="person-name" style="color:black;float:left;width:100%;padding:20px;font-size:20px;">
CHAIR

</div>

</div>
<div id="cat-profile-body" style="background-color:#F5F5DC;width: 270px;height: 290px;top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
  <div id="profile" style="float: left;width:100%;">

<img src="compressed-photos/cat002.png" style="    width: 350px;
    height: 200px;
   margin-top: 5px;

   object-fit: contain;">
 </div>


<br>
<div id="person-name" style="color:black;float:left;width:100%;padding:20px;font-size:20px;">
CAFE CHAIR

</div>

</div>

<div id="cat-profile-body" style="background-color:#80808033;margin-left:10px;width: 270px;height: 290px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
  <div id="profile" style="float: left;width:100%;">

<img src="compressed-photos/cat003.png" style="    width: 200px;
    height: 200px;
   margin-top: 5px;

   object-fit: contain;">
 </div>


<br>
<div id="person-name" style="color:black;float:left;width:100%;padding:20px;font-size:20px;">
HIGH CHAIR

</div>

</div>

<div id="cat-profile-body" style="background-color:#646e9c52;margin-left:10px;width:50%;height: 290px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
  <div id="profile" style="float: left;width:100%;">

<img src="compressed-photos/cat04.png" style="    width: 150px;
    height: 180px;
   margin-top: 5px;

   object-fit: contain;">
 </div>


<br>
<div id="person-name" style="color:black;float:left;width:100%;padding:20px;font-size:20px;">
TABLE

</div>

</div>

<div style="width:100%;float:left;margin-top:20px;">

  <a href="all-category.php">
  <button style="    border-radius: 10px;
    outline: Sans-serif;
    width: 80%;
    border: Sans-serif;
    height: 60px;
    background: #e99c2e;
    color: black;
    font-weight: bold;
    outline: none;
    border: none;
    font-size: 28px;
">EXPLORE ALL CATEGORIES</button>
</a>
</div>
</center>

 </div>


 <div id="google-review-section" style="width:100%;height:420px;">

 <center>
   <div style="Width:100%;text-align:center;font-size:50px;height:50px;display:flex;justify-content:center;">
<span style="color:#4285F4;float:left;">G</span><span style="color:#FBBC05;float:left;">O</span><span style="color:#EA4335;float:left;">O</span><span style="color:#4285F4;float:left;">G</span><span style="color:#34A853;float:left;">L</span><span style="color:#EA4335;float:left;">E</span>
<span style="color:black;float:left;    text-transform: uppercase;
    font-size: 50px;">&nbsprating &nbsp</span>
<span class="material-icons" style="color:#e9e91e;float:left;font-size:70px;">star</span><span style="font-weight:Bold;float:left;color:black;">4.8</span>
</div>
<br>
<div style="width:100%;height:30px;font-weight:bold;color:#8a8282;font-size:30px;">
  500+ reviews <span style="font-size:15px;color:blue;font-weight:bold;"><a style="color:blue;" href="https://www.google.com/maps/place/Sunny+Furniture/@28.6489639,77.2110377,15z/data=!4m16!1m9!3m8!1s0x390cfd69795c9f87:0xace36ccf753afb5!2sSunny+Furniture!8m2!3d28.6489639!4d77.2110377!9m1!1b1!16s%2Fg%2F12hx_mys_!3m5!1s0x390cfd69795c9f87:0xace36ccf753afb5!8m2!3d28.6489639!4d77.2110377!16s%2Fg%2F12hx_mys_">
    view all on GOOGLE</a></span>
</div>
<br>
<div  id="super-profile-body" style="white-space:nowrap;overflow-x:auto;padding-top:10px;padding-bottom:10px;padding-right:10px;">

<?php

  $img_arr=array("person01","person02","person03","person04","person05");

  $select_review=mysqli_query($con,"select * from google_review order by rand() limit 5 ");

  $i=0;
  while($data=mysqli_fetch_array($select_review)){

    $name=$data['name'];
    $rating=$data['rating'];
    $review=$data['review'];
    $review=str_replace("?","",$review);


 ?>

     <div id="profile-body" style="margin-left:10px;display:inline-block;width: 270px;height: 290px;padding: 10px 5px 5px; top: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);border-radius:10px;">
       <div id="profile" style="float: left;width:100%;">
    <img src="compressed-photos/<?php echo $img_arr[$i]; ?>.png" style="width: 50px;
        height:50px;
        border-radius: 50%;
        margin-top: 5px;
        border:1px solid #bfbdbd;
        object-fit: contain;">
      </div>


<br>
<div id="person-name" style="color:black;float:left;width:100%;padding:10px;">
<?php echo $name; ?>

</div>
<div id="person-rating" style="color:black;font-weight:Bold;float:left;width:100%;width:100%;position:relative;">

<span class="material-icons" style="color:#e9e91e;float:left;text-align:right;width:50%;">star</span><span style="text-align:left;font-weight:Bold;width:50%;float:left;"><?php echo $rating; ?>.0</span>

</div>
<div id="person-review" style="
color: black;
    height: 139px;
    overflow: hidden;
    width: 100%;
    padding: 17px;
    font-size: 14px;
    white-space: normal;

">
<?php echo $review; ?>
</div>

  </div>

<?php
$i++;
}

 ?>



</div>
</center>
 </div>

 <br><br>

    <div id="google-map-section" style="width:100%;">

      <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.359122713965!2d77.20884901508298!3d28.648963882411337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd69795c9f87%3A0xace36ccf753afb5!2sSunny%20Furniture!5e0!3m2!1sen!2sin!4v1683654461333!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>


    </div>





   <br>
    <?php
include('footer.php');

// include('mysql-connection.php');

 ?>

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
