<?php
session_start();
include("mysql-connection.php");
if(isset($_POST['login_submit'])){


    $userid=$_POST['userid'];
    $userpassword=$_POST['userpassword'];


        $phonenumber_status=1;
        $select_table=$con->prepare("SELECT * FROM userdata WHERE email=?");
        $select_table->bind_param("s",$userid);
        $select_table->execute();
        $select_table->store_result();
        $row=$select_table->num_rows;
        $select_table->close();



    if($row==1){

        $select_table_for_password=$con->prepare("SELECT password FROM userdata WHERE email=?");

        $select_table_for_password->bind_param("s",$userid);
        $select_table_for_password->execute();
        $select_table_for_password->bind_result($password);
        $select_table_for_password->fetch();
        $select_table_for_password->close();
        if($password==$userpassword){


        $option=0;
        $ciphermethod="AES-128-CTR";
        $ivlength=openssl_cipher_iv_length($ciphermethod);
        $encription_iv='1234567891011121';
        $encription_key="9543FERFCVDVDVJDVKN%%%EFSDFSDCSDCVSSVXCVXCVSDFWG3235RFWEFKJDVNSDK";
        $encription=openssl_encrypt($userid,$ciphermethod,$encription_key,$option,$encription_iv);
        setcookie("userid_cookie",$encription,time()+(60*60*24*100000));
      //  setcookie("useriv_cookie",$encription_iv,time()+(60*60*24*100000));

            $_SESSION['userdata']=$userid;
            echo 1;
           }
        else{
           echo("Enter valid ID or Password");
        }

    }
    else{
        echo("Enter valid ID or Password");

    }
}


if(isset($_POST['signup_submit'])){



    $username=$_POST['username'];
      $email=$_SESSION['new-user-email'];
    $userpassword=$_POST['userpassword'];

    $select_table=$con->prepare("SELECT * FROM userdata WHERE email=?");
    $select_table->bind_param("s",$email);
    $select_table->execute();
    $select_table->store_result();
    $row2=$select_table->num_rows;
    $select_table->close();
    $github=0;
    $linkedin=0;
    if($row2==0){



        $insertdata=$con->prepare("insert into userdata (username,email,password) values (?,?,?)");
        $insertdata->bind_param("sss",$username,$email,$userpassword);
        $insertdata->execute();

        $insertdata->close();

        unset($_SESSION['new-user']);

        unset($_SESSION['new-user-email']);
        unset($_SESSION['access_token']);

        $lastid=$con->insert_id;
        //saving files on server
      //  $urlOfImage="https://bvp-connects.herokuapp.com/static/".$userinsta."/".$profilePic;

        //$fileName="photos/".$userinsta.".png";

        //file_put_contents($fileName, file_get_contents($urlOfImage));


        $userid=$email;
        $option=0;
        $ciphermethod="AES-128-CTR";
        $ivlength=openssl_cipher_iv_length($ciphermethod);
        $encription_iv='1234567891011121';
        $encription_key="9543FERFCVDVDVJDVKN%%%EFSDFSDCSDCVSSVXCVXCVSDFWG3235RFWEFKJDVNSDK";
        $encription=openssl_encrypt($userid,$ciphermethod,$encription_key,$option,$encription_iv);
        setcookie("userid_cookie",$encription,time()+(60*60*24*100000));
        echo 1;
        $_SESSION['userdata']=$email;


      }

      else{
       echo "You already have acccount with same email id";
      }



    }


if(isset($_POST['user_email'])){


  $email=$_POST['user_email'];

  $select_userdata=mysqli_query($con,"select * from userdata where email='$email' ");
  if(mysqli_num_rows($select_userdata)==0){
    echo 1;
  }
  else{
    echo 0;
  }


}




if(isset($_POST['signup_check_otp'])){
  $inputotp=$_POST['signup_check_otp'];
  $oriotp=$_SESSION['signup_otp'];
  if($inputotp==$oriotp){

//  $phonenumber=$_SESSION['phonenumber'];
//  $address=$_SESSION['address'];


  /*$select_table=$con->prepare("SELECT * FROM userdata WHERE emailid=?");
  $select_table->bind_param("s",$email);
  $select_table->execute();
  $select_table->store_result();
  $row1=$select_table->num_rows;
  $select_table->close();
*/
  echo 1;


  }
  else{
    echo "Enter valid otp";
  }

}






if(isset($_POST['faculty_login_submit'])){


    $userid=$_POST['userid'];
    $userpassword=$_POST['userpassword'];


        $phonenumber_status=1;
        $select_table=$con->prepare("SELECT * FROM facultydata WHERE email=? ");
        $select_table->bind_param("s",$userid);
        $select_table->execute();
        $select_table->store_result();
        $row=$select_table->num_rows;
        $select_table->close();



    if($row==1){

        $select_table_for_password=$con->prepare("SELECT password FROM userdata WHERE email=?");

        $select_table_for_password->bind_param("s",$userid);
        $select_table_for_password->execute();
        $select_table_for_password->bind_result($password);
        $select_table_for_password->fetch();
        $select_table_for_password->close();
        if($password==$userpassword){


          $email=$userid;
          $option=0;
          $ciphermethod="AES-128-CTR";
          $ivlength=openssl_cipher_iv_length($ciphermethod);
          $encription_iv='1234567891011121';
          $encription_key="9543FERFCVDVDVJDVKN%%%EFSDFSDCSDCVSSVXCVXCVSDFWG3235RFWEFKJDVNSDK";
          $encription=openssl_encrypt($userid,$ciphermethod,$encription_key,$option,$encription_iv);
          setcookie("userid_cookie",$encription,time()+(60*60*24*100000));

          echo 1;
          $_SESSION['facultydata']=$email;
          $_SESSION['userdata']=$email;



           }
        else{
           echo("Enter valid ID or Password");
        }

    }
    else{
        echo("Enter valid ID or Password");

    }
}


if(isset($_POST['faculty_signup_submit'])){




    $username=$_POST['username'];
    $user_area_of_interest=$_POST['user_area_of_interest'];
    $user_current_designation=$_POST['user_current_designation'];
    $user_mobile_no=$_POST['user_mobile_no'];
    $user_password=$_POST['user_password'];
    $email=$_SESSION['new-faculty-user-email'];
  //  $_SESSION['new-faculty-user']=$new_user;
  //  $_SESSION['new-faculty-user-email']=$email;
    //$phonenumber=$_POST['userphoneno'];
  //  $userpassword=$_POST['userpassword'];
    $profilePic=$_POST['profilePic'];
    $idcardPic=$_POST['idcardPic'];


    //$address=$_POST['useraddress'];
    //echo $profilePic;
    /*$select_table=$con->prepare("SELECT * FROM userdata WHERE emailid=?");
    $select_table->bind_param("s",$email);
    $select_table->execute();
    $select_table->store_result();
    $row1=$select_table->num_rows;
    $select_table->close();
    */
    $select_table=$con->prepare("SELECT * FROM userdata WHERE email=?");
    $select_table->bind_param("s",$email);
    $select_table->execute();
    $select_table->store_result();
    $row2=$select_table->num_rows;
    $select_table->close();
    $github=0;
    $linkedin=0;
    if($row2==0){
    //  echo "flksdjflksdjfldskjfsdlkfjsdlkfjsdlkfj";
  /*    $_SESSION['username']=$username;
      $_SESSION['userbranch']=$userbranch;
      $_SESSION['useryear']=$useryear;
      $_SESSION['email']=$email;
      $_SESSION['userinsta']=$userinsta;
      $_SESSION['userpassword']=$password;
      $_SESSION['profilePic']=$profilePic;
      */
      $img = $_POST['profilePic'];
  //    echo $img;
$img = substr(explode(";",$img)[1], 7);
$rand=rand(1000000000000,99999999999999999);
$file="photos/".$rand.".png";
file_put_contents($file, base64_decode($img));
    $filename=$rand.".png";


//    echo $img;
$idcardPic = substr(explode(";",$idcardPic)[1], 7);
$rand2=rand(1000000000000,99999999999999999);
$file2="photos/".$rand2.".png";
file_put_contents($file2, base64_decode($idcardPic));
  $filename2=$rand2.".png";

    //echo "size => ".filesize($path_filename);
        //email username	area_of_interest	current_designation	mobile	profilePic	idcardPic	status

        $status="0";
        $insertdata=$con->prepare("insert into facultydata (email,area_of_interest,current_designation,mobile) values (?,?,?,?)");
        $insertdata->bind_param("ssss",$email,$user_area_of_interest,$user_current_designation,$user_mobile_no);
        $insertdata->execute();

        $insertdata->close();

        $select_userdata=mysqli_query($con,"select id from facultydata where email='$email'");
        $fetch_data=mysqli_fetch_array($select_userdata);

        $userbranch=0;
        $useryear=0;
        $userinsta=0;
        $github=0;
        $linkedin=0;
        $isFaculty=$fetch_data['id'];
      //  $user_password="0";
        $roll_no="0";
        $status=0;
        $insertdata2=$con->prepare("insert into userdata (username,branch,year,email,insta,password,profile_picture,idcardPic,github,linkedin,isfaculty,roll_no,status) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insertdata2->bind_param("siissssssssss",$username,$userbranch,$useryear,$email,$userinsta,$user_password,$filename,$filename2,$github,$linkedin,$isFaculty,$roll_no,$status);
        $insertdata2->execute();

        $insertdata2->close();






        unset($_SESSION['new-faculty-user']);

        unset($_SESSION['new-faculty-user-email']);
        unset($_SESSION['access_token']);

        $lastid=$con->insert_id;
        //saving files on server
      //  $urlOfImage="https://bvp-connects.herokuapp.com/static/".$userinsta."/".$profilePic;

        //$fileName="photos/".$userinsta.".png";

        //file_put_contents($fileName, file_get_contents($urlOfImage));


        $userid=$email;
        $option=0;
        $ciphermethod="AES-128-CTR";
        $ivlength=openssl_cipher_iv_length($ciphermethod);
        $encription_iv='1234567891011121';
        $encription_key="9543FERFCVDVDVJDVKN%%%EFSDFSDCSDCVSSVXCVXCVSDFWG3235RFWEFKJDVNSDK";
        $encription=openssl_encrypt($userid,$ciphermethod,$encription_key,$option,$encription_iv);
        setcookie("userid_cookie",$encription,time()+(60*60*24*100000));
        echo 1;
        $_SESSION['facultydata']=$email;
        $_SESSION['userdata']=$email;


      }

      else{
       echo "You already have one account with the same email id";
      }



    }


if(isset($_POST['review_update_image'])){


  $idcardPic=$_POST['idcardPic'];


  //    echo $img;
  $idcardPic = substr(explode(";",$idcardPic)[1], 7);
  $rand2=rand(1000000000000,99999999999999999);
  $file2="photos/".$rand2.".png";
  file_put_contents($file2, base64_decode($idcardPic));
    $filename2=$rand2.".png";

      //echo "size => ".filesize($path_filename);
          //email username	area_of_interest	current_designation	mobile	profilePic	idcardPic	status
          $email=$_SESSION['userdata'];

          $insertdata=mysqli_query($con,"update userdata set idcardPic='$filename2',status='0' where email='$email' ");
          echo 1;


}


if(isset($_POST['update_id_card_status'])){

  $status=$_POST['status'];
  $id=$_POST['id'];

  $select_email=mysqli_query($con,"select email from userdata where id='$id' ");
  $fetch_email=mysqli_fetch_array($select_email);
  $insertdata=mysqli_query($con,"update userdata set status='$status' where id='$id' ");
  $receiver=$fetch_email['email'];
//  echo $receiver;
  $message="Your Account Status Has Been Changed.. Check More On bvp-connects.com/review.php";
  $subject="BVP Account Status";

  $from="message@bvp-connects.com";
  $mail=mail($receiver,$subject,$message,"From:".$from);
  echo 1;




}





?>
