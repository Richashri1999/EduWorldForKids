<?php 


require_once "../../../class/project.php";
session_start();
 $usernm=$_SESSION['username'];
// $usernm="richuser";  


 $rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);

 // pre($rows);

 $totalbill=0;

 foreach($rows as $row)
 {
  $totalbill=$totalbill+$row['finalprice'];
 }

 $userdata = $objproject->select("*", "usertb", "username='$usernm'");
  $userdata = json_decode($userdata, true);
  // pre($userdata);  
  $user = $userdata[0];


// pre($_POST);
// return;




// if(!isset($_POST['firstname'])){header("location: index.php");}
// Change the Merchant key here as provided by Payumoney
// $MERCHANT_KEY = "XwwWa5Bi";
$MERCHANT_KEY = "nKKBcByM";

// nKKBcByM

// Change the Merchant Salt as provided by Payumoney
$SALT = "5QnhqIaObz";
// 5QnhqIaObz





 $firstname =$_POST['firstname'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 $productinfo =$_POST['productinfo'];
 $service_provider =$_POST['service_provider'];
 $amount =$totalbill;
 $txnid =time().rand(1000,99999);
 $surl ="http://localhost/pestplanet/assets/thirdparty/PAYMENT_rich/success.php";
 $furl ="http://localhost/pestplanet/assets/thirdparty/PAYMENT_rich/fail.php";
 

  //$ =$_POST[''];

  $hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
 $hash =strtolower(hash("sha512", $hashseq)); 
 

?>


<!DOCTYPE html>
<html>
<head>

<title>Payment Processing</title>
 <script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
</head>
<body onload="submitForm();">

<div>
<h2>Payment Gateway Testing Sample</h2>
<table>
<tr><td>Transaction Id</td><td><strong><?php echo $txnid; ?></strong></td><td>Amount: </td><td><strong>Rs. <?php echo $amount; ?></strong></td>
</table>
<div >
<p>In this page we will genrate hash and send it to payumoney.</p>
<br>
<p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
</div>
</div>
<?php
// return;
?>
<div>for live payment change https://sandboxsecure.payu.in/_payment to https://secure.payu.in/_payment


  <form name="postForm" action="https://sandboxsecure.payu.in/_payment" method="POST" >
  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
  <input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
  <input type="hidden" name="txnid" value="<?php echo $txnid;  ?>" />
  <input type="hidden" name="amount" value="<?php echo $amount;  ?>" />
  <input type="hidden" name="firstname" value="<?php echo $firstname;  ?>" />
  <input type="hidden" name="email" value="<?php echo $email;  ?>" />
  <input type="hidden" name="phone" value="<?php echo $phone;  ?>" />
  <input type="hidden" name="productinfo" value="<?php echo $productinfo;  ?>" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
  <input type="hidden" name="surl" value="<?php echo $surl;  ?>" />
  <input type="hidden" name="furl" value="<?php echo $furl;  ?>" />
 </form>
</div>
</body>

</html>
<!-- 

Card: 5123 4567 8901 2346
CVV: 123
Name: anything
Expiry: 05/20 -->