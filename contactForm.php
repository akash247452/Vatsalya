<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']); 
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject= mysqli_real_escape_string($con,$_POST['subject']);
    $insert="INSERT INTO `getInTouch` (`getInTouchId`, `name`, `email`, `subject`) VALUES (NULL, 
    '$name', '$email', '$subject');";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h6><?php echo $msg ?></h6>
</body>
</html>
