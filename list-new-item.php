
<!DOCTYPE html>
<html lang="en" dir="ltr" style="background: #F8F8F8;">
  <head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>ARREDO</title>
  </head>
  <body style="font-family:arial;background:#F8F8F8;color:#6c6969;width:auto;margin:auto;position:relative;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>



  <?php
  session_start();

  ?>



  <body id="body-container" style="width:100%;">

<?php   include('header.php'); ?>

<br><br>
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
  border: 1px solid grey !important;
  border-radius: 10px;
  outline:none;
  border:1px solid black;
  padding:15px;
}

textarea {
  resize: vertical;
  border-radius: 10px;
  outline:none;

  border:1px solid grey;
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
border:1px solid grey !important;
padding:15px;
height:50px;



}

canvas {
  background-color: transparent;
}


</style>


<script type="text/javascript">


$(document).ready(function(){

      $("#product-cover-image").change(function(e){

          console.log("id1")

          $("#cover-image-text-loading").show();
          $("#cover-image-text").hide();


        filedata=event.target;
        var reader=new FileReader();
        reader.onload=function(){
          result=reader.result;

          if(compressImage(filedata.files[0],1)){
          //  console.log(comImage.length);

        }

        }

        reader.readAsDataURL(filedata.files[0]);

      })


      $("#add-new-image").change(function(e){
        console.log("id2");

        $("#continue-after-pic").hide();
      $("#continue-after-pic-loading").show();


      filedata=event.target;
      var reader=new FileReader();
      reader.onload=function(){
        result=reader.result;

        if(compressImage(filedata.files[0],2)){
        //  console.log(comImage.length);

      }

      }

      reader.readAsDataURL(filedata.files[0]);
    })




      })


var add_new_image=1;

var new_image_array=[];
var new_image_no=[];
var main_image=0;


  function compressImage(file, id) {
    var f = file;
    var fileName = f.name.split('.')[0];
    var img = new Image();
    img.src = URL.createObjectURL(f);
    img.onload = function () {
      var canvas = document.createElement('canvas');
      canvas.width = img.width;
      canvas.height = img.height;
      var ctx = canvas.getContext('2d');
      ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear canvas before drawing image
      ctx.drawImage(img, 0, 0);
      canvas.toBlob(function (blob) {
        compressedImageBlob = blob;
        compressedImage = new Image();
        compressedImage.src = URL.createObjectURL(compressedImageBlob);
        var request = new XMLHttpRequest();
        request.open('GET', compressedImage.src, true);
        request.responseType = 'blob';
        request.onload = function () {
          var reader = new FileReader();
          reader.readAsDataURL(request.response);
          reader.onload = function (e) {
            if (id == 1) {
              main_image = e.target.result;
              $("#show-cover-image-body").show();
              $("#main-img").attr('src', e.target.result);
              $("#main-img").show();
              $("#cover-img-icon").hide();
              main_image=e.target.result;
              $("#cover-image-text-loading").hide();
              $("#cover-image-text").show();

            } else {
              //comImage2 = e.target.result;
              console.log(add_new_image)
              $("#image-preview2").show();
              $("#add-new-image-body").append(`<div id="new-image-sub${add_new_image}" style="float:left;width:50%;
                height: 125px;">

                 <label for="product-image${add_new_image}" style="width:80%;height:80px;margin-top:0px;">
                    <div id="new-image${add_new_image}" style="width:80px;height:80px;border:1px solid black;border-radius:10px;">
                    <center>  <img src="" id="new-img${add_new_image}" style="object-fit: contain;width:77px;height:77px;display:none;"></center>

                    </div>
                  </label>
                </center>  <input type="file" id="product-cover-image${add_new_image}" name="product-cover-image${add_new_image}" style="display:none;"accept="image/*">

              <span id="new-image-text${add_new_image}" style="font-size:13px;color:red;" onclick="remove_image(${add_new_image})">remove</button></span>

              </div>`);

              $(`#new-img${add_new_image}`).attr('src', e.target.result);
              $(`#new-img${add_new_image}`).show();
              $("#add-new-image").val("");
              new_image_array.push(e.target.result);
              new_image_no.push(add_new_image);
              add_new_image=add_new_image+1;
              $("#continue-after-pic").show();
            $("#continue-after-pic-loading").hide();




            }

          };
        };
        request.send();
      }, 'image/webp', 0.1);
    }
    return true;
  }




</script>



<div id="form-body" style="width:90%;background: white;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);margin:auto;margin-top:100px;padding:10px;border-radius:10px;">
  <center><span style="color:black;font-size:20px;">List New Item</span></center><br>
  <form onsubmit="submit_data(); return false; " >
    <div id="show-cover-image-body" style="float:left;">
      <center>
      <div style="    width: 115px;
    height: 115px;">

     <label for="product-cover-image" style="width:80%;height:80px;margin-top:0px;">
        <div id="cover-image" style="width:80px;height:80px;border:1px solid black;border-radius:10px;">
        <center>  <img src="" id="main-img" style="object-fit: contain;width:77px;height:77px;display:none;"></center>
          <span class="material-icons" id="cover-img-icon"style="font-size:40px;">image</span>
        </div>
      </label>
  <input type="file" id="product-cover-image" name="product-cover-image" style="display:none;"accept="image/*">

  <span id="cover-image-text" style="font-size:13px;">  Cover Image </span>
  <div id="cover-image-text-loading" class="spinner-border" style="font-size: 10px;
    display: none;
    width: 19px;
    height: 19px;"></div>
  </div>
</center>
  </div>
  <center>
  <div id="add-new-image-body">



  </div>
</center>
  <br>

  <center>  <label for="add-new-image" style="width:80%;height:50px;"><div style="border:1px solid #979090;;width:100%;height:50px;border-radius:10px;text-align:center;padding:13px;COLOR: #484545e3;"><span id="continue-after-pic">Add More Images</span>
    <div  class="spinner-border" id="continue-after-pic-loading" style="font-size: 10px;
    display: none;
    width: 19px;
    height: 19px;" ></div> </div></label>
  </center>  <input type="file" id="add-new-image" name="add-new-image" style="display:none;"accept="image/*">


  <br>
    <label for="product-name">Product Name:</label>
    <input type="text" id="product-name" name="product-name" placeholder="Product Name" required>

    <label for="product-description">Product Description:</label>
    <textarea id="product-description" name="product-description" placeholder="Product Description" rows="4" required ></textarea>

    <label for="product-price">Product SKU:</label>
    <input type="text" id="product-sku" name="product-sku"  placeholder="Product SKU" required>

    <label for="product-price">Product Price:</label>
    <input type="number" id="product-price" name="product-price" min="0" placeholder="Product Price" step="0.01"  required>

    <label for="product-category">Product Category:</label>
    <select id="product-category" name="product-category" required>
      <option value="">Select a category</option>
      <?php

      $select_category=mysqli_query($con,"select * from category");

      while($data=mysqli_fetch_array($select_category)){
        $category_name=$data['category'];
       ?>
      <option value="electronics"><?php echo $category_name; ?></option>


      <?php

    }
       ?>
    </select>

    <label for="product-color">Product Color:</label>
    <input type="text" id="product-color" name="product-color" placeholder="Product Color"  required>
    <br>
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
  </form>


</div>


<script type="text/javascript">



function submit_data(){


  var product_name=$("#product-name");
  var product_description=$("#product-description");
  var product_price=$("#product-price");
  var product_description=$("#product-category");
  var product_color=$("#product-color");
    var product_sku=$("#product-sku");

    var product_name=$("#product-name").val().trim();
  if(product_name === "") {
    $("#error-val").text("Enter Product Name");
    return false;
  }

  var product_description=$("#product-description").val().trim();
  if(product_description === "") {
    $("#error-val").text("Enter Product Description");
    return false;
  }

  var product_sku=$("#product-sku").val().trim();
  if(product_sku === "") {
    $("#error-val").text("Enter Product SKU");
    return false;
  }

  var product_price=$("#product-price").val().trim();
  if(isNaN(product_price) || Number(product_price) <= 0) {

    $("#error-val").text("Enter Valid Price");
    return false;

  }

  var product_category=$("#product-category").val().trim();
  if(product_category === "") {

    $("#error-val").text("Select Product Category or Create Before Selecting");
    return false;

  }

  var product_color=$("#product-color").val().trim();
  if(product_color === "") {

    $("#error-val").text("Enter Product Color");
    return false;

  }
  if(main_image==0){

    $("#error-val").text("Uplaod Cover Image");
    return false;

  }
  var images= [];
    var formData = new FormData();

formData.append("main_image",main_image);
formData.append("product-name",product_name);
formData.append("product-description",product_description);
formData.append("product-price",product_price);
formData.append("product-category",product_category);
formData.append("product-color",product_color);
formData.append("product-sku",product_sku);


count_new_image=new_image_array.length
if(count_new_image!=0){

  for (let i = 0; i < count_new_image; i++) {
  formData.append('images[]', new_image_array[i]);
}
  formData.append("new_image","1");


}
else{

  formData.append("new_image","0");


}

formData.append("new_lisitng","new_listing");

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
            $("#submit-form").hide();
            $("#submit-loading").show();

            window.location="list-new-item.php";
          }
          else{
            $("#submit-form").show();
            $("#submit-loading").hide();

            $("#error-val").text("Something went wrong");
            return false;
          }
        }


})

  return false;



}

function remove_image(no){


i=new_image_no.indexOf(no);
console.log(i)
new_image_array.splice(i,1);
new_image_no.splice(i,1);

$(`#new-image-sub${no}`).remove();






}

</script>


<style media="screen">


@media screen and (min-width:700px){


  #form-body{
    width:40% !important;
  }

}

@media screen and (max-width:700px){



}

</style>

</br></br>

</body>

</html>
