<?php
require 'con.php';
$msg="";
$email_error="";
if(isset($_POST['submit']))
{
	$fristName=mysqli_real_escape_string($con,$_POST['fristName']); 
  $lastName=mysqli_real_escape_string($con,$_POST['lastName']); 
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
  $address1= mysqli_real_escape_string($con,$_POST['address1']);
  $address2= mysqli_real_escape_string($con,$_POST['address2']); 
  $gender= mysqli_real_escape_string($con,$_POST['gender']);
  $city= mysqli_real_escape_string($con,$_POST['city']);
  $stat= mysqli_real_escape_string($con,$_POST['stat']);
  $password= mysqli_real_escape_string($con,$_POST['password']);
  $country= mysqli_real_escape_string($con,$_POST['country']);
  $pincode= mysqli_real_escape_string($con,$_POST['pincode']);
  $result = mysqli_query($con,"SELECT * FROM donorProfiles WHERE email='$email'");
  $data = mysqli_num_rows($result);
		if($data==0)
		{   $insert="INSERT INTO `donorProfiles` (`donorId`, `fristName`, `lastName`, `gender`, `address1`, `address2`, `city`, `stat`, `country`, `pincode`, `email`, `password`, `mobile`) VALUES (NULL, 
    '$fristName', '$lastName', '$gender', '$address1', '$address2', '$city', '$stat', '$country', '$pincode', '$email', '$password', '$mobile');";
			  $query = mysqli_query($con,$insert); 
			if($query)
			{
				$msg="You are registered successfully.";
        header("Location:donorlogin.php");
        die();
			}
			else
			{
				$msg="Error!";
        header("Location:error.php");
      }
		}
		else
		{ 
			$email_error="You are already registered";
		}
}
?>

<html><head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />

    <h3><title>Donor Registration Form</title>

<style type="text/css">
    
    
    .form-line{
        padding-top:20px;
        padding-bottom:20px;
    }
   .form-all{
        margin:10px auto;
      }
    

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    
  
    .form-line {
      margin-top: 5px;/*height of the form*/
      margin-bottom: 5px;
    }
  
    .form-all {
      width: 530px;/* length of the form*/
    }
  
   .form-all {
      font-size: 18px;
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,/*font size for submit button*/
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 20px;
    }
    
    .supernova .form-all, .form-all {
      background-color: #F9F2E7;   /*color for form*/
      border: 1px solid transparent;
    }
  
    
    
    .form-header-group .form-subHeader {
      color: #3E4E1A;  /* fill out the form carefully*/
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #3E4E1A;  /*donor name ,gender address n all*/
    }
    .form-sub-label {
      color: #586834;    /*first name,address line1 n all*/
    }
  
    .supernova {
      background-color: #8b572a;  /*background color*/
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;   /*color for all boxes*/
    }
    
    .form-all {
      margin-top: 100px !important;
    }
    
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>



</head>
<body>
<form class="jotform-form" method="post">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Donor Registration Form
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Fill out the form carefully for registration
            </div>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4">
          Donor Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_4" name="fristName" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" required="" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_4" name="lastName" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" required="" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3"> Gender </label>
        <div id="cid_3" class="form-input-wide">
          <select class="form-dropdown" id="input_3" name="gender" style="width:150px" data-component="dropdown" aria-labelledby="label_3">
            <option value="NA">NA</option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23undefined">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input-wide jf-required">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_23_addr_line1" name="address1" class="form-textbox validate[required] form-address-line"  data-component="address_line_1" aria-labelledby="label_23 sublabel_23_addr_line1" required="" />
                    <label class="form-sub-label" for="input_23_addr_line1" id="sublabel_23_addr_line1" style="min-height:13px" aria-hidden="false">Address Line 1 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_23_addr_line2" name="address2" class="form-textbox form-address-line" size="46"  data-component="address_line_2" aria-labelledby="label_23 sublabel_23_addr_line2" required="" />
                    <label class="form-sub-label" for="input_23_addr_line2" id="sublabel_23_addr_line2" style="min-height:13px" aria-hidden="false">Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_23_city" name="city" class="form-textbox validate[required] form-address-city" size="21"  data-component="city" aria-labelledby="label_23 sublabel_23_city" required="" />
                    <label class="form-sub-label" for="input_23_city" id="sublabel_23_city" style="min-height:13px" aria-hidden="false"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_23_state" name="stat" class="form-textbox validate[required] form-address-state" size="22" data-component="state" aria-labelledby="label_23 sublabel_23_state" required="" />
                    <label class="form-sub-label" for="input_23_state" id="sublabel_23_state" style="min-height:13px" aria-hidden="false"> State/Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_23_postal" name="pincode" class="form-textbox form-address-postal" size="10"  data-component="zip" aria-labelledby="label_23 sublabel_23_postal" required="" />
                    <label class="form-sub-label" for="input_23_postal" id="sublabel_23_postal" style="min-height:13px" aria-hidden="false"> Postal/Zip Code </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown validate[required] form-address-country noTranslate" name="country" id="input_23_country" data-component="country" required="" aria-labelledby="label_23 sublabel_23_country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Algeria"> Algeria </option>
                      <option value="American Samoa"> American Samoa </option>
                      <option value="Andorra"> Andorra </option>
                      <option value="Angola"> Angola </option>
                      <option value="Anguilla"> Anguilla </option>
                      <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                      <option value="Argentina"> Argentina </option>
                      <option value="Armenia"> Armenia </option>
                      <option value="Aruba"> Aruba </option>
                      <option value="Australia"> Australia </option>
                      <option value="Austria"> Austria </option>
                      <option value="Azerbaijan"> Azerbaijan </option>
                      <option value="The Bahamas"> The Bahamas </option>
                      <option value="Bahrain"> Bahrain </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Barbados"> Barbados </option>
                      <option value="Belarus"> Belarus </option>
                      <option value="Belgium"> Belgium </option>
                      <option value="Belize"> Belize </option>
                      <option value="Benin"> Benin </option>
                      <option value="Bermuda"> Bermuda </option>
                      <option value="Bhutan"> Bhutan </option>
                      <option value="Bolivia"> Bolivia </option>
                      <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                      <option value="Botswana"> Botswana </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="Brunei"> Brunei </option>
                      <option value="Bulgaria"> Bulgaria </option>
                      <option value="Burkina Faso"> Burkina Faso </option>
                      <option value="Burundi"> Burundi </option>
                      <option value="Cambodia"> Cambodia </option>
                      <option value="Cameroon"> Cameroon </option>
                      <option value="Canada"> Canada </option>
                      <option value="Cape Verde"> Cape Verde </option>
                      <option value="Cayman Islands"> Cayman Islands </option>
                      <option value="Central African Republic"> Central African Republic </option>
                      <option value="Chad"> Chad </option>
                      <option value="Chile"> Chile </option>
                      <option value="China"> China </option>
                      <option value="Christmas Island"> Christmas Island </option>
                      <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Comoros"> Comoros </option>
                      <option value="Congo"> Congo </option>
                      <option value="Cook Islands"> Cook Islands </option>
                      <option value="Costa Rica"> Costa Rica </option>
                      <option value="Croatia"> Croatia </option>
                      <option value="Cuba"> Cuba </option>
                      <option value="Cyprus"> Cyprus </option>
                      <option value="Czech Republic"> Czech Republic </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>
                      <option value="Djibouti"> Djibouti </option>
                      <option value="Dominica"> Dominica </option>
                      <option value="Dominican Republic"> Dominican Republic </option>
                      <option value="Ecuador"> Ecuador </option>
                      <option value="Egypt"> Egypt </option>
                      <option value="El Salvador"> El Salvador </option>
                      <option value="Equatorial Guinea"> Equatorial Guinea </option>
                      <option value="Eritrea"> Eritrea </option>
                      <option value="Estonia"> Estonia </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="Falkland Islands"> Falkland Islands </option>
                      <option value="Faroe Islands"> Faroe Islands </option>
                      <option value="Fiji"> Fiji </option>
                      <option value="Finland"> Finland </option>
                      <option value="France"> France </option>
                      <option value="French Polynesia"> French Polynesia </option>
                      <option value="Gabon"> Gabon </option>
                      <option value="The Gambia"> The Gambia </option>
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="Ghana"> Ghana </option>
                      <option value="Gibraltar"> Gibraltar </option>
                      <option value="Greece"> Greece </option>
                      <option value="Greenland"> Greenland </option>
                      <option value="Grenada"> Grenada </option>
                      <option value="Guadeloupe"> Guadeloupe </option>
                      <option value="Guam"> Guam </option>
                      <option value="Guatemala"> Guatemala </option>
                      <option value="Guernsey"> Guernsey </option>
                      <option value="Guinea"> Guinea </option>
                      <option value="Guinea-Bissau"> Guinea-Bissau </option>
                      <option value="Guyana"> Guyana </option>
                      <option value="Haiti"> Haiti </option>
                      <option value="Honduras"> Honduras </option>
                      <option value="Hong Kong"> Hong Kong </option>
                      <option value="Hungary"> Hungary </option>
                      <option value="Iceland"> Iceland </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Iraq"> Iraq </option>
                      <option value="Ireland"> Ireland </option>
                      <option value="Israel"> Israel </option>
                      <option value="Italy"> Italy </option>
                      <option value="Jamaica"> Jamaica </option>
                      <option value="Japan"> Japan </option>
                      <option value="Jersey"> Jersey </option>
                      <option value="Jordan"> Jordan </option>
                      <option value="Kazakhstan"> Kazakhstan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="Kiribati"> Kiribati </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="South Korea"> South Korea </option>
                      <option value="Kosovo"> Kosovo </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Kyrgyzstan"> Kyrgyzstan </option>
                      <option value="Laos"> Laos </option>
                      <option value="Latvia"> Latvia </option>
                      <option value="Lebanon"> Lebanon </option>
                      <option value="Lesotho"> Lesotho </option>
                      <option value="Liberia"> Liberia </option>
                      <option value="Libya"> Libya </option>
                      <option value="Liechtenstein"> Liechtenstein </option>
                      <option value="Lithuania"> Lithuania </option>
                      <option value="Luxembourg"> Luxembourg </option>
                      <option value="Macau"> Macau </option>
                      <option value="Macedonia"> Macedonia </option>
                      <option value="Madagascar"> Madagascar </option>
                      <option value="Malawi"> Malawi </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Mali"> Mali </option>
                      <option value="Malta"> Malta </option>
                      <option value="Marshall Islands"> Marshall Islands </option>
                      <option value="Martinique"> Martinique </option>
                      <option value="Mauritania"> Mauritania </option>
                      <option value="Mauritius"> Mauritius </option>
                      <option value="Mayotte"> Mayotte </option>
                      <option value="Mexico"> Mexico </option>
                      <option value="Micronesia"> Micronesia </option>
                      <option value="Moldova"> Moldova </option>
                      <option value="Monaco"> Monaco </option>
                      <option value="Mongolia"> Mongolia </option>
                      <option value="Montenegro"> Montenegro </option>
                      <option value="Montserrat"> Montserrat </option>
                      <option value="Morocco"> Morocco </option>
                      <option value="Mozambique"> Mozambique </option>
                      <option value="Myanmar"> Myanmar </option>
                      <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                      <option value="Namibia"> Namibia </option>
                      <option value="Nauru"> Nauru </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Netherlands Antilles"> Netherlands Antilles </option>
                      <option value="New Caledonia"> New Caledonia </option>
                      <option value="New Zealand"> New Zealand </option>
                      <option value="Nicaragua"> Nicaragua </option>
                      <option value="Niger"> Niger </option>
                      <option value="Nigeria"> Nigeria </option>
                      <option value="Niue"> Niue </option>
                      <option value="Norfolk Island"> Norfolk Island </option>
                      <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                      <option value="Northern Mariana"> Northern Mariana </option>
                      <option value="Norway"> Norway </option>
                      <option value="Oman"> Oman </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Palau"> Palau </option>
                      <option value="Palestine"> Palestine </option>
                      <option value="Panama"> Panama </option>
                      <option value="Papua New Guinea"> Papua New Guinea </option>
                      <option value="Paraguay"> Paraguay </option>
                      <option value="Peru"> Peru </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Pitcairn Islands"> Pitcairn Islands </option>
                      <option value="Poland"> Poland </option>
                      <option value="Portugal"> Portugal </option>
                      <option value="Puerto Rico"> Puerto Rico </option>
                      <option value="Qatar"> Qatar </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Romania"> Romania </option>
                      <option value="Russia"> Russia </option>
                      <option value="Rwanda"> Rwanda </option>
                      <option value="Saint Barthelemy"> Saint Barthelemy </option>
                      <option value="Saint Helena"> Saint Helena </option>
                      <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                      <option value="Saint Lucia"> Saint Lucia </option>
                      <option value="Saint Martin"> Saint Martin </option>
                      <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                      <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                      <option value="Samoa"> Samoa </option>
                      <option value="San Marino"> San Marino </option>
                      <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Senegal"> Senegal </option>
                      <option value="Serbia"> Serbia </option>
                      <option value="Seychelles"> Seychelles </option>
                      <option value="Sierra Leone"> Sierra Leone </option>
                      <option value="Singapore"> Singapore </option>
                      <option value="Slovakia"> Slovakia </option>
                      <option value="Slovenia"> Slovenia </option>
                      <option value="Solomon Islands"> Solomon Islands </option>
                      <option value="Somalia"> Somalia </option>
                      <option value="Somaliland"> Somaliland </option>
                      <option value="South Africa"> South Africa </option>
                      <option value="South Ossetia"> South Ossetia </option>
                      <option value="South Sudan"> South Sudan </option>
                      <option value="Spain"> Spain </option>
                      <option value="Sri Lanka"> Sri Lanka </option>
                      <option value="Sudan"> Sudan </option>
                      <option value="Suriname"> Suriname </option>
                      <option value="Svalbard"> Svalbard </option>
                      <option value="eSwatini"> eSwatini </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Timor-Leste"> Timor-Leste </option>
                      <option value="Togo"> Togo </option>
                      <option value="Tokelau"> Tokelau </option>
                      <option value="Tonga"> Tonga </option>
                      <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                      <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                      <option value="Tristan da Cunha"> Tristan da Cunha </option>
                      <option value="Tunisia"> Tunisia </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Turkmenistan"> Turkmenistan </option>
                      <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                      <option value="Tuvalu"> Tuvalu </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Uruguay"> Uruguay </option>
                      <option value="Uzbekistan"> Uzbekistan </option>
                      <option value="Vanuatu"> Vanuatu </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="British Virgin Islands"> British Virgin Islands </option>
                      <option value="Isle of Man"> Isle of Man </option>
                      <option value="US Virgin Islands"> US Virgin Islands </option>
                      <option value="Wallis and Futuna"> Wallis and Futuna </option>
                      <option value="Western Sahara"> Western Sahara </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_23_country" id="sublabel_23_country" style="min-height:13px" aria-hidden="false"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">
          DonorE-mail
          <span class="form-required">
            *
          </span>
        </label>
        <h6 class="text-danger mt-2"><?php echo $email_error?></h6>
        <div id="cid_6" class="form-input-wide jf-required">
          <input type="email" id="input_6" name="email" class="form-textbox validate[required, Email]" size="30" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">
          DonorE Password
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <input type="password" id="input_6" name="password" class="form-textbox validate[required, Email]" size="30" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone" id="id_27">
        <label class="form-label form-label-top" id="label_27" for="input_27_area">
          Mobile Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input-wide jf-required">
         <input type="tel" id="input_27_area" name="mobile" class="form-textbox validate[required]"/>
              </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_button" id="id_20">
        <div id="cid_20" class="form-input-wide">
          <div style="text-align:left" data-align="left" class="form-buttons-wrapper  ">
            <button id="input_20" name="submit" type="submit" class="form-submit-button" data-component="button" data-content="">
              Submit Application
            </button>
          </div>
        </div>

      </li></h3>
     <h6 class="text-danger mt-2"><?php echo $msg?></h6>
</form></body>
</html>

