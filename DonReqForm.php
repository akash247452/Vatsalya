<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$ngoName=mysqli_real_escape_string($con,$_POST['ngoName']); 
    $donorName=mysqli_real_escape_string($con,$_POST['donorName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $description= mysqli_real_escape_string($con,$_POST['description']);
    $insert="INSERT INTO `goodsDonation` (`goodsDonationId`, `ngoName`, `donorName`,`email`, `phone` , `description`) VALUES (NULL, 
    '$ngoName', '$donorName', '$email' , '$phone', '$description');";
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
