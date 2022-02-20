<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$ngoName=mysqli_real_escape_string($con,$_POST['ngoName']); 
    $adminName=mysqli_real_escape_string($con,$_POST['adminName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $reason= mysqli_real_escape_string($con,$_POST['reason']);
    $insert="INSERT INTO `ngoReq1` (`ngoReq1Id`, `ngoName`, `adminName`,`email`, `phone` , `reason`) VALUES (NULL, 
    '$ngoName', '$adminName', '$email' , '$phone', '$reason')";
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
<a href=NgoHomepage.php>Click Here for Homepage.</a><br>
<a href=cashRequirement.php>Click Here for another submission.</a>
