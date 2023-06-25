<?php


session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" >
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


  </head>



  <?php
  include("header.php");

  ?>

    <div id="menu-body" >
      <div id="menu-close-icon" style="width:100%;height:40px;">
        <a href="javascript:void(0)" style="color:black;">
        <div class="material-icons" style="float:right;font-size:30px;" id="close-icon-button">
          close
        </div>
      </a>
     </div>
     <BR>
       <a href="http://localhost/unname/">
     <div id="refer-to-home-page" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
      <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
        home
      </div>
      <div id="home-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
      &nbsp Home
      </div>
     </div>
   </a>

     <br>
     <a href="http://localhost/unname/cart.php">
     <div id="refer-to-shoppingcart" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
      <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
        shopping_cart
      </div>
      <div id="history-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
      &nbsp cart
      </div>
     </div>
   </a>
     <br>
     <a href="http://localhost/unname/my-order.php">
     <div id="refer-to-my-order" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
      <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
        description
      </div>
      <div id="my-order-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
      &nbsp My orders
      </div>
     </div>
   </a>
   <br>
     <a href="http://localhost/unname/shop-owner.php">
     <div id="refer-to-shop-owner" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
      <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
        store
      </div>
      <div id="shop-owner-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
      &nbsp Shop owner
      </div>
     </div>
   </a>
   <br>
   <a href="http://localhost/unname/login-form.php">
   <div id="refer-login-page" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
    <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
      login
    </div>
    <div id="login-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
    &nbsp login
    </div>
   </div>
 </a>
 <br>
     <a href="http://localhost/unname/contact-us.php">
     <div id="refer-to-customer-order" style="font-family:arial;width:100%;height:30px;font-size:13px;padding-left:10px;display:table;white-space:nowrap;">
      <div class="material-icons" style="width: 22px;height: 21px;font-size: 20px;text-align: center;display: inline-block;vertical-align: middle;border-radius: 20%;">
        contact_page
      </div>
      <div id="customer-order-page" style="display:inline-block;vertical-align:middle;font-size:15px;">
      &nbsp Contact us
      </div>
     </div>
   </a>
     <br>
     <hr>
    </div>
<style>
body{
  font-family: arial;
}
  #body-container{
    width:100%;
    margin-top:150px;
  }

  #login-button-body{

    width:100%;
    height:auto;

  }
  #login-button-box{
    width:70%;
    height: 40px;
    margin:auto;
  }
  #login-button{
    width:100%;
    outline:none;
    color:white;
    background: #4899ec;
    border:1px solid black;
    height:100%;
    border-radius: 15px;
    font-size:16px;
    font-family: arial;
  }

  #signup-button-body{
    width:100%;
    height:50px;


  }
  #signup-button-box{
    width:70%;
    margin:auto;
    height:40px;
  }
  #signup-button{
    width:100%;
    outline:none;
    height:100%;
    color:white;
    background: #4899ec;
    border:1px solid black;
    border-radius: 10px;
    font-size:16px;
    font-family: arial;
  }
  #login-signup-button-body{
    width:90%;
    border: 1px solid #b9abab;
    border-radius: 10px;
    margin:auto;
    height:160px;
    margin-top:30px;
    padding-top:50px;
  }

</style>


    <div id="body-container">
      <div id="login-signup-button-body">
      <div id="login-button-body">
        <div id="login-button-box">
          <button class="bg-primary" id="login-button" style="text-transform:capitalize;border:none;font-weight:bold;">User Login</button>
        </div>
      </div>


    </div>
    <br>



  <script>

function fun_faculty(){

  $("#faculty-login-form-button").hide();
  $("#faculty-login-form-spinner-button").show();
  console.log("fdfs");
 window.location.href="faculty-login.php";



}



  </script>
  </center>

    <style>

      #login-signup-form-body{
        position:absolute;

        width: 100%;
  height: 490px;
  top:-60px;
  background:white;
  z-index: 2;
  opacity: 0;
  transform: rotate3d(0.3, .2, .2, 0deg) scale(0);
  transition: all ease 0.5s;
  margin-top:50px;
      }
      #login-form-body{
        width:90%;
        height:100%;

        margin:auto;
        padding-top:5px;
        border-radius: 10px;

      }
      #login-id-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #login-id{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #login-password-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #login-password{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;
      }
      #login-form-submit-box{
        width:90%;
        height:50px;
        margin:auto;

      }
      #login-form-submit{
        width:100%;
        height:50px;
        outline:none;
        background:#4899ec;
      color: white;
      border-radius: 10px;
      border:1px solid black;
      }

      #signup-form-body{
        width:90%;
        height:110%;
        border:1px solid black;
        margin:auto;
        padding-top:5px;
        border-radius: 10px;

      }
      #signup-email-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #signup-email{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #signup-address-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #signup-address{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #signup-phoneno-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #signup-phoneno{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #signup-username-box{
        width:90%;
        height:50px;
        margin:auto;
      }

      #signup-username{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }

      #signup-branch-box{
        width:90%;
        height:50px;
        margin:auto;
      }

      #signup-branch{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #signup-year-box{
        width:90%;
        height:50px;
        margin:auto;
      }

      #signup-year{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }

      #signup-insta-box{
        width:90%;
        height:50px;
        margin:auto;
      }

      #signup-insta{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }

      #signup-password-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #signup-password{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;
      }
      #signup-form-submit-box{
        width:90%;
        height:50px;
        margin:auto;

      }
      #signup-form-submit{
        width:100%;
        height:50px;
        outline:none;
        background:#4899ec;
      color: white;
      border-radius: 10px;
      border:1px solid black;
      }
      #signup-otp-body{
        width:90%;
        height:100%;
        border:1px solid black;
        margin:auto;
        padding-top:5px;
        border-radius: 10px;

      }
      #insta-profile-body{
          width:90%;
          height:100%;
          border:1px solid black;
          margin:auto;
          padding-top:5px;
          border-radius: 10px;

      }
      #signup-otp-box{
        width:90%;
        height:50px;
        margin:auto;
      }
      #signup-otp{
          width:100%;
          height:50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border:1px solid black;
          outline:none;

      }
      #signup-otp-form-submit-box{
        width:90%;
        height:50px;
        margin:auto;

      }
      #signup-otp-form-submit{
        width:100%;
        height:50px;
        outline:none;
        background:#4899ec;
      color: white;
      border-radius: 10px;
      border:1px solid black;
      }


          @media screen and (min-width:700px){

          #login-form-body{
            width:30%
          }
          #login-signup-button-body{
width:30%;
          }

          }

          @media screen and (max-width:800px){

            #login-form-body{
              width:45%
            }
            #login-signup-button-body{
       width:45%;
            }

          }

                    @media screen and (max-width:700px){

                      #login-form-body{
                        width:90%;
                      }
                     #login-signup-button-body{
  width:90%;
                     }

                    }



    </style>
    <script>
    $(document).ready(function(){




      <?php
      if(isset($_SESSION['new-user'])){

        ?>
        $("#signup-form-body").show();
        $("#insta-profile-body").hide();
        $("#login-signup-form-body").css("opacity","1");
        $("#login-signup-form-body").css("transform","none");
        <?php
      }
      else{

      ?>

      $("#login-form-body").show();
      $("#login-signup-form-body").css("opacity","1");
      $("#login-signup-form-body").css("transform","none");
      <?php

    }

       ?>
      $("#login-button").click(function(){
        $("#login-form-body").show();
        $("#login-signup-form-body").css("opacity","1");
        $("#login-signup-form-body").css("transform","none");
      })
      $("#close-login-form").click(function(){
        $("#login-form-body").hide();
        $("#login-signup-form-body").css("opacity","0");
        $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })

      $("#signup-button").click(function(){
        $("#signup-form-body").show();
        $("#signup-with-google-body").show();
        $("#insta-profile-body").hide();
        $("#login-signup-form-body").css("opacity","1");
        $("#login-signup-form-body").css("transform","none");
      })

      $("#forgotten-password-button-text").click(function(){
        $("#forgotten_password_body").show();
        $("#forgot_password_email_body").show();
        $("#login-form-body").hide();
        $("#forgotten_password_body").css("opacity","1");
        $("#forgotten_password_body").css("transform","none");

      })

      $("#close-signup-form").click(function(){
          $("#signup-error").text(" ");
        $("#signup-form-body").hide();
        $("#login-signup-form-body").css("opacity","0");
        $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })
      $("#close-signup-google-form").click(function(){

        $("#signup-with-google-body").hide();
        $("#login-signup-form-body").css("opacity","0");
        $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })

      $("#close-forgot-password-button").click(function(){
        $("#forgot-password-error").text(" ");
        $("#forgotten_password_body").hide();
        $("#forgot_password_email_input").val("");
        $("#forgot_password_otp_input").val("");
        $("#forgot_password_password_input").val("");
        $("#forgot_password_otp_body").hide();
        $("#forgot_password_email_body").hide();
        $("#forgot_password_password_body").hide();
        $("#forgotten_password_body").css("opacity","0");
        $("#forgotten_password_body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
        $("#login-form-body").show();
        $("#login-signup-form-body").css("opacity","1");
        $("#login-signup-form-body").css("transform","none");
      })
      $("#close-signup-otp-form").click(function(){
      //  $("#image-input-body").hide();
      $("#remove-img").hide();
      $("#image-display").attr("src","");
      $("#image-preview").hide();
      $("#image-input-body").hide();
      $("#continue-after-pic").hide();
      $("#continue-after-pic-loading").hide();
      $("#mage-upload-id").val("");
      $("#signup-otp-body").hide();
      $("#signup-error").text(" ");
      $("#image-upload-id").val("");
      $("#login-signup-form-body").css("opacity","0");
      $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })
      $("#close-signup-profile-form").click(function(){
      //  $("#image-input-body").hide();
        $("#remove-img").hide();
        $("#image-display").attr("src","");
        $("#image-preview").hide();
        $("#image-display2").attr("src","");
        $("#image-preview2").hide();
        $("#image-input-body").hide();
      //  $("#continue-after-pic").hide();
        $("#continue-after-pic-loading").hide();
      //  $("#mage-upload-id").val("");
        $("#signup-otp-body").hide();
        $("#signup-error").text(" ");
        $("#image-upload-id").val("");
        $("#image-upload-id2").val("");
        $("#login-signup-form-body").css("opacity","0");
        $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })
      $("#close-signup-insta-body").click(function(){
        $("#insta-profile-body").hide();
        $("#signup-otp-body").hide();
        $("#signup-error").text(" ");
        $("#login-signup-form-body").css("opacity","0");
        $("#login-signup-form-body").css("transform","rotate3d(0.3, .2, .2, 0deg) scale(0)");
      })

    })


    var user_name

    var user_password


    function signup_form_submit(){



      user_name=$("#signup-username").val();
      user_name=user_name.toLowerCase()
      user_name=user_name.trim();
      if(user_name.length==0){
      $("#signup-error").text("enter your name")
        return false;
      }

    user_password=$("#signup-password").val();
    user_password=user_password.trim();
    if(user_password.length==0){
    $("#signup-error").text("enter password");
    return false;
    }
    if(user_password.length<=3){
    $("#signup-error").text("short password");
    return false;
    }

    submitDataAfterOtp();

  return false;

  }




  function showSignupForm(){

  $("#signup-form-body").show();
  $("#insta-profile-body").hide();
  $("#signup-error").text("Enter valid insta username");

  }



        function submitDataAfterOtp(){




          formData= new FormData();
          formData.append('username',user_name);
          formData.append('userpassword',user_password);

          formData.append('signup_submit','signup_submit')
          //$("#bla").attr('src',comImage);

          $("#signup-form-submit-box").hide();
          $("#loading-image-body").show();

          $.ajax({
          type:'POST',
          url:'login-signup.php',
          async:false,
          contentType:false,
          cache:false,
          processData: false,
          data:formData,
          success:function(data,textStatus){


           if(data==1){
             console.log(data)
             console.log("okk")


      // window.location.href="index.php";
           }

           else{
             document.getElementById("continue-after-pic-loading").style.display = "none";
             document.getElementById("continue-after-pic").style.display = "block";
                 $("#uploading-content-body-text").html("something went wrong.. try again...");
           $("#signup-error").text(data);
           $("#signup-form-submit-box").show();
           $("#loading-image-body").hide();
            console.log(data);

           }

          }

          })

        }




  function login_form_submit(){


      var user_id=$("#login-id").val();
      user_id=user_id.trim()

      if(user_id.length==0){
        $("#login-error").text("enter valid email id");
        return
      }
      var user_password=$("#login-password").val();
      user_password=user_password.trim();

      if (user_password.trim().length==0){
        $("#login-error").text("enter password");
        return
      }
      if(user_password.length<=3){
      $("#login-error").text("wrong password");
      return
      }
      $("#loading-image-body").show();


      $.ajax({
      type:'POST',
      url:'login-signup.php',
      data:{'userid':user_id,'userpassword':user_password,'login_submit':'login_submit'},
      success:function(data,textStatus){
       if(data==1){

         <?php if(isset($_GET['delivery-charges'])){?>
          history.back();
           <?php }
           else{?>
        window.location.href="index.php";
        <?php }?>
       }
       else{
       $("#login-error").text(data);
       $("#loading-image-body").hide();
       $("#signup-form-submit-box").show();
       }
      }

      })


    }



    </script>




    <div id="login-signup-form-body">

      <div id="loading-image-body" style="display: none;width:100%;position:absolute;left:0;right:0;bottom:0;top:0;margin:auto;height:100%;z-index:2;">
      <div id="loading-image-box"  style="position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        width: 82%;
        border-radius: 10px;
        height: 284px;
        background: white;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
        <div class="spinner-border text-primary" style="    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;">

        </div>
        <span style="width:100%;font-size:15px;font-family: arial;position:absolute;bottom:10px;text-align:center;font-weight:bold;">wait a sec......<span>
      </div>
    </div>
      <div id="login-form-body" style="display:none;    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
        <div id="close-login-button" style="width:98%;text-align:right;"><div class="material-icons" id="close-login-form" style="width:20px;font-size:25px;cursor:pointer;">close</div></div>
        <div id="login-text" style="font-weight:bold;width:100%;font-size:18px;font-family:arial;text-align:center;">User Login</div><br>
        <div id="login-error" style="width:100%;font-size:15px;font-family:arial;text-align:center;color:red;"></div><br>
        <form action="#" onsubmit="login_form_submit(); return false;">
          <div id="login-id-box">
      <input type="email" placeholder="Enter Email" id="login-id" name="login-id" required>
    </div><br>
      <div id="login-password-box">
      <input type="password" placeholder="Enter Password" id="login-password" name="password" required>
    </div><br>
    <div id="login-form-submit-box">
      <input type="submit" name="login-form-submit" id="login-form-submit" style="background:#0d6efd;border:none;font-weight:bold;" value="Continue">
    </div>
      </form>
      <br>
      <!--
      <div id="forgotten-password-body-text">
        <center>
        <div id="forgotten-password-button-text" style="color:#0d6efd;width:fit-content;border:none;font-weight:bold;" onclick="forgot_password_form()">
          Forgot Password?
        </div>
      </div> -->
      <center><div style="font-weight:bold;font-size:15px;">or</div></center>
      <center>
        <script>

        function loginWithGoogle(){

          $("#login-with-google").hide();
          $("#login-with-google-loading").show();


        }

        </script>
    <a href="login-with-google.php" onclick="loginWithGoogle()">
    <div id="login-with-google-body" style="width:70%;min-width:236px;height:45px;position:relative;margin:auto;padding:10px;border:1px solid gray;border-radius:10px;margin-top:15px">
      <div id="google-logo" style="width:29%;Height:20px;float:left;text-align:right;">
        <img src="photos/google-logo.png" style="width:20px;height:20px;float:right;">

      </div>
      <div id="login-with-google" style="width:70%;float:left;text-align:left;padding-left:10px;font-weight:bold;">
          Login with Google
      </div>
      <div id="login-with-google-loading" style="display:none;width: 70%;
  float: left;
  text-align: left;
  padding-left: 50px;
  font-weight: bold;
  /* padding: 0px; */
  margin-top: -4px;">
          <div class="spinner-border" style="color:black;"></div>
      </div>
    </div>
  </a>
  </center>


    </div>



  <div id="forgotten_password_body" style="display:none;    width: 90%;
    height:400px;
    border: 1px solid black;
    margin: auto;
    padding: 5px;
    border-radius: 10px;">
    <center>

    <div id="forgot_password_form_body">
      <div id="close-forgot-password-button" style="width:98%;text-align:right;"><div class="material-icons" id="close-forgot-password-form" style="width:20px;font-size:25px;cursor:pointer;">close</div></div>
      <div id="forgot-password-text" style="font-weight:bold;width:100%;font-size:18px;font-family:arial;text-align:center;">Create New Password Keep Simple</div><br>
      <div id="forgot-password-error" style="width:100%;font-size:15px;font-family:arial;text-align:center;color:red;"></div><br>

                <div id="forgot_password_email_body">

                <input type="email" id="forgot_password_email_input" placeholder="Enter Email Id" style="width:90%;
          height: 50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border: 1px solid black;
          outline: none;
          "   />
                <br><br>
                <button style="    width: 90%;
          height: 50px;
          outline: none;
          background: #0d6efd;
          color: white;
          border-radius: 10px;
          border:none;font-weight:bold;" onclick="new_password_email()">Continue</button>
              </div>

              <div id="forgot_password_otp_body" style="display:none;">

              <input type="number" id="forgot_password_otp_input" placeholder="Enter OTP" style="width:90%;
        height: 50px;
        border-radius: 10px;
        font-size: 16px;
        font-family: arial;
        border: 1px solid black;
        outline: none;
        "   />
              <br><br>
              <button style="    width: 90%;
        height: 50px;
        outline: none;
        background: #0d6efd;
        color: white;
        border-radius: 10px;
        border:none;font-weight:bold;" onclick="new_password_otp()">Continue</button>
            </div>


              <div id="forgot_password_password_body" style="display:none;">
                <div id="forgot_password_password_body">
                <input type="password" id="forgot_password_password_input" placeholder="Create New Password" style="width:90%;
          height: 50px;
          border-radius: 10px;
          font-size: 16px;
          font-family: arial;
          border: 1px solid black;
          outline: none;
          " />
                <br><br>
                <button style="    width:90%;
          height: 50px;
          outline: none;
          background: #0d6efd;
          color: white;
          border-radius: 10px;
          border:none;font-weight:bold;" onclick="new_password_password()">Continue</button>
              </div>
              </div>
            </center>
            </div>




    <?php if(isset($_SESSION['new-user'])){ ?>



    <div id="signup-form-body">
       <div class="material-icons" id="close-signup-form" style="width:98%;text-align:right;font-size:25px;cursor:pointer;">close</div>
      <div id="signup-text" style="width:100%;font-size:18px;font-family:arial;text-align:center;font-weight:bold;">Create New Account</div><br>
      <div id="signup-error" style="width:100%;font-size:15px;font-family:arial;text-align:center;color:red;"></div><br>
      <form  onsubmit="signup_form_submit(); return false;">

        <div id="signup-username-box">
    <input type="text" placeholder="Enter Your Name" id="signup-username" name="signup-name" required>
  </div><br>



<!--
  <div id="signup-email-box">
    <input type="email" placeholder="Enter Email Id" id="signup-email" name="signup-email" autocomplete="username" required>
  </div><br>

-->




    <div id="signup-password-box">
    <input type="password" placeholder="Create Your Password (keep simple)" id="signup-password" name="signup-password" required>
  </div><br>


  <div id="loading-image-body" style="display: none;width:100%;position:absolute;left:0;right:0;bottom:0;top:0;margin:auto;height:100%;z-index:2;">
  <div id="loading-image-box"  style="position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
    width: 82%;
    border-radius: 10px;
    height: 284px;
    background: white;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
    <div class="spinner-border text-primary" style="    margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  position: absolute;">

    </div>
    <span style="width:100%;font-size:15px;font-family: arial;position:absolute;bottom:10px;text-align:center;font-weight:bold;">wait a sec......<span>
  </div>
  </div>

  <div id="signup-form-submit-box">
    <input type="submit" name="signup-form-submit" id="signup-form-submit" style="background:#0d6efd;border:none;font-weight:bold;"value="Continue">
  </div>
    </form>
  </div>
    <?php

    }
    else{
      ?>
      <script>

      function loginWithGoogle(){

        $("#login-with-google").hide();
        $("#login-with-google-loading").show();


      }
      function signupWithGoogle(){

        $("#signup-with-google").hide();
        $("#signup-with-google-loading").show();


      }

      </script>
      <div id="signup-with-google-body" style="display: none;width:90%;height:280px;border:1px solid black;margin:auto;border-radius:10px;">
        <div class="material-icons" id="close-signup-google-form" style="width:98%;text-align:right;font-size:25px;cursor:pointer;">close</div>
        <div id="signup-text" style="width:100%;font-size:18px;font-family:arial;text-align:center;font-weight:bold;">Create New Account</div><br>


        <center>
      <a href="login-with-google.php" onclick="signupWithGoogle()">
      <div id="login-with-google-body" style="width:286px;height:45px;position:relative;margin:auto;padding:10px;border:1px solid gray;border-radius:10px;margin-top:30px;">
        <div id="google-logo" style="width:29%;Height:20px;float:left;text-align:right;">
          <img src="photos/google-logo.png" style="width:20px;height:20px;float:right;">

        </div>
        <div id="signup-with-google" style="width:70%;float:left;text-align:left;padding-left:10px;font-weight:bold;">
            Sign in with Google
        </div>
        <div id="signup-with-google-loading" style="display:none;width: 70%;
    float: left;
    text-align: left;
    padding-left: 50px;
    font-weight: bold;
    /* padding: 0px; */
    margin-top: -4px;">
            <div class="spinner-border" style="color:black;"></div>
        </div>
      </div>
    </a>
    </center>
      </div>

<?php }
?>



  <div id="image-input-body" style="display:none;position:relative;margin:auto;border:1px solid black;width:90%;border-radius:5px;padding:15px;margin-top:10px;height: 740px;">
                  <div class="material-icons" id="close-signup-profile-form" style="width:98%;text-align:right;font-size:25px;cursor:pointer;">close</div>

                <div id="image-preview" style="width:200px;height:200px;display:none;position: relative;border: 1px solid white;margin-top: 5px;margin:auto;">
                  <img src="" id="image-display" style="border:1px solid black;border-radius:100px;width:100%;height:100%;position:absolute;top: 0;bottom: 0;left: 0;right: 0;object-fit:contain;">

                </div>
                <div id="remove-img" style="color:red;display:none;">

                  <center>If your pic is not showing fit in this container then you can crop and reupload image otherwise you can continue  </center>
                </div>

              <center>

                    <label for="image-upload-id" style="width:90%;height: 43px;border: 1px solid black;background:green;color: white;border-radius: 15px;padding: 9px;font-weight: bold;font-size: 16px;margin-top: 6px;">Add Profile Img</label>

                      <input type="file" accept="image/*" style="display:none;" name="image-file" id="image-upload-id" /></br>
                    <br>


              </center>


              <div id="image-preview2" style="width:200px;height:200px;display:none;position: relative;border: 1px solid white;margin-top: 5px;margin:auto;">
                <img src="" id="image-display2" style="border:1px solid black;border-radius:100px;width:100%;height:100%;position:absolute;top: 0;bottom: 0;left: 0;right: 0;object-fit:contain;">

              </div>


            <center>

                  <label for="image-upload-id2" style="width:90%;height: 60px;border: 1px solid black;background:green;color: white;border-radius: 15px;padding: 9px;font-weight: bold;font-size: 16px;margin-top: 6px;">Add Id Card or any proof of college (only img)</label>

                    <input type="file" accept="image/*" style="display:none;" name="image-file2" id="image-upload-id2" /></br>
                  <br>
                  <div id="uploading-content-body-text" style="font-weight:bold;color:green;font-size:13px;"></div>

                  <button id="continue-after-pic" onclick="showSignupOtpForm(submitDataAfterOtp)" style="width:95%;height:50px;outline:none;background:#0d6efd;color:white;border-radius:10px;border:none;font-weight:bold;" >Continue</button>
                  <div id="continue-after-pic-loading" style="display:none;width:95%;height:50px;outline:none;background:#0d6efd;color:white;border-radius:10px;border:none;font-weight:bold;">
                    <div class="spinner-border" style="margin-top:10px;"></div>
                  </div>

            </center>



    </div>


  <div id="insta-profile-body" style="display:none;" style="width:100%">
    <div class="material-icons" id="close-signup-insta-body" style="width:98%;text-align:right;font-size:25px;cursor:pointer;">close</div>

    <div id="insta-profile-pic-body">

        <center><img src="" id="insta-profile-pic" style="display:none;border-radius: 51%;width: 150px;height: 150px;border:1px solid black;"></center>
        <center><div id="insta-profile-pic-spinner" style="border-radius: 50%;width: 150px;height: 150px;position:relative;border:1px solid black;"><div  class="spinner-border"style="width:30px;height:30px;font-size:10px;position:absolute;margin:auto;top:0;left:0;right:0;top:0;bottom:0;color:blue;">

    </div>

    </div>
    </center>

    <br>
    <div id="insta-username-for-verification" style="width:100%;height:30px;font-size:16px;font-family:arial;text-align:center;"></div><br>
    <div id="insta-verify-error" style="width:100%;font-size:14px;font-family:arial;text-align:center;color:red;"></div><br>
    <div id="please-wait-insta-loading" style="font-size:20px;font-style:arial;text-align:center;">Please wait....</div>
    <div id="verify-button-body" style="width:100%;height:200px;display:none;">
      <div id="yes-button-body" style="width:100%;height:100px;float:left;">
        <center><button id="yes-botton" onclick="showSignupOtpForm(submitDataAfterOtp" style="width:70%;height:50px;outline:none;background:#0d6efd;color:white;border-radius:10px;border:none;font-weight:bold;" >Continue</button></center>

      </div>
      <div id="no-button-body" style="float:left;width:100%;height:100px;">
        <center><button id="no-botton" onclick="showSignupForm()" style="width:70%;height:50px;outline:none;background:red;color:white;border-radius:10px;border:none;font-weight:bold;" >No it's not me</button></center>

      </div>
    </div>
</div>
</div>



  <div id="signup-otp-body" style="display:none;margin-top:10px;">
    <div class="material-icons" id="close-signup-otp-form" style="width:98%;text-align:right;font-size:25px;cursor:pointer;">close</div>
    <div id="signup-otp-text" style="width:100%;font-size:16px;font-family:arial;text-align:center;font-weight:bold;">OTP | Check Your Email</div><br>
    <div id="signup-otp-error" style="width:100%;font-size:14px;font-family:arial;text-align:center;color:red;"></div><br>
    <form action="#" onsubmit="signup_otp_form_submit(); return false;">
      <div id="signup-otp-box">
  <input type="number" placeholder="Enter OTP Here" id="signup-otp" name="signup-otp" required>
</div><br>

<div id="signup-otp-form-submit-box">
<div id="otp-spinner-body" style="display:none;width:100%;height:50px;outline:none;
    background: #4899ec;
    color: white;
    border-radius: 10px;
    border: 1px solid black;position:relative;"> <div class="spinner-border" style="position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;"></div> </div>
  <input type="submit" name="signup-otp-form-submit" id="signup-otp-form-submit"  style="background:#0d6efd;border:none;font-weight:bold;"value="Continue">
</div>
  </form>
</div>


</div>




    </div>








  </body>
</html>
