<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$ngoName=mysqli_real_escape_string($con,$_POST['ngoName']); 
    $donorName=mysqli_real_escape_string($con,$_POST['donorName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $amount= mysqli_real_escape_string($con,$_POST['amount']);
    $insert="INSERT INTO `cashDonation` (`cashDonationId`, `ngoName`, `donorName`,`email`, `phone` , `amount`) VALUES (NULL, 
    '$ngoName', '$donorName', '$email' , '$phone', '$amount');";
    $query = mysqli_query($con,$insert); 
    if($query)
    {
        $msg="You have submited successfully.We will get in touch soon.";

    }
    else
    {
        $msg="Error!";
    }

}
echo $msg;
?>
<br>
<a href=donorHomepage.php>Click Here for Homepage.</a><br>
<a href=DonReq1.php>Click Here for another submission.</a>
