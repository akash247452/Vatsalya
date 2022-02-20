<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$fristName=mysqli_real_escape_string($con,$_POST['fristName']); 
    $lastName=mysqli_real_escape_string($con,$_POST['lastName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $describution= mysqli_real_escape_string($con,$_POST['describution']);
    $insert="INSERT INTO `goodsRequirement` (`goodsRequirementId`, `fristName`, `lastName`,`email`, `phone` , `describution`) VALUES (NULL, 
    '$fristName', '$lastName', '$email' , '$phone', '$describution');";
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