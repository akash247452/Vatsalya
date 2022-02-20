<?php
require 'con.php';
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']); 
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$number= mysqli_real_escape_string($con,$_POST['number']);
    $regDate= mysqli_real_escape_string($con,$_POST['regDate']);
    $admin= mysqli_real_escape_string($con,$_POST['admin']);
    $address1= mysqli_real_escape_string($con,$_POST['address1']);
    $address2= mysqli_real_escape_string($con,$_POST['address2']); 
    $phone= mysqli_real_escape_string($con,$_POST['phone']);
    $ngoType= mysqli_real_escape_string($con,$_POST['ngoType']);
    $document= mysqli_real_escape_string($con,$_POST['document']);
		$result = mysqli_query($con,"SELECT * FROM ngoProfiles WHERE email='$email'");
		$data = mysqli_num_rows($result);
		if($data==0)
		{   $insert="INSERT INTO ngoProfiles (name, number, regDate, admin, address1, address2, email, phone, ngoType, document) VALUES('$name', '$number', '$regDate', '$admin', '$address1','$address2', '$email', '$phone', '$ngoType', '$document')";
			$query = mysqli_query($con,$insert); 
			if($query)
			{
				$succes_msg="You are registered successfully.";
			}
			else
			{
				$succes_msg="Error!";
			}
		}
		else
		{ 
			$email_error="You are already registered";

		}


}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    
  <form method="post">  

    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="single_slider">
                        <div class="slider_text"><br><br>
                        
                            <h3 style="font-size:30px;">NGO REGISTRATION</h3>
                            <div style="background-color: #ffffff">
                                
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>NGO NAME:</td>
                                            <td><input type="text" name="name" class="form-control"></td>
                                        <span class="form-required"></span></tr>
                                       
                                        
                                            <tr><td>Registration Number:</td>
                                                <td><input type="text" name="number" class="form-control"></td></tr>
                                            <tr><td>Registration Date:</td>
                                                <td><input type="text" name="regDate" class="form-control"></td></tr>
                                            <tr><td>Name of NGO Admin:</td>
                                                <td><input type="text" namae="admin" class="form-control"></td></tr>
                                            <tr><td>NGO Address:</td>
                                             
                                                <td><div class="form-group">
    <label for="inputAddress">Address 1</label>
    <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div></td></tr>
                                           
                                            <tr><td>NGO Email Address:</td>
                                                <td><input type="text" name="email" class="form-control"></td></tr>
                                            
                                              <tr><td>NGO Contact Number:</td>
                                                <td><input type="text" name="phone" class="form-control"></td></tr>
                                              <tr><td>NGO Type:</td>
                                                  <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="ngoType" id="inlineRadio1" value="governmentNgo">
  <label class="form-check-label" for="inlineRadio1">Government NGO</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="ngoType" id="inlineRadio2" value="privateNgo">
  <label class="form-check-label" for="inlineRadio2">Private NGO</label>
 
</div></td>
              
                                              <tr><td>NGO Registration Documents:</td>
                                                  <td><input type="file" name="document" class="form-control"></td></tr>
                                             <tr><td> <li class="form-line" data-type="control_button" id="id_14">
                                              <div id="cid_14" class="form-input-wide">
                                              <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper  ">
                                              <button id="input_14" type="submit" name="submit" class="form-submit-button" data-component="button" data-content="">
                                                 Submit Form
                                               </button>
                                              </div>
                                              </div>
                                              </li></td></tr>
                                             
                                              </table>
                                    
                                              </form>
                                              </div>
                            
                                             </body></html>