<?php
require 'con.php';
if(isset($_POST['submit']))
{
	$fristName=mysqli_real_escape_string($con,$_POST['fristName']); 
  $lastName=mysqli_real_escape_string($con,$_POST['lastName']); 
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
  $city= mysqli_real_escape_string($con,$_POST['city']);
  $stat= mysqli_real_escape_string($con,$_POST['stat']);
  $pincode= mysqli_real_escape_string($con,$_POST['pincode']);
  $country= mysqli_real_escape_string($con,$_POST['country']);
  $address1= mysqli_real_escape_string($con,$_POST['address1']);
  $address2= mysqli_real_escape_string($con,$_POST['address2']); 
  $skillsets= mysqli_real_escape_string($con,$_POST['skillsets']);
  $comments= mysqli_real_escape_string($con,$_POST['comments']);
  $monday= mysqli_real_escape_string($con,$_POST['monday']);
  $tuesday= mysqli_real_escape_string($con,$_POST['tuesday']);
  $wednesday= mysqli_real_escape_string($con,$_POST['wednesday']);
  $thursday= mysqli_real_escape_string($con,$_POST['thursday']);
  $friday= mysqli_real_escape_string($con,$_POST['friday']);
  $saturday= mysqli_real_escape_string($con,$_POST['saturday']);
  $sunday= mysqli_real_escape_string($con,$_POST['sunday']);
  $result = mysqli_query($con,"SELECT * FROM `volunteerForm` WHERE email='$email'");
  $data = mysqli_num_rows($result);
		if($data==0)
		{   
      $insert="INSERT INTO `volunteerForm` (`volunteerFormId`, `fristName`, `lastName`, `email`, `mobile`, `address1`, 
      `address2`, `city`, `stat`, `pincode`, `country`, `skillsets`, `comments`, `monday`, `tuesday`, `wednesday`, `thursday`,
      `friday`, `saturday`, `sunday`) VALUES (NULL, '$fristName', '$lastName', '$email',
     '$mobile', '$address1', '$address2', '$city', '$stat', '$pincode', '$country', '$skillsets', '$comments', '$monday', '$tuesday', 
     '$wednesday', '$thursday', '$friday', '$saturday', '$sunday');";
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
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Volunteer Application Form</title>

<style type="text/css">
    
    .form-line{
        padding-top:8px;
        padding-bottom:5px;
    }
    
    .form-all{
        margin:0px auto;
        padding-top:0px;
        
        color:#F56991 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    
  .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      width: 790px;
    }
  
   .form-all {
      font-size: 22px;
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 20px;
    }
    
  
    .supernova .form-all, .form-all {
      background-color: #EFFAB4;
      border: 1px solid transparent;
    }
  .supernova {
      background-color: #D1F2A5;
    }
    
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input
     {
      background-color: #fff;
    }
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

</head>
<body>
<form class="form" method="post">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
              Volunteer Application Form
            </h1>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3"> Name </label>
        <div id="cid_3" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="fristName" class="form-textbox" size="25" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="lastName" class="form-textbox" size="25" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> E-mail </label>
        <h6><?php echo $email_error; ?></h6>
        <div id="cid_4" class="form-input">
          <input type="email" id="input_4" name="email" class="form-textbox validate[Email]" size="35" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_4" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone" id="id_27">
        <label class="form-label form-label-top" id="label_27">
          Mobile Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input-wide jf-required">
         <input type="tel" id="input_27_area" name="mobile" class="form-textbox validate[required]"/>
              </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6undefined"> Address </label>
        <div id="cid_6" class="form-input">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_addr_line1" name="address1" class="form-textbox form-address-line" size="46" value="" data-component="address_line_1" aria-labelledby="label_6 sublabel_6_addr_line1" />
                    <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address Line 1 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_addr_line2" name="address2" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" aria-labelledby="label_6 sublabel_6_addr_line2" />
                    <label class="form-sub-label" for="input_6_addr_line2" id="sublabel_6_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_city" name="city" class="form-textbox form-address-city" size="21" value="" data-component="city" aria-labelledby="label_6 sublabel_6_city" />
                    <label class="form-sub-label" for="input_6_city" id="sublabel_6_city" style="min-height:13px" aria-hidden="false"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_state" name="stat" class="form-textbox form-address-state" size="22" value="" data-component="state" aria-labelledby="label_6 sublabel_6_state" />
                    <label class="form-sub-label" for="input_6_state" id="sublabel_6_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_postal" name="pincode" class="form-textbox form-address-postal" size="19" value="" data-component="zip" aria-labelledby="label_6 sublabel_6_postal" />
                    <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal" style="min-height:13px" aria-hidden="false"> Postal/Zip Code </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " size="19" style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate"   name="country" id="input_6_country" data-component="country" aria-labelledby="label_6 sublabel_6_country">
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
                      <option value="Cote Ivoire"> Cote Ivoire </option>
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
                    <label class="form-sub-label" for="input_6_country" id="sublabel_6_country" style="min-height:13px" aria-hidden="false"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Skillsets or Area of Interests </label>
        <div id="cid_7" class="form-input">
          <textarea id="input_7" class="form-textarea" name="skillsets" cols="80" rows="6" data-component="textarea" aria-labelledby="label_7"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_8">
        <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8"> Days of Work </label>
        <div id="cid_8" class="form-input">
          <div class="form-single-column" role="group" aria-labelledby="label_8" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="monday" class="form-checkbox" id="input_8_0" value="1" />
              <label id="label_input_8_0" for="input_8_0"> Monday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="tuesday" class="form-checkbox" id="input_8_1" value="1" />
              <label id="label_input_8_1" for="input_8_1"> Tuesday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="wednesday" class="form-checkbox" id="input_8_2" value="1" />
              <label id="label_input_8_2" for="input_8_2"> Wednesday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="thursday" class="form-checkbox" id="input_8_3" value="1" />
              <label id="label_input_8_3" for="input_8_3"> Thursday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="friday" class="form-checkbox" id="input_8_4"value="1" />
              <label id="label_input_8_4" for="input_8_4"> Friday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="saturday" class="form-checkbox" id="input_8_5" value="1" />
              <label id="label_input_8_5" for="input_8_5"> Saturday </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" name="sunday" class="form-checkbox" id="input_8_6" value="1" />
              <label id="label_input_8_6" for="input_8_6"> Sunday </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Comments </label>
        <div id="cid_9" class="form-input">
          <textarea id="input_9" class="form-textarea" name="comments" cols="80" rows="6" data-component="textarea" aria-labelledby="label_9"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <h6><?php echo $succes_msg; ?></h6>
            <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper  "><br>
            <button id="input_2" name="submit" type="submit" class="form-submit-button" data-component="button" size="100px"data-content="">
                <b>Submit</b>
            </button>
          </div>
        </div>
      </li>
     
</form>
  <a href=donorHomepage.php>Click Here for Homepage.</a><br>
  <a href=DonReq1.php>Click Here for another submission.</a>
</body>
</html>