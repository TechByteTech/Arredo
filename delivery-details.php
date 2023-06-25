<?php session_start();

include('header.php');
if(!isset($_SESSION['userid'])){
  header("location:http://localhost/sunny-furniture/login-form.php");
  exit();
}
else{
  $customerid="7840034924";//$_SESSION['userid'];
  $con=new mysqli("localhost","root","","arredo");
  $customer_delivery_details=mysqli_query($con,"SELECT * FROM ecom_customer_delivery_details where customerid=$customerid");
  $isdata_present=mysqli_num_rows($customer_delivery_details);
  $username="";
  $phonenumber="";
  $address="";
  $pincode="";
  if($isdata_present){
    $customer_details=mysqli_fetch_array($customer_delivery_details);
    $username=$customer_details['username'];
    $phonenumber=$customer_details['phonenumber'];
    $address=$customer_details['address'];
    $pincode=$customer_details['pincode'];
  }
}

?>

    <style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border-radius: 10px;
    color:black;
  }
  input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border-radius: 10px;
    color:black;
  }

  #submit-pickup-details {
    width: 100%;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:20px;
    background-color:#0d6efd;
  }
  #submit-destination-details {
    width: 100%;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:20px;
    background-color:#0d6efd;
  }




  </style>
  <body>


  <br>
  <script>
    $(document).ready(function(){

      $("#submit-destination-details").click(function(){
        let destinationUsername=$("#destination-username").val().trim();
        let destinationAddress=$("#destination-user-address").val().trim();
        let destinationPincode=$("#destination-user-pincode").val().trim();
        let destinationMobileNo=$("#destination-mobile-no").val().trim();

        if(destinationUsername.trim().length==0){
          $(".destination-details-error").text("Enter Your name");
          return;
        }
        if(destinationAddress.trim().length==0){
          $(".destination-details-error").text("Enter your address");
          return;
        }
        if(destinationPincode.trim().length!=6){
          $(".destination-details-error").text("Enter valid pincode");
          return;
        }
        if(destinationMobileNo.trim().length!=10 ){
          $(".destination-details-error").text("Enter valid Mobile no.");
          return;
        }

        let destinationFormData= new FormData();
        destinationFormData.append("destination-username",destinationUsername);
        destinationFormData.append("destination-address",destinationAddress);
        destinationFormData.append("destination-pincode",destinationPincode);
        destinationFormData.append("destination-mobileno",destinationMobileNo);
        destinationFormData.append("ecom-customer-details","ecom-customer-details");
        $("#destination-loading").show();
        $("#destination-continue").hide();
        $.ajax({
          type:'POST',
          url:'ajax_backend.php',
          data:destinationFormData,
          processData:false,
          contentType:false,
          success:function(data){
            console.log(data)
            if(data==1){
              $("#destination-details-error").text("Server error");
          //    window.location="checkout.php?itemid=<?php echo $_GET['itemid'];?>&itemquantity=<?php echo $_GET['itemquantity'];?>";

            }
            else{
              $("#destination-details-error").text("Server error try again");
              $("#destination-loading").hide();
              $("#destination-continue").show();
            }
          }
        })



      })

    })
  </script>

<center>
<div id="main-body" style="margin-top:75px;width:100%;">
  <center>

  <!--- destination <details -->
  <div  id="destination-details" style="display:block;position:relative;width:auto;height:524px;">
  <div  style="background-color:#f2f2f2;height:auto;width:95%;border-radius:15px;padding:10px;padding-top:30px;">
    <center>
  <span style="font-size:22px;color:Black;">Enter you details </span><br>
  <span class="text-danger destination-details-error" style="font-size:15px;font-weight:bold;"> </span>
  </center>


      <br>
      <input type="text" id="destination-username" name="destination-username"  value="<?php echo $username; ?>"placeholder="Enter Your Name">
      <br><br>

      <input type="text" id="destination-user-address" name="destination-user-address" value="<?php echo $address; ?>" placeholder="Enter Your Complete Address">

      <br><br>
      <input type="number" id="destination-user-pincode" name="destination-user-pincode" value="<?php echo $pincode; ?>" placeholder="Enter Your Area PINCODE">

      <br><br>

      <input type="number" id="destination-mobile-no" name="destination-user-mobile-no"  value="<?php echo $phonenumber; ?>" placeholder="Enter Your Mobile Number">

      <br><br>

      <button  id="submit-destination-details" style="width:80%;height:40px;padding:0px;border-radius:8px;">
        <div class="spinner-border text-light text-left" id="destination-loading" style="display: none;" ></div>
        <div id="destination-continue">Continue</div>
      </button>
      <br><br>

  </div>
  </div>
</div>
  </body>
</html>
