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
  <style>


  a{
    -webkit-highlight-tap-color:transparent;
    text-decoration:none;
    color:white;


  }


  </style>

  <style media="screen">

  body{

  color:#6c6969; !important;

  }
  form {
    display: flex;
    flex-direction: column;
    width:98%;
    margin: 0 auto;
  }

  label {
    margin-top: 10px;
    font-weight: bold;
  }

  input[type="file"],
  textarea,
  select,
  input[type="number"],
  input[type="color"] {
    margin-top: 5px;
    padding: 5px;
    font-size: 16px;
    border-radius: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    outline:none;
    border:1px solid black;
    padding:15px;
  }

  textarea {
    resize: vertical;
    border-radius: 10px;
    outline:none;

    border:1px solid black;
  }

  button[type="submit"] {
    margin-top: 20px;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border-radius: 10px;

  }

  button[type="submit"]:hover {
    background-color: #0062cc;
  }

  input{

  border-radius: 10px;
  outline:none;
  height:40px;
  border:1px solid black;
  padding:15px;
  height:50px;



  }

  canvas {
    background-color: transparent;
  }


  </style>



<?php   include('header.php'); ?>

  <body id="body-container" style="width:100%;">


        <script>
        function test(){

          $("#continue-loading").show();
          $("#continue").hide();
          window.location="list-new-item.php";
        }

        function category(){

          $("#show-category-form").show();


        }
        function close_category(){

          $("#show-category-form").hide();
            $("#error-val").text("");
            $("#product-category").val("")


        }





        function submit_data(){

            var product_category=$("#product-category").val().trim().toLowerCase();
          if(product_category === "") {
            $("#error-val").text("Enter Category");
            return false;
          }


        var formData = new FormData();

        formData.append("product_category",product_category);
        formData.append("new_category","new_category");

        $("#submit-form").hide();
        $("#submit-loading").show();


        $.ajax({
                type:'POST',
                url:'ajax_backend.php',
                async:false,
                contentType:false,
                cache:false,
                processData: false,
                data:formData,
                success:function(data,textStatus){
                  console.log(data)
                  if(data==true){
                    $("#submit-form").show();
                    $("#submit-loading").hide();
                      $("#error-val").text("Created");
                      $("#error-val").css({'color':'green'});


                  }
                  else{
                    $("#submit-form").show();
                    $("#submit-loading").hide();

                    $("#error-val").text("Already Exist");
                      $("#error-val").css({'color':'red'});
                    return false;
                  }
                }


        })

          return false;



        }
        </script>



        <center>

          <div id="upload-item-body" style="margin-top:100px;">


          <div id="show-category-form" style="display:none;width: 90%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
    padding: 6%;
    border-radius: 10px;
    padding-top: 45px;
    height: 400px;position:absolute;margin:auto;left:0;right:0;background:White;">

            <form onsubmit="submit_data(); return false; " >

              <label for="product-category">Create New Category</label></br>
              <input type="text" id="product-category" name="product-category" placeholder="Enter Category" required>
            </br>

              <center>
              <div id="error-val" style="color:red;font-size:15px;"></div>
            </center>
              <div id="submit-loading" style="margin-top: 20px;
              padding: 10px;
              background-color: #007bff;
              color: #fff;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              border-radius: 10px;width:100%;display:none;"><center>
              <div class="spinner-border"></div></center>

            </div>

              <button type="submit" id="submit-form">Submit</button>
              <br><br>
              <center>
              <div  id="submit-form" onclick="close_category()"style="width:50%;padding: 8px;height:40px;background:black;color:white;border-radius:10px;">Close</div>
            </center>
              <br><br>
            </form>


          </div>



                <div id="upload-new-item">

          <div id="continue-loading" style="display:none;color:white;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight: bold;
      background: #ee990b;
      color:black;">
            <span class="spinner-border" style="    margin-top: 10px;"></span>
          </div>

      <button id="continue" onclick="test()" style="color:white;width:80%;height:50px;border:none;outline:none;border-radius:10px;font-weight: bold;
  background: #ee990b;
  color:black;">List New Item</button>

    </div>

      <br>
      <div id="create-new-category">

        <center>

      <button id="continue" onclick="category()" style="color:white;width:80%;height:50px;border:none;outline:none;border-radius:10px;
        font-weight: bold;
    background: #ee990b;
    color:black;">Create New Category</button>

    </center>

      </div>



    </div>





</body>

</html>
