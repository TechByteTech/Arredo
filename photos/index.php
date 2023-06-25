<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_start();
include('cookies.php');


include("isVerified.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Google tag (gtag.js) -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F7SGNSTXEH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F7SGNSTXEH');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>BVP CONNECTS</title>
  </head>
  <body style="font-family:arial;background: #F8F8F8;color:black;margin:auto;position:relative;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
    #header-body{



      border-bottom-right-radius: 45px !important;
border-bottom-left-radius: 45px !important;
border-top-left-radius: 10px !important;
border-top-right-radius: 10px !important;
width: 99% !important;
height: 210px !important;
border: 34px !important;
margin: auto;
background: #1a73e8 !important;
color: white !important;
margin-top: 2px !important;
    }
    </style>
    <?php
    include("responsive.php");
    include("header.php");
    include("mysql-connection.php");
    if(isset($_SESSION['userdata'])){
    $email=$_SESSION['userdata'];

    $select_userdata_for_temp=mysqli_query($con,"select * from userdata where email='$email' ");
    $fetch_data=mysqli_fetch_array($select_userdata_for_temp);


  }




    ?>




    <div class="" id="main-body">

<div id="sub-header" style="width:100%;position:absolute;top:60px;right:0;margin:auto;">
<div style="width:60%;padding-left:35px;float:left;font-weight:bold;color:White;font-size:20px;"><span style="color:black;font-size: 25px;">Hello,</span><br><span style="color:white;text-transform: capitalize;font-size: 27px;"><?php
if(isset($_SESSION['userdata']))
echo $fetch_data['username'];
else
echo "Guest";

?></span> </DIV>

<div style="width:40%;float:left;font-weight:bold;color:White;font-size:20px;">
  <div style="float:right;    margin-right: 40px;">
<img src="<?php
if(isset($_SESSION['userdata']))
echo "photos/".$fetch_data['profile_picture'];
else
echo "guest-user.png";

?>" style="width: 80px;
    height: 80px;
    border-radius: 50px;
    margin-top: 5px;
    object-fit: contain;">
  </div>
</div>
</div>



      <?php

      include("search.php");

      ?>
      <div id="middle-body">

<div style="color:black;font-weight:bold;font-size:20px;margin-left:10px;margin-top:32px;height:30px;">

<div style="width:60%;float:left;">
  <span style="text-align:right;">Explore Categories</span>
</div>

<div style="width:40%;float:left;text-align:right;padding:5px;font-size:14px;padding-right:10px;color:#0d6efd;">
  <span syle="text-align:right;"><a href="explore.php" style="    color: #0d6efd;">See all</span>

</div>



</div>


      <div id="study-content-body" style="margin-top:0px;width:100%;height:420px;">
        <?php if(isset($_SESSION['userdata']) && isset($_SESSION['facultydata'])){
          ?>
          <center>
          <div id="profile-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;">


            <a href="result.php"><div type="button" name="button" style="width: 100%;
      padding: 10px;
      background:white;
      height:200px;
      color: white;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
      border-radius:15px;">

  <div>
      <img src="result-logo.png" style="width: 100px;
          height: 100px;

          margin-top: 5px;
          object-fit: contain;">
  </div>

  <br>
  <div style="color:black;font-weight:Bold;">

    Result

  </div>

    </div></a>
          </div>

      <?php
    }
       elseif(isset($_SESSION['userdata'])){
         ?>
         <center>
        <div id="profile-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;">


          <a href="result.php"><div type="button" name="button" style="width: 100%;
    padding: 10px;
    background:white;
    height:200px;
    color: white;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    border-radius:15px;">

<div>
    <img src="result-logo.png" style="width: 100px;
        height: 100px;

        margin-top: 5px;
        object-fit: contain;">
</div>

<br>
<div style="color:black;font-weight:Bold;">

  Result

</div>

  </div></a>
        </div>

      <?php
    }else{
      ?>
      <center>
      <div id="profile-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;">


        <a href="result.php"><div type="button" name="button" style="width: 100%;
  padding: 10px;
  background:white;
  height:200px;
  color: white;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
  border-radius:15px;">

<div>
  <img src="result-logo.png" style="width: 100px;
      height: 100px;

      margin-top: 5px;
      object-fit: contain;">
</div>

<br>
<div style="color:black;font-weight:Bold;">

Result

</div>

</div></a>
      </div>

      <?php
    }

      ?>
      <div id="library-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;">


        <a href="library.php"><div type="button" name="button" style="width: 100%;
  padding: 10px;
  background:white;
  height:200px;
  color: white;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
  border-radius:15px;">

<div>
  <img src="library-logo.png" style="width: 100px;
      height: 100px;

      margin-top: 5px;
      object-fit: contain;">
</div>

<br>
<div style="color:black;font-weight:Bold;">

Library

</div>

</div></a>

</div>


<div id="library-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;margin-top:10px;">


  <a href="chatbox.php"><div type="button" name="button" style="width: 100%;
padding: 10px;
background:white;
height:200px;
color: white;
box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
border-radius:15px;">

<div>
<img src="chatbox-logo.png" style="width: 60px;
height: 100px;

margin-top: 5px;
object-fit: contain;">
</div>

<br>
<div style="color:black;font-weight:Bold;">

Chat box

</div>

</div></a>

</div>

<div id="library-body" style="float:left;width:50%;height:200px;padding:5px;padding-top:10px;margin-top:10px;">


  <a href="attendance-home.php"><div type="button" name="button" style="width: 100%;
padding: 10px;
background:white;
height:200px;
color: white;
box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
border-radius:15px;">

<div>
<img src="attendance-logo.png" style="width: 100px;
height: 100px;

margin-top: 5px;
object-fit: contain;">
</div>

<br>
<div style="color:black;font-weight:Bold;">

Attendance

</div>

</div></a>

</div>



      </div>
        <center>



    </center>
  </div>
    <br>
      <style>
      a{
        color:black;
      }
      </style>

      <script>

      var i = 0;
var txt = 'A Social Network for BVP!';
var speed = 70;
var sum="";
function typeWriter() {
  if (i < txt.length) {
    sum=sum+txt.charAt(i);
    $("#page-heading").html(sum);
    i++;
    setTimeout(typeWriter, speed);
  }
}

var i2 = 0;
var txtArr = ['Search Your Friends Here...','Connect With Seniors And Juniors...','Search By Name....'];
var speed2 = 100;
var sum2="";
var status=0;
function placeholder() {
  txt2=txtArr[status];
  if (i2 < txt2.length && status<3) {

    sum2=sum2+txt2.charAt(i2);
    $("#search-input").attr('placeholder',sum2);
    i2++;

    setTimeout(placeholder, speed2);
  }
  else{
    i2=0;
    sum2=""
    status++;
    if(status==3){
      return;
    }
      setTimeout(placeholder, speed2);
  }
}
      $(document).ready(function(){
          typeWriter();
          placeholder();
          $("#profile-body").animate(
            {top: '10px'},"slow"
          );

      });



      </script>
      <?php

      $colors=array(array("#04AA6D;","white;"),array("#fff4a3;","black;"),array("#d7baba;","black;"),array("#ffc0c7;","black;"),array("#d9eee1;","black;"));
      $random=rand(0,4);
      $background=$colors[$random][0];
      $color=$colors[$random][1];

      ?>


      <br>

      <?php


       // $email=$_SESSION['email'];
       $check_num_userdata=mysqli_query($con,"select * from userdata");
       $no_of_students=mysqli_num_rows($check_num_userdata);


       ?>

       <style media="screen">

     #top-search-body{
  overflow-y: scroll;
  scrollbar-width: none; /* Firefox */
  -ms-overflow-style: none;  /* Internet Explorer 10+ */
}
#top-search-body::-webkit-scrollbar { /* WebKit */
  width: 0;
  height: 0;
}

#library-egate-body{
overflow-y: scroll;
scrollbar-width: none; /* Firefox */
-ms-overflow-style: none;  /* Internet Explorer 10+ */
}
#library-egate-body::-webkit-scrollbar { /* WebKit */
width: 0;
height: 0;
}
       </style>


<script>

$(document).ready(function(){

  $("#loading-top-searches").show();
  $("#loading-library-egate").show();

  $.ajax({
  type:'POST',
  url:'ajax_backend.php',
  data:{'top-searches':'top-searches'},
  success:function(data,textStatus){
    $("#loading-top-searches").hide();
    console.log(data)
    arr=JSON.parse(data);
    i334=0
    while(i334<arr.length){

    $("#top-search-body").append(`<a href="profile.php?userid=${arr[i334][0]}">
 <div id="top-search-profile-body" style="padding-top:5px;width:100px;height:80px;padding-left:10px;display:inline-block;">
 <center>
     <div id="top-search-profile-body-img" style="width:80px;height:60px;object-fit:contain;">
       <img src="photos/${arr[i334][2]}" style="width:60px;height:60px;border-radius:50%;object-fit:contain;">
     </div>

     <div id="top-search-profile-body-name" style="font-size:13px;width:80px;height:20px;overflow:hidden;text-transform:capitalize;">
       ${arr[i334][1]}
     </div>
     <div id="top-search-profile-body-name" style="font-size:11px;width:80px;text-align:center;font-weight:bold;">
       #${i334+1}
     </div>
     </center>

   </div>
 </a>`);


 i334++;


}

  }







  })







})


</script>


<div id="top-search-text" style="font-weight:bold;padding-left:10px;">
    Top 10 Searches
  </div>
       <div id="top-search-body" style="    overflow: hidden;
    overflow-x: auto;
    width: 100%;white-space:nowrap;height:130px;">


         <div id="loading-top-searches" class="spinner-border" style="    margin-left: 20px;
    margin-top: 15px;">
         </div>











       </div>

<br>




      <div id="proflie-body-start" style="padding-left:10px;font-weight:bold;">BVP Students(<?php echo $no_of_students;?>)</div>
      <div id="profile-body" style="height:640px;position:relative;top:0px;;">
       <?php



         $select_userdata=mysqli_query($con,"select * from userdata where isfaculty=0 order by rand() limit 6");
         $branch=array("ICE","IT","CS","EEE","ECE");
         $year=array("st","nd","rd","th");
         while($data=mysqli_fetch_array($select_userdata)){
        ?>

        <a href="profile.php?userid=<?php echo $data['id'];?>">
        <div id="profile-section" style="width:50%;padding:5px;float:left;margin:auto;">
          <div id="sub-profile-section" style="width: 100%;
    margin: auto;

    border-radius: 10px;
    background: white;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);">
          <center><div id="user-profile-photo">
            <img src="photos/<?php echo $data['profile_picture'].""; ?>" style="width:100px;height:100px;border-radius:50px;margin-top:5px;object-fit:contain;">
          </div>
          <div id="user-name" style="text-transform:capitalize;font-weight:bold;height:26px;overflow:hidden;font-size: 15px;">
            <?php
            echo $data['username'];
            ?>
          </div>
          <div id="user-branch" style="font-size:12px;">
            <?php
            $branch_no=$data['branch'];
            echo $branch[$branch_no-1];

            ?>
          </div>
          <div id="user-year" style="font-size:12px;" >

            <?php
            $year_no=$data['year'];
            echo $year_no.$year[$year_no-1]." year";
            ?>
          </div>
        </center>
      </div>
        </div>
      </a>

         <?php
       }
         ?>



      </div>

    </div>




    <style>
                    body{
                        background-color:black;
                        color:white;
                    }


                    .disclaimer{
                    display:none;

                    }

                        #input-text{
                          width: 100%;
height: 300px;
border-radius: 10px;
position: relative;
margin-top: 135px;
                        }
                        #insta{
                            width:95%;
                            height:50px;
                            border-radius:10px;
                        }
                        #input{
                            width:100%;
                            height:100px;
                            border-radius:10px;
                            margin:auto;
                        }
                        #submit-form{
                            width:80%;
                            height:40px;
                            font-size:20px;
                            background-color:#0d6efd;
                            color:white;
                            margin-top:10px;
                            border-radius:10px;
                            border:none;
                        }
                    </style>
<script>

var image_status=0;

$(document).ready(function(){


$("#add-confession").click(function(){
  console.log("Fdfs");

  $("#confession-form").show();


})

$("#close-confess").click(function(){
  $("#confession-form").hide();
  var text=$("#input").val("");
  $("#image-preview").hide();
  $("#remove-img").hide();
  $("#image-display").attr('src',"");
  $("#image-upload-id").val("");
  image_status=0;
  comImage="";
  $("#confession-submit-error").css("color","red");
  $("#confession-submit-error").hide();
  $('#anonymous-user').prop('checked',false);
})

$("#image-upload-id").change(function(e){
console.log("fsdf");
filedata=event.target;
var reader=new FileReader();
reader.onload=function(){
  result=reader.result;
  compressImage(filedata.files[0]);
  $("#image-preview").show();
  $("#remove-img").show();


  $("#image-display").attr('src',result);
  image_status=1;
}

reader.readAsDataURL(filedata.files[0]);
})

$("#remove-img").click(function(){

  $("#image-preview").hide();
  $("#remove-img").hide();
  $("#image-display").attr('src',"");
  $("#image-upload-id").val("");
  image_status=0;
  comImage="";


})





})

var comImage

function compressImage(file){
       var f = file;
       var fileName = f.name.split('.')[0];
       var img = new Image();
       img.src = URL.createObjectURL(f);
       img.onload = function(){
           var canvas = document.createElement('canvas');
           canvas.width = img.width;
           canvas.height = img.height;
           var ctx = canvas.getContext('2d');
           ctx.drawImage(img, 0, 0);
           canvas.toBlob(function(blob){

                 compressedImageBlob = blob;
                 compressedImage=new Image();
                 compressedImage.src = URL.createObjectURL(compressedImageBlob);
                 $("#bla").attr('src',compressedImage.src);
                 var request = new XMLHttpRequest();
                request.open('GET',compressedImage.src, true);
                request.responseType = 'blob';
                request.onload = function() {
                    var reader = new FileReader();
                    reader.readAsDataURL(request.response);
                    reader.onload =  function(e){

                       comImage = e.target.result
                    };
                };
                request.send();

           }, 'image/jpeg', 0.2);
       }
   }


function submit_data(){


  var text=$("#input").val();
  if(text.length==0){
    $("#confession-submit-error").show();
    $("#confession-submit-error").text("._. type something ")

    return false;
  }
  $("#confession-submit-error").show();
  $("#confession-submit-error").text("uploading...");
  $("#confession-submit-error").css("color","green");
  var formdata= new FormData();
  if(image_status==0){
    formdata.append("image_data","0");
  }
  else{
    formdata.append("image_data",comImage);
  }
  if($('#anonymous-user').prop('checked')){
    formdata.append("anonymous","anonymous");
  }


  formdata.append("image_status",image_status);
  formdata.append("text",text);
  formdata.append("upload_post","upload-post");

  $.ajax({
  type:'POST',
  url:'ajax_backend.php',
  async:false,
  contentType:false,
  cache:false,
  processData: false,
  data:formdata,
  success:function(data,textStatus){

   if(data==1){
     console.log(data)
     console.log("okk")
     var text=$("#input").val("");
     $("#image-preview").hide();
     $("#remove-img").hide();
     $("#image-display").attr('src',"");
     $("#image-upload-id").val("");
     image_status=0;
     comImage="";
     $("#confession-submit-error").text("uploaded");
     $("#confession-submit-error").css("color","green");
     $('#anonymous-user').prop('checked',false);

   }
   else{
     console.log(data)
     console.log("okk")
     var text=$("#input").val("");
     $("#image-preview").hide();
     $("#remove-img").hide();
     $("#image-display").attr('src',"");
     $("#image-upload-id").val("");
     image_status=0;
     comImage="";
     $("#confession-submit-error").text("uploaded");
     $("#confession-submit-error").css("color","green");
     $('#anonymous-user').prop('checked',false);


   }

  }


  })


 return false;

}

</script>


<div id="confession-form" style="display:none;position:absolute;
              width: 100%;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
              background: white;
              border: 1px solid black;
              padding: 21px;
              height: 800px;
              z-index: 2;
              margin-top: 50px;


          ">
          <div id="close-confession-form">
            <div class="material-icons" id="close-confess" style="position: absolute;
              right: 15px;
              font-size: 30px;">
              close
            </div>
          </div>
            <div id="input-text" style="width: 100%;
              height: 700px;
              border-radius: 10px;
              position: relative;
              margin-top: 38px;
              background: #fef9f9;
              border: 1px solid #beb5b5;">

                          <center><br>
                            <div id="confession-heading" style="color:black;font-weight:bold;">
                              Share your thoughts
                            </div>

                            <?php if(!isset($_SESSION['userdata'])){ ?>
                              <div  style="font-weight:bold;font-size:13px;color:green;">
                               It will post as <span style="color:black;"> anonymous user </span> bcoz u r not logged in
                              </div>
                            <?php } ?>
                            <br>
                            <div id="confession-submit-error" style="color:red;font-weight:bold;display:none;">

                            </div>
                            <br>
                              <form method="POST" id="form" onsubmit="submit_data(); return false;"enctype="multipart/form-data" action="#">

                              <textarea id="input" style="border:1px solid black;width: 98%;
              height: 100px;
              border-radius: 10px;
              margin: auto;font-size:15px;"name="input-text" placeholder="Type here.... "></textarea>

                              <div id="image-preview" style="width:200px;height:200px;display:none;position: relative;border: 1px solid white;margin-top: 5px;">
              <img src="" id="image-display" style="max-width: 100%;max-height: 100%;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;">

            </div>
            <div id="remove-img" style="color:red;display:none;">

              <center>remove photo</center>
            </div>

                    <label for="image-upload-id" style="width:95%;height: 43px;border: 1px solid black;background:green;color: white;border-radius: 15px;padding: 9px;font-weight: bold;font-size: 16px;margin-top: 6px;border:none;">Add image (optional)</label>

                    <input type="file" accept="image/*" style="display:none;" name="image-file" id="image-upload-id"><br>
                    <?php if(isset($_SESSION['userdata'])){ ?>
                      <div id="checkbox-body" style="
                      position: relative;
                      width: 95%;
                      margin-top: 15px;">
                      <input type="checkbox" id="anonymous-user" name="anonymous-user" style="
                      width: 19px;
                      height: 20px;
                      margin-top: 10px;
                      position: absolute;
                      top: 0;
                      bottom: 0;
                      left: 5px;
                      margin: auto;
                      /* float: left; */
                      ">

                    <label for="anonymous-user" style="
                    font-weight: bold;
                    font-size: 13px;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 34px;
                    /* right: 0; */
                    margin: auto;">
                    Post as anonymous user

                    </label><br>

                  </div>
                  <?php
                    }
                  ?>
                    <center><button type="submit" id="submit-form"  name="submit-form"><div id="submit-text">POST</div><div class="spinner-border" id="spinner" style="display:none;"></div></button></center>
                    </form>
                    </center></div>
</div>


  <div>
    <div id="botton-body"  style="
    position: fixed;
  width: 100%;
  max-width: 500px;
  bottom: 26px;
  height: 50px;
  z-index:1;
  background:#0D6EFD;
  bottom:0;

    ">
    <center>
    <a href="index.php">
      <div id="add-shopping-body" style="width:20%;float:left;position:relative;">
    <div id="add-shopping"  style="

    width: 40px;
    height: 40px;
    background: #0d6efd;
    color: white;
    border-radius: 10%;
    padding-top: 10px;


">
    <img src="home-icon.png" style="width:35px;height:35px;">
    </div>
  </div>
  </a>

  <a href="shopping.php">
    <div id="profile-body" style="width:20%;float:left;position:relative;">
  <div id="add-profile"  style="

  width: 40px;
  height: 40px;
  background: #0d6efd;
  color: white;
  border-radius: 10%;
  padding-top: 10px;


  ">
  <img src="shopping-icon2.png" style="width:35px;height:35px;">
  </div>
  </div>
  </a>




  <div id="add-confessionp-body" style="width:20%;float:left;">
  <div id="add-confession" class="material-icons" style="

  font-size: 40px;
  background: #0d6efd;
  color: white;
  border-radius: 50%;
  width:40px;
  height:40px;
">
    <i class="bi bi-plus" style="font-size:45px;"></i>
  </div>
</div>


  <div id="profile-body" style="width:20%;float:left;position:relative;">
<div id="add-profile"  style="

width: 40px;
height: 40px;
background: #0d6efd;
color: white;
border-radius: 10%;
padding-top: 10px;

">
<img src="notif-icon.png" style="width:35px;height:35px;">
</div>
</div>



<a href="profile.php">
  <div id="profile-body" style="width:20%;float:left;position:relative;">
<div id="add-profile"  style="

width: 40px;
height: 40px;
background: #0d6efd;
color: white;
border-radius: 10%;
padding-top: 10px;

">
<img src="profile-icon2.png" style="width:35px;height:35px;">
</div>
</div>
</a>



    </div>
    <style>
    @media only screen and (min-width: 600px) {

      #shopping-confession-button-body{
        width:500px !important;
      }


    }
    <?php
    include("ads.php");
    ?>
  </body>
</html>
