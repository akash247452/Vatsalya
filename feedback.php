<?php
require 'con.php';
$msg="";
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']); 
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
    $message= mysqli_real_escape_string($con,$_POST['message']);
    $insert="INSERT INTO `feedback` (`feedbackId`, `name`,`email`, `mobile` , `message`) VALUES (NULL, 
    '$name', '$email' , '$mobile', '$message')";
    $query = mysqli_query($con,$insert); 
    if($query)
    {
        $msg="You have submited successfully.We will get in touch soon.";
        ?><br>
        <a href=index.php>Click Here for Homepage.</a><br>
        <a href=feedback.php>Click Here for another submission.</a>
        <br>
        <?php

    }
    else
    {
        $msg="Error!";
    }

}
echo $msg;
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Donor Feedback Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">    
    .form-control{
    background: transparent;
}
form {
 width: 320px;
 margin: 20px;
}
form > div {
 position: relative;
 overflow: hidden;
}
form input, form textarea {
 width: 100%;
 border: 2px solid gray;
 background: none;
 position: relative;
 top: 0;
 left: 0;
 z-index: 1;
 padding: 8px 12px;
 outline: 0;
}
form input:valid, form textarea:valid {
 background: white;
}
form input:focus, form textarea:focus {
 border-color: #357EBD;
}
form input:focus + label, form textarea:focus + label {
 background: #357EBD;
 color: white;
 font-size: 70%;
 padding: 1px 6px;
 z-index: 2;
 text-transform: uppercase;
}
form label {
 -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
 transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
 position: absolute;
 color: #999;
 padding: 7px 6px;
 font-weight: normal;
}
form textarea {
 display: block;
 resize: vertical;
}
form.go-bottom input, form.go-bottom textarea {
 padding: 12px 12px 12px 12px;
}
form.go-bottom label {
 top: 0;
 bottom: 0;
 left: 0;
 width: 100%;
}
form.go-bottom input:focus, form.go-bottom textarea:focus {
 padding: 4px 6px 20px 6px;
}
form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
 top: 100%;
 margin-top: -16px;
}
form.go-right label {
 border-radius: 0 5px 5px 0;
 height: 100%;
 top: 0;
 right: 100%;
 width: 100%;
 margin-right: -100%;
}
form.go-right input:focus + label, form.go-right textarea:focus + label {
 right: 0;
 margin-right: 0;
 width: 40%;
 padding-top: 5px;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <form role="form" method="post" class="col-md-9 go-right">
            <h2>Feedback Form</h2>
            <p>We welcome for your feedback and we will try to implement it.</p>
            <div class="form-group">
            <input id="name" name="name" type="text" class="form-control" required>
            <label for="name">Your Name</label>
        </div>
        <div class="form-group">
            <input id="email" name="email" type="email" class="form-control" required>
            <label for="email">Email Address</label>
        </div>
        <div class="form-group">
            <input id="phone" name="mobile" type="tel" class="form-control" required>
            <label for="phone"> Contact Number</label>
        </div>
        <div class="form-group">
            <textarea id="message" name="message" class="form-control" style="height: 150px" required></textarea>
            <label for="message">Message</label>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
    </form></body>
</html>


