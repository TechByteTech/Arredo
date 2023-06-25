<?php

session_start();



if(isset($_POST['new_category'])){

  $product_category=$_POST['product_category'];
  $con=new mysqli("localhost","root","","arredo");

  $selectcarttable=mysqli_query($con,"select * from category where category='$product_category' ");
  if(mysqli_num_rows($selectcarttable)==0){

  $insert_into_table=$con->prepare("insert into category (category) values (?)");
  $insert_into_table->bind_param("s",$product_category);
  $insert_into_table->execute();
  $insert_into_table->close();
  echo true;

  }
  else{

    echo false;
  }


}

if(isset($_POST['new_lisitng'])){


  include('mysql-connection.php');

  $product_name = $_POST["product-name"];
  $product_description = $_POST["product-description"];
  $product_price = $_POST["product-price"];
  $product_category = $_POST["product-category"];
  $product_color = $_POST["product-color"];
  $product_sku = $_POST["product-sku"];
  $new_images=$_POST['new_image'];
  $main_image=$_POST['main_image'];


  $rand_no=rand(1000000000,99999999999999);

  $uniqueId = $rand_no.uniqid();
  if($new_images=="1"){
$images = $_POST['images'];

$stmt = mysqli_prepare($con, "INSERT INTO item_images (itemid, image_name) VALUES (?, ?)");




foreach ($images as $key => $value) {
    $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $value));
    $image = imagecreatefromstring($imageData);

    $rand_no=rand(1000000000,99999999999999);
    $filename = $rand_no.uniqid() . '.webp';

    imagewebp($image, 'photos/' . $filename);

    imagedestroy($image);

    $itemid = $uniqueId;
    $image_name = $filename;

    mysqli_stmt_bind_param($stmt, "ss", $itemid, $image_name);
    mysqli_stmt_execute($stmt);

}




  mysqli_stmt_close($stmt);
}

  $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $main_image));
  $image = imagecreatefromstring($imageData);

  $rand_no=rand(1000000000,99999999999999);
  $filename = $rand_no.uniqid() . '.webp';

  imagewebp($image, 'photos/' . $filename);

  imagedestroy($image);

  $stmt2 = mysqli_prepare($con, "INSERT INTO shopitem (itemname, itemdescription, itemsku, itemid, itemprice, itemimg, itemcategory, itemcolor) VALUES (?,?, ?, ?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt2, "ssssssss", $product_name, $product_description,$product_sku,$uniqueId,$product_price, $filename, $product_category, $product_color);
if(mysqli_stmt_execute($stmt2)){
  echo true;
}
else{

  echo false;

}
// Close the statement and connection
mysqli_stmt_close($stmt2);
mysqli_close($con);



//}



}


if(isset($_POST['accept_order'])){
  $orderid=$_POST['itemid'];
  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");
  $selectitemtable=mysqli_query($con,"select * from itemorder where orderid='$orderid' ");
  if(mysqli_num_rows($selectitemtable)!=0){

  $status=2;
  $insertdata=$con->prepare("update itemorder set status=? where orderid=?");
  $insertdata->bind_param("is",$status,$orderid);
  $insertdata->execute();
  $insertdata->close();
  echo 1;
  exit();
 }
 else{
   echo "please confirm valid item";
 }


}

if(isset($_POST['decline_order'])){
  $orderid=$_POST['itemid'];
  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");
  $selectitemtable=mysqli_query($con,"select * from itemorder where orderid='$orderid'");
  if(mysqli_num_rows($selectitemtable)!=0){

  $status=3;
  $insertdata=$con->prepare("update itemorder set status=? where orderid=?");
  $insertdata->bind_param("is",$status,$orderid);
  $insertdata->execute();
  $insertdata->close();
  echo 1;
  exit();
 }
 else{
   echo "please confirm valid item";
 }


}



if(isset($_POST['add_item_to_cart'])){

  $itemid=$_POST['itemid'];
  $itemquantity=$_POST['itemquantity'];
  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");
  $selectcarttable=mysqli_query($con,"select * from shoppingcart where itemid='$itemid' ");
  if(mysqli_num_rows($selectcarttable)==0){



  $selectitemdata=mysqli_query($con,"select * from shopitem where itemid='$itemid' ");
  $fetchitemdata=mysqli_fetch_array($selectitemdata);
  $insertdata=$con->prepare("insert into shoppingcart (email,itemid,quantity) values (?,?,?)");
  $insertdata->bind_param("sss",$email,$itemid,$itemquantity);
  $insertdata->execute();
  $insertdata->close();
  echo 1;
  exit();
 }
 echo 1;


}

if(isset($_POST['update_item_to_cart'])){

  $itemid=$_POST['itemid'];
  $itemquantity=$_POST['itemquantity'];
  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");
  $selectcarttable=mysqli_query($con,"select * from shoppingcart where itemid='$itemid' and email='$email' ");
  if(mysqli_num_rows($selectcarttable)==1){

  $updatedata=$con->prepare("update shoppingcart set quantity=? where itemid=? and email=?");
  $updatedata->bind_param("sss",$itemquantity,$itemid,$email);
  $updatedata->execute();
  $updatedata->close();
  echo 1;
  exit();
 }
 else{
   echo 0;
   exit();
 }
 echo 1;


}


if(isset($_POST['quantity_change'])){
  $itemquantity=$_POST['quantity'];
  $itemuniqueid=$_POST['itemid'];
  //echo $itemquantity." ".$itemuniqueid;
  $con=new mysqli("localhost","root","","arredo");
  $selectcarttable=mysqli_query($con,"update shoppingcart set quantity=$itemquantity where itemid='$itemuniqueid'");
  //echo 1;

}

if(isset($_POST['removeitem'])){

  $itemuniqueid=$_POST['itemid'];
  //echo $itemquantity." ".$itemuniqueid;
  $email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");

  $selectcarttable=mysqli_query($con,"delete from shoppingcart where itemid='$itemuniqueid' and email='$email'");
  //echo 1;

}


if(isset($_POST['ecom-customer-details'])){
  $username=$_POST['destination-username'];
  $useraddress=$_POST['destination-address'];
  $userpincode=$_POST['destination-pincode'];
  $usermobileno=$_POST['destination-mobileno'];
  $customerid=$_SESSION['userdata'];

  $con=new mysqli("localhost","root","","arredo");

  $insert_into_table=$con->prepare("insert into ecom_customer_delivery_details (username,email,phonenumber,address,pincode) values (?,?,?,?,?)");
  $insert_into_table->bind_param("sssss",$username,$customerid,$usermobileno,$useraddress,$userpincode);
  $insert_into_table->execute();
  $insert_into_table->close();
  $_SESSION['ecom-customer-delivery-details']="ok";
  echo 1;
  exit();

}

if(isset($_POST['update-ecom-customer-details'])){
  $username=$_POST['username'];
  $useraddress=$_POST['useraddress'];
  $userpincode=$_POST['userpincode'];
  $usermobileno=$_POST['userphoneno'];
  $customerid=$_SESSION['userdata'];

  $con=new mysqli("localhost","root","","arredo");
  $update_customer_details=$con->prepare("update ecom_customer_delivery_details set username=?, phonenumber=?, address=?, pincode=? where email=?");
  $update_customer_details->bind_param("sssss",$username,$usermobileno,$useraddress,$userpincode,$customerid);
  $update_customer_details->execute();
  $update_customer_details->close();

  echo 1;
  exit();

}









 ?>
