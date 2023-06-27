

  <style media="screen">

    #header-body{
      width:100%;
      height:90px;
      border:1px solid black;
      background:#790102;
      color:#7c150c;
      padding-top:10px;
      position: fixed;
      z-index: 100;
    }
    #menu-button{
      width:10%;
      height:30px;

      float:left;
    }
    #bvp-logo{
      width:0%;
      height:30px;

      float:left;
    }
    #header-text{
      width: 70%;
      height: auto;
      font-size: 22px;
      font-style: none;
      margin-left: -20px;
      float: left;

    }

    body{
      margin:0;
    }

    *{
      box-sizing: border-box;
    }
    #header-container{
      width:100%;
      height:60px;
      background:#790102;
    color:#7c150c;;
    }
    #company-name-body{
      width:50%;
      height:100%;
      display: table-cell;
      vertical-align: middle;
      font-size: 25px;
      font-family: none;
    }
    #user-login-status{
      width:30%;
      height:100%;
      display: table-cell;
      vertical-align: middle;
      text-align: right;
      font-size: 15px;
      font-family: none;

    }
    #menu-button{
      width:15%;
      height: 100%;
      padding-top: 5px;

    }


    #body-container{

      position:relative;
    }
    #menu-body{
      width:0%;
      height:100%;
      display: none;
      background-color:#7c150c;;
      position:fixed;
      top:0;
      z-index: 99999;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    }
    a{
      text-decoration: none;
        color: black;
        -webkit-tap-highlight-color: transparent;
    }


    

  </style>

  <script>
  $(document).ready(function(){
  windowHeight=window.innerHeight;
  windowWidth=window.innerWidth;
    $("#menu-btn").click(function(){
      $("#menu-body").show();
      if(windowWidth>700){

        $("#menu-body").animate({width:'20%',height:windowHeight});

      }
      else{

        $("#menu-body").animate({width:'70%',height:windowHeight});

      }
      $("body").css("overflow-y","hidden");


    })
    $("#close-icon-button").click(function(){
      $("#menu-body").animate({width:'0%',height:'100%'},function(){
        $("#menu-body").hide();
  $("#menu-body").css('height',windowHeight);
  $("body").css("overflow-y","auto");
      });




    })
  })
  </script>

  <style media="screen">





    @media screen and (min-width:700px){

      #menu-button{
        width:10%;
      }
      #header-text{
        width:auto;
         margin-top: -10px;font-size:40px;
      }

     header{
       width:20% !important;
     }
    }

    @media screen and (max-width:700px){

      #menu-button{
        display:block;
      }
      #header-text{
        width:90%;
         margin-top: -5px;font-size:30px;
      }
      #menu-list-data{
        display:none;
      }
      #header-body{

        margin-top: -20px;
      }

    }




  @media screen and (max-width: 400px) {

  }

  @media screen and (max-width:320px){



  }


  #menu-list-sub{

    float:left;
    max-width:fit-content;
    min-width:150px;

    text-align: center;
    font-size: 15px;
    font-weight: bold;
   color:#7c150c;;
  }




    /* CSS for the dropdown menu */
    .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }
</style>


<header style="width:100%;overflow:auto;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">


  <div id="header-body" style="background-color:white;border:none;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
    <div id="menu-button" >
      <div id="menu-btn" class="material-icons" style="font-size:30px;margin:auto;padding-left:35px;padding-top:15px; cursor:pointer;user-select:none;">
      menu
    </div>

    </div>
  <!--  <div id="bvp-logo">
      <img src="photos/bvp-logo.png" style="width:100%;height:auto;" >
    </div>
  -->

    <div id="header-text" style="" >
      <a href="index.php">
    <center style="color:white;font-weight:bold;user-select:none;"><img src="photos/arredo-logo.png" style="object-fit:cover;height:80px;width:80px;"> </center>
    </a>
    </div>
    
    <div id="menu-list-data" style="width:45%;float:left;height:70px;padding-top:30px;padding-left:70px;margin-left:44px;font-weight:bold;text-transform: uppercase;
    letter-spacing: 1px;font-family:arial;">
    <center>
      
      <a href="myorder.php">
      <div id="menu-list-sub">
          Orders
      </div>
    </a>
      <!-- <div id="menu-list-sub">
        Category
      </div> -->


      <div id="menu-list-sub">
        Blog
      </div>
      <a href="login-form.php">
      <div id="menu-list-sub">
        Login
      </div>
    </a>


    <div class="dropdown">
  <span id="menu-list-sub">Category</span>
  <div class="dropdown-content">
    <a href="#">Option 1</a>
    <a href="#">Option 2</a>
    <a href="#">Option 3</a>
  </div>
</div>
    
    
    

  </center>
    </div>
   
   

    <div id="msg-body" style="    width: 30%;float: right;height:-70px; padding-top:25px;">
    <!--dropdown-->
    <div class="topnav">
    <div class="search-container">
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      <div id="msg-body" style="    width: 30%;float: right;">
    <a href="cart.php">
      <div id="msg-btn-icon" class="material-icons" style="color:#7c150c;width: 100%;height: 100%;padding-top: 2px;font-size: 30px;padding-left: 20px;" >
        shopping_cart
      </div>

    </a>
</div>
    </form>
</div>
  </div>
</div>
    
  

<div id="menu-body" style="background:white; ">
  <div id="menu-close-icon" style="width:100%;height:40px;background:white;">
    <a href="javascript:void(0)" style="color:black;">
    <div class="material-icons" style="float:right;font-size:30px;" id="close-icon-button">
      close
    </div>
  </a>
 </div>
 <BR>
   <?php

   include("mysql-connection.php");
   if(isset($_SESSION['userdata'])){

     $email=$_SESSION['userdata'];

     $select_username=mysqli_query($con,"select username from userdata where email='$email' ");
     $userdata=mysqli_fetch_array($select_username);
     echo "<div style='font-weight:bold;padding-left:10px;font-size:17px;white-space:nowrap;overflow:hidden;'>Hello ".$userdata['username']."</div><br>";

   }
   ?>
   <a href="index.php">
 <div id="refer-to-home-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
  <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
    home
  </div>
  <div id="home-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
  &nbsp Home
  </div>
 </div>
</a>

 <br>



<a href="profile.php">
<div id="refer-to-profile-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
 <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
   local_shipping
 </div>
 <div id="history-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
 &nbsp Shipping Policy
 </div>
</div>
</a>
<br>



<!--
<a href="next.php">
<div id="refer-to-customer-order" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
<div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">

navigate_next

</div>
<div id="customer-order-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
&nbsp What is next?
</div>
</div>
</a>
<br>

-->

<a href="privacy-policy.php">
<div id="refer-to-syllabus-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
 <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
   description
 </div>
 <div id="syllabus-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
 &nbsp Privacy Policy
 </div>
</div>
</a>
<br>

<a href="about-us.php">
<div id="refer-to-about-us-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
 <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
   description
 </div>
 <div id="syllabus-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
 &nbsp About us
 </div>
</div>
</a>
<br>


<?php if(!isset($_SESSION['userdata'])){?>
<a href="login-form.php">
<div id="refer-login-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
<div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
  login
</div>
<div id="login-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
&nbsp login
</div>
</div>
</a>
<?php }
else{
  ?>
<a href="logout.php">
<div id="refer-logout-page" style="font-family:none;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
<div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
  logout
</div>
<div id="login-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
&nbsp logout
</div>
</div>
</a>
<?php } ?>
<br>

 <hr>
</div>

</header>
