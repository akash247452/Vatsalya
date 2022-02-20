<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$fristName=mysqli_real_escape_string($con,$_POST['fristName']); 
    $lastName=mysqli_real_escape_string($con,$_POST['lastName']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
    $describeAmount= mysqli_real_escape_string($con,$_POST['describeAmount']);
    $insert="INSERT INTO `cashRequirement` (`cashRequirementId`, `fristName`, `lastName`,`email`, `phone` , `describeAmount`) VALUES (NULL, 
    '$fristName', '$lastName', '$email' , '$phone', '$describeAmount');";
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
<a href=index.php>Click Here for Homepage.</a><br>
<a href=cashRequirement.php>Click Here for another submission.</a>
