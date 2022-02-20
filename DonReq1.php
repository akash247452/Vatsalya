<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NGO Request Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">    
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Varela Round", sans-serif;
    }
    .form-control {
        border-color: #e5e5e5;
        box-shadow: none;
    }
    .form-control:focus {
        border-color: #0cb4aa;
    }
    .contact-modal {
        padding: 50px;
        margin: 30px auto;
    }
    .contact-modal h4 {
        font-size: 26px;
        display: inline-block;
    }
    .contact-modal .form-control, .contact-modal .btn  {
        min-height: 38px;
        border-radius: 1px;
        outline: none;
        border-radius: 2px;
		transition: all 0.5s;
    }
    .contact-modal textarea {
        height: 144px;
    }
    .contact-modal .btn-primary {
        min-width: 120px;
        background: #0cb4aa;
        border: none;
    }
    .contact-modal .btn-primary:hover, .contact-modal .btn-primary:focus {
        background: #0ba69e;
		outline: none;
    }
    .contact-modal .btn-link {
        color: #0cb4aa;
    }
    .contact-modal label {
        opacity: 0.9;
        font-weight: normal;
        font-size: 95%;
    }
    .contact-modal textarea {
        resize: vertical;
    }
    .contact-modal .modal-header {
        padding: 20px 35px 15px;
    }
    .contact-modal .modal-content {
        border-radius: 1px;
    }
    .modal-footer {
        padding: 20px 35px;
    }
    .contact-modal .close {
        position: absolute;
        right: 35px;
        top: 25px;
    }
    .contact-modal .modal-body {
        padding: 25px 35px 15px;
    }
    .hint-text {
        opacity: 0.8;
    }
    .trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body>
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-lg contact-modal">
		<div class="modal-content">
            <form action="DonReq1Form.php" method="post">
                <div class="modal-header">				
                    <h4 class="modal-title">Donation Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ngoName" class="form-control" id="inputName" placeholder="NGO Name" required>
                            </div>
                           <div class="form-group">
                                <input type="text" name="donorName" class="form-control" id="inputName" placeholder="Donor Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="inputEmail" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="amount" class="form-control" id="inputMessage" placeholder="I would like to Donate Cash...." required></textarea>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    	<input type="submit" name="submit" class="btn btn-primary" value="Send">
                    </div>
            </form>
		</div>
	</div>
</div>
</body>
</html>                            