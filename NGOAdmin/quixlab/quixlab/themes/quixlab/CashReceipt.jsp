<%-- 
    Document   : DonationReceipt1
    Created on : Sep 21, 2020, 12:04:11 PM
    Author     : ANIL
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!--[if lt IE 9]><script src="https://cdn.jotfor.ms/js/vendor/flashcanvas.js?3.3.20401" type="text/javascript"></script><![endif]-->
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.20401" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jSignature.min.noconflict.js?3.3.20401" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jotform.signaturepad.js?3.3.20401" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.20401" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
      setTimeout(function() {
          $('input_5').hint('ex: 23');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      setTimeout(function() {
          $('input_7').hint('ex: 23');
       }, 20);
	JotForm.newDefaultTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"donationCash","qid":"1","text":"Donation Cash Receipt","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"receivedFrom","qid":"3","text":"Donor Name","type":"control_fullname"},{"name":"receivedBy","qid":"4","text":"Received by","type":"control_fullname"},{"name":"receiptNumber","qid":"5","text":"Receipt Number","type":"control_number"},{"name":"date","qid":"6","text":"Date","type":"control_datetime"},{"name":"amount","qid":"7","text":"Amount","type":"control_number"},null,{"name":"signature","qid":"9","text":"Signature","type":"control_signature"},null,null,{"name":"input12","qid":"12","text":"","type":"control_text"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"donationCash","qid":"1","text":"Donation Cash Receipt","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"receivedFrom","qid":"3","text":"Donor Name","type":"control_fullname"},{"name":"receivedBy","qid":"4","text":"Received by","type":"control_fullname"},{"name":"receiptNumber","qid":"5","text":"Receipt Number","type":"control_number"},{"name":"date","qid":"6","text":"Date","type":"control_datetime"},{"name":"amount","qid":"7","text":"Amount","type":"control_number"},null,{"name":"signature","qid":"9","text":"Signature","type":"control_signature"},null,null,{"name":"input12","qid":"12","text":"","type":"control_text"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.20401" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.20401" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.20401" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.20401" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#3E4E1A !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:25px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }
    body {
        text-align:center;
    }
    form{
        display: inline-block;
    }
    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }
    .form-label {
      font-family: Lucida Grande, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 690px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 20px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 18px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova {
      background-color: #8FBDFD;
    }
    .supernova body {
      background: transparent;
    }
  
    .supernova .form-all, .form-all {
      background-color: #F9F2E7;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #3E4E1A;
    }
    .form-header-group .form-header {
      color: #3E4E1A;
    }
    .form-header-group .form-subHeader {
      color: #3E4E1A;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #3E4E1A;
    }
    .form-sub-label {
      color: #586834;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .form-line-error {
      overflow: hidden;
      transition: none;
      background-color: #FFF4F4;
    }

    .form-line-error .form-error-message {
      background-color: #FF3200;
      clear: both;
      float: none;
    }

    .form-line-error .form-error-arrow {
      border-bottom-color: #FF3200;
    }

    
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: left;
      
      }
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/202640780043447/" method="post" name="form_202640780043447" id="202640780043447" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="202640780043447" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Donation Cash Receipt
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_12">
        <div id="cid_12" class="form-input-wide">
          <div id="text_12" class="form-html" data-component="text">
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3"> Donor Name </label>
        <div id="cid_3" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_receivedFrom[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:15px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_receivedFrom[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:15px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="first_4"> Received by </label>
        <div id="cid_4" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_4" name="q4_receivedBy[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_4" name="q4_receivedBy[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Receipt Number </label>
        <div id="cid_5" class="form-input">
          <input type="number" id="input_5" name="q5_receiptNumber" data-type="input-number" class=" form-number-input form-textbox" style="width:100px" size="10" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_5" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="lite_mode_6"> Date </label>
        <div id="cid_6" class="form-input">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_6" name="q6_date[month]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_6 sublabel_6_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_6" id="sublabel_6_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="day_6" name="q6_date[day]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_6 sublabel_6_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_6" id="sublabel_6_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_6" name="q6_date[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_6 sublabel_6_year" />
                <label class="form-sub-label" for="year_6" id="sublabel_6_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_6" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="mm-dd-yyyy" autoComplete="off" aria-labelledby="label_6 sublabel_6_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_6_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v1" />
              <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Amount </label>
        <div id="cid_7" class="form-input">
          <input type="number" id="input_7" name="q7_amount" data-type="input-number" class=" form-number-input form-textbox" style="width:60px" size="5" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_7" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_signature" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Signature </label>
        <div id="cid_9" class="form-input">
          <div data-wrapper-react="true">
            <div id="signature_pad_9" class="signature-pad-wrapper" style="width:402px;height:202px">
              <div data-wrapper-react="true">
                <!--[if IE 7]>
                  <script type="text/javascript" src="/js/vendor/json2.js"></script>
                <![endif]-->
              </div>
              <div class="signature-line signature-wrapper signature-placeholder" data-component="signature" style="width:402px;height:202px">
                <div id="sig_pad_9" data-width="400" data-height="200" data-id="9" data-required="false" class="pad ">
                </div>
                <input type="hidden" name="q9_signature" class="output4" id="input_9" />
              </div>
              <span class="clear-pad-btn clear-pad" role="button" tabindex="0">
                Clear
              </span>
            </div>
            <div data-wrapper-react="true">
              <script type="text/javascript">
              window.signatureForm = true
              </script>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="202640780043447" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='202640780043447'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "202640780043447-202640780043447";
}
  </script>
  
  </div>
</form>