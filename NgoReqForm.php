<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$ngoName=mysqli_real_escape_string($con,$_POST['ngoName']); 
    $adminName=mysqli_real_escape_string($con,$_POST['adminName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $quantity= mysqli_real_escape_string($con,$_POST['quantity']);
    $insert="INSERT INTO `ngoReq` (`ngoReqId`, `ngoName`, `adminName`,`email`, `phone` , `quantity`) VALUES (NULL, 
    '$ngoName', '$adminName', '$email' , '$phone', '$quantity')";
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
