<?php


session_start();

if(!isset($_SESSION['userdata'])){
  header('location:index.php');
  exit();
}

$email=$_SESSION['userdata'];
  $con=new mysqli("localhost","root","","arredo");
  $selectcarttable=mysqli_query($con,"select * from shoppingcart where email='$email' ");
  if(mysqli_num_rows($selectcarttable)!=0){
            $noOfItems=mysqli_num_rows($selectcarttable);
            $count=0;
            $RANDOM=rand(10000000000,99999999999).uniqid();
            $orderid=$RANDOM;
            while($cartdata=mysqli_fetch_array($selectcarttable)){
                    $itemid=$cartdata['itemid'];
                    $itemquantity=$cartdata['quantity'];
                    $selectitemtable=mysqli_query($con,"select * from shopitem where itemid='$itemid' ");

                        $fetchshopinfo=mysqli_fetch_array($selectitemtable);
                      //  $shopid=$fetchshopinfo['shopid'];
                        //$shopowneremail=$fetchshopinfo['email'];
                        $status=1;
                        date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');
$time=date('h:i a');
                        $insertdata=$con->prepare("insert into itemorder (email,itemid,itemquantity,status,orderid,date,time) values (?,?,?,?,?,?,?)");
                        $insertdata->bind_param("ssissss",$email,$itemid,$itemquantity,$status,$orderid,$date,$time);
                        $insertdata->execute();
                        $insertdata->close();



            }
            $empty_cart=mysqli_query($con,"delete from shoppingcart where email='$email' ");
            header("location:myorder.php");
            exit();

             }
             else{


               header('location:index.php');


             }





 ?>
