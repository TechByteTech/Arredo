  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

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

    /* @media screen and (max-width:700px){

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

    } */



 @media screen and (max-width: 850px) {
 
  header{
      width:20% !important;
        margin-top: -20px;
      }
      #header-text{
       
         margin-top: -5px!important;font-size:10px!important;
      }
      #logo{
      margin-top:20px!important;
    height: 65px !important;
    width: 60px!important;
      }
 
     div[id="menu-list-data"]{
        
    width:0.5% !important;
    height: 30px !important;
    padding-top: 10px !important;
    padding-left: 25px !important;
    margin-left: 20px !important;

   
}
#menu-btn{
        font-size: 30px!important;
    margin-left: 20px!important;

      }
      
     #msg-body{

     }
     
  } 
  @media screen and (max-width: 750px) {
 
 header{
     width: 10% !important;
       margin-top: -2px;
     }
     #header-text{
        width:auto!important;
         margin-top: -5px!important;font-size:40px!important;
         margin-left:45%;
      }
      #header-body{
        height:145px;
      }
      div[id="menu-list-data"]{
        display:none!important;
        width:1% !important;
        height: 30px !important;
        padding-top: 10px !important;
        padding-left: 25px !important;
        margin-left: 20px !important;
    
       
    }
    #logo{
     
    height: 65px !important;
    width: 70px!important;
    position: relative!important;
    margin-left:-100px;
    
      }
      #menu-btn{
        font-size: 30px!important;
    margin-left: 15px!important;

      }
      #msg-body{
      width:30%!important;
      margin-top:65px;
      position: fixed!important;
      /* left:0;
right:0; */
margin-left:34.5%;
margin-right:auto;
    }
    #cart{
      display:inline-block!important;
      width:50px!important;
    
      height:50px;
     /* position: relative!important; */
     position:fixed!important;
     float:right;
   right: 15px;
   top:30px;
   
    }
    #msg-btn-icon{
      padding-right:4px;
    }
    
 } 

 @media screen and (max-width: 500px) {
  #logo{
     
     
     margin-left:-50px;
     
       }
 
       #msg-body{
   
margin-left:31.5%;
    }
 } 





  @media screen and (max-width:320px){



  }

  #menu-list-sub:hover{
    border-radius: 10px;
    background: #7c150c;
    color:White;
    padding:5px;
  }
  #menu-btn:hover{


    border-radius: 10px;
    background: #7c150c;
    color:White;

    font-size: 30px;
        margin: auto;
        margin-left: 35px;
        margin-top: 15px;
        cursor: pointer;
        padding: 4px;
        user-select: none;
        transform: scale(1.2);
          transition: all 0.3s ease-in-out;

  }
  #menu-btn{
    font-size: 30px;
        margin: auto;
        margin-left: 35px;
        margin-top: 15px;
        cursor: pointer;
        padding: 4px;
        user-select: none;
  }


  #menu-list-sub{

    float:left;
    max-width:fit-content;
    min-width:150px;

    text-align: center;
    font-size: 15px;
    font-weight: bold;
   color:#7c150c;
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
    z-index: 100;
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

  .dropdown-content::-webkit-scrollbar {
      display: none;
  }
  
</style>

<header style="width:100%;overflow:auto;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">


  <div id="header-body" style="background-color:white;border:none;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
    <div id="menu-button" >
      <div id="menu-btn" class="material-icons" >
      menu
    </div>

    </div>
  <!--  <div id="bvp-logo">
      <img src="photos/bvp-logo.png" style="width:100%;height:auto;" >
    </div>
  -->

    <div id="header-text" style="" >
      <a href="index.php">
    <center style="color:white;font-weight:bold;user-select:none;"><img id="logo" src="photos/arredo-logo.png" style="object-fit:cover;height:80px;width:80px;"> </center>
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
  <div class="dropdown-content" style="    width: 300px;
    height: 400px;
    overflow: auto;margin-top:30px;border-radius:10px;">



    <?php

       include("mysql-connection.php");

    $query = "select DISTINCT category FROM category";
$result = mysqli_query($con, $query);

if ($result) {
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $columnName = $row['category'];
          echo "<a href='#'>".$columnName."</a><hr>";
    }
}



     ?>
  </div>
</div>




  </center>
    </div>


<style media="screen">


  #search-input{

    border-radius: 15px;
    border:2px solid #7c150c;
    height:40px;



  }

#result-of-search-by-name::-webkit-scrollbar {
    display: none;
}

input[type=search]::-webkit-search-cancel-button {
    -webkit-appearance: searchfield-cancel-button;
    color:black;
}



</style>


    <div id="msg-body" style="    width: 30%;float: right;height:-70px; padding-top:25px;">
    <!--dropdown-->
    <div class="topnav">
    <div class="search-container">
    <form action="#">
      <input type="search" placeholder="       Search Product Here.." name="search" id="search-input" style="outline:none;">

      <div id="result-of-search-by-name" style="position:absolute;width:1px;max-height:50px;background:white;border:1px solid black;display:none;border-radius:10px;">
     
      </div>
      <div id="cart" id="msg-body" style="    width: 30%;float: right; display:none; ">
    <a href="cart.php">
      <div id="msg-btn-icon" class="material-icons" style="color:#7c150c;width: 100%;height: 100%;padding-top: 2px;font-size: 30px;padding-left: 20px;" >
        shopping_cart
</div>
</div>

    </a>
</div>
    </form>
</div>
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


    include('search.php');
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