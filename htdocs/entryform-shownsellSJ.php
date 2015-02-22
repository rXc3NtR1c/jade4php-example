<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
    <meta charset="utf-8"/>
    <title>Sport Compact Group | Sydney Jamboree - Show-N-Sell Entry Form</title>
    <link rel="stylesheet" href="../../templates/default/stylesheet.css"/>
    <link rel="stylesheet" href="../../sydjam/stylesheet.css"/>
    <link rel="stylesheet" href="../../incs/css/lightbox.css"/>
    <link rel="stylesheet" href="../../incs/js/formvalidator/messages.css"/>
    <style>
      .style2 {font-size: 18px}
      .style4 {font-style: italic}
      .style5 {color: #ff9933; font-weight: bold;}
      .style6 {color: #ff9933}
      .style3 {color: #99ff33}
      
    </style><?php include('../../incs/php/connect.php');
include('../../incs/php/config.php');
require('../../incs/php/class.SellEntrySJ.php');

if ($_POST['submit_form']=='true') {
    $entry = new SellEntry($_POST, $_SERVER);
    $success = $entry->Save();
    if ($success) {
        $entry->EmailSCG(EMAIL_SELL);
    }
}

 ?>
    <script type="text/javascript" src="../../incs/js/prototype.js"></script>
    <script type="text/javascript" src="../../incs/js/scriptaculous.js?load=effects"></script>
    <script type="text/javascript" src="../../incs/js/lightbox.js"></script>
    <script type="text/javascript" src="../../incs/js/dropmenu.js"></script>
    <script type="text/javascript" src="../../incs/js/overlib.js"></script>
    <script type="text/javascript" src="../../incs/js/formvalidator/messages.js"></script>
    <script type="text/javascript">
      function roundNumber(rnum, rlength) { // Arguments: number to round, number of decimal places
          var newnumber = Math.round(rnum*Math.pow(10,rlength))/Math.pow(10,rlength);
          document.roundform.numberfield.value = newnumber; // Output the result to the form field (change for your purposes)
      }
              
      var checker;
      checker = 'SJ Option 1 - Show-N-Sell Entry';
      function performChecks(theRadio)
      {
          checker = theRadio.value;
          changeForPasses();
          return false;
      }
      
      function changeForPasses(){
          var price = 0.00;
          if (checker == 'SJ Option 1 - Show-N-Sell Entry') {
              price = 36.05;
          }
          price = price.toFixed(2);
          document.form.total.value = price;
          document.form.totaldisplay.value = price;
      }
      
      function handleEnter (field, event) {
          var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
          if (keyCode == 13) {
              var i;
              for (i = 0; i < field.form.elements.length; i++) {
                  if (field == field.form.elements[i]) {
                      break;
                  }
                  i = (i + 1) % field.form.elements.length;
                  field.form.elements[i].focus();
                  return false;
              }
          } else {
              return true;
          }
      }
              
      // form validation function //
      function validate(form) {
          var firstname = form.firstname.value;
          if(firstname == "") { inlineMsg('firstname','Please fill out this field.',2); return false; }
          
          var lastname = form.lastname.value;
          if(lastname == "") { inlineMsg('lastname','Please fill out this field.',2); return false; }
          
          var address = form.address.value;
          if(address == "") { inlineMsg('address','Please fill out this field.',2); return false; }
          
          var suburb = form.suburb.value;
          if(suburb == "") { inlineMsg('suburb','Please fill out this field.',2); return false; }
          
          var state = form.state.value;
          if(state == "0") { inlineMsg('state','Please fill out this field.',2); return false; }
          
          var postcode = form.postcode.value;
          if(postcode == "") { inlineMsg('postcode','Please fill out this field.',2); return false; }
          
          var phone = form.phoneMobile.value;
          if(phone == "") { inlineMsg('phoneMobile','Please fill out this field.',2); return false; }
          
          var email = form.email.value;
          if(email == "") { inlineMsg('email','Please fill out this field.',2); return false; }
      
          var make = form.make.value;
          if(make == "") { inlineMsg('make','Please fill out this field.',2); return false; }
          
          var model = form.model.value;
          if(model == "") { inlineMsg('model','Please fill out this field.',2); return false; }
          
          var year = form.year.value;
          if(year == "") { inlineMsg('year','Please fill out this field.',2); return false; }
          
          var colour = form.colour.value;
          if(colour == "") { inlineMsg('colour','Please fill out this field.',2); return false; }
          
          var comments = form.comments.value;
          if(comments == "") { inlineMsg('comments','Please fill out this field.',2); return false; }
      
          if(!form.acceptance.checked) { inlineMsg('acceptance','You must accept the Terms & Conditions.',2); return false; }
          
          return true;
      }
      
    </script>
  </head>
  <body style="background: #000 url(../../images/feature-bg-sydjam.jpg) top center no-repeat;" onload="changeForPasses()">
    <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div><?php include('../../incs/php/sponsorwings.php'); ?>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="main_table">
      <tr>
        <td align="center" valign="top" class="header"><?php include('../../incs/php/header.php') ?>
        </td>
      </tr>
      <tr>
        <td align="center" class="content-area">
          <table width="864" border="0" cellspacing="0" cellpadding="0" class="content-table">
            <tr>
              <td class="breadcrumbs-area">
                <div style="text-align: left"><a href="/">Home </a> » Sydney Jamboree  - Online Entry - Show N Sell</div>
              </td>
            </tr>
            <tr>
              <td height="450" align="center" valign="top" class="content-bg">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="686" height="250" valign="top" class="content">
                      <h1 align="left" class="style2">SYDNEY JAMBOREE  ONLINE ENTRY  - SHOW N SELL</h1><?php if ($_POST['submit_form']=='true') { ?>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left"><?php echo $entry->mailbody; ?>
                          </td>
                        </tr>
                      </table><?php print $entry->PayPal(false);
} else { ?>
                      <form id="form" name="form" action="" onsubmit="return validate(this)" method="post" class="form">
                        <input name="submit_form" type="hidden" value="true"/>
                        <input name="invoice" type="hidden" value="jam_<?php echo date('dmYhis'); ?>"/>
                        <table border="0" cellspacing="0" cellpadding="2" width="100%" class="forms">
                          <tr>
                            <td height="30" colspan="3" valign="middle">
                              <h3 align="justify"><strong>NOTE: This is intended for extensively modified street cars or Sport Compact drag cars. We will be assessing each entry on a case by case basis, more details will be emailed to you on completion of your entry.</strong></h3>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle">
                              <h3 align="justify"><strong>Entrant Details</strong></h3>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">First Name :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="firstname" id="firstname" size="40" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Last Name :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="lastname" id="lastname" size="40" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Address :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="address" id="address" size="40" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Suburb :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="suburb" id="suburb" size="20" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">
                              <div align="justify">State :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <select name="state" id="state">
                                  <option value="0" selected="selected">[SELECT]</option>
                                  <option value="ACT">ACT</option>
                                  <option value="NSW">NSW</option>
                                  <option value="NT">NT</option>
                                  <option value="QLD">QLD</option>
                                  <option value="SA">SA</option>
                                  <option value="TAS">TAS</option>
                                  <option value="VIC">VIC</option>
                                  <option value="WA">WA</option>
                                </select> * <span class="style4"><em>Note: Don't use scroll knob after selection.</em></span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Postcode :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="postcode" id="postcode" size="10" maxlength="4" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Mobile :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="phoneMobile" id="phoneMobile" size="20" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Email :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="email" id="email" size="40" onKeyPress="return handleEnter(this, event)"/> *<br/><span class="style4"><em>Please confirm your address is correct or your entry will not be accepted.</em></span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle" style="border-bottom: none;">
                              <div align="justify"></div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle">
                              <h3 align="justify"><strong>Vehicle Details</strong></h3>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">
                              <div align="justify">Is the vehicle registered?</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="radio" name="reg" value="yes"/>Yes
                                <input type="radio" name="reg" value="no" checked="checked"/>No
                                 * 
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Number Plate :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="numberPlate" id="numberPlate" size="30" onKeyPress="return handleEnter(this, event)"/> 
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Make :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="make" id="make" size="30" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Model :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="model" id="model" size="30" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Year :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="year" id="year" size="30" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Colour :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="colour" id="colour" size="30" onKeyPress="return handleEnter(this, event)"/> *
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="26%" valign="top">
                              <div align="justify">Modifications :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <textarea name="comments" id="comments" rows="3" cols="50"></textarea> *<br/><span class="style4"><em>Please supply as much detail as possible</em></span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle" style="border-bottom: none;">
                              <div align="justify"></div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle">
                              <h3 align="justify"><strong>Fees and Passes</strong></h3>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3" valign="top">
                              <div align="justify">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr style="height: 52px">
                                    <td valign="top" style="border-bottom: none; padding-top:15px">
                                      <input type="radio" name="entryFee" id="entryFee" value="SJ Option 1 - Show-N-Sell Entry" onclick="performChecks(this);" checked="checked"/>
                                    </td>
                                    <td valign="top" style="border-bottom: none; padding-top:15px"><strong>Option 1 - Show-N-Sell Entry - $35</strong></td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">
                              <div align="justify">Total Due $ :</div>
                            </td>
                            <td colspan="2" valign="top">
                              <div align="justify">
                                <input type="text" name="totaldisplay" id="totaldisplay" size="8" onKeyPress="return handleEnter(this, event)" disabled="disabled"/> includes 3% processing fee.<br/>
                                <input type="hidden" name="total" id="total" value=""/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle" style="border-bottom: none;">
                              <div align="justify"></div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="middle">
                              <h3 align="justify"><strong>Acceptance Of Terms</strong></h3>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3" valign="top" style="border-bottom: none;">
                              <div align="justify">
                                <input type="checkbox" name="acceptance" id="acceptance" value="1"/> I/We understand that the Promoter reserves the right to refuse any entry without necessarily assigning a reason. I have read the <a href="/pdfs/2015 SJ SHOW Terms-Comditions.pdf" target="_blank">Show-N-Sell Terms &amp; Conditions (click to view)</a> issued for this event and agree to be bound by them and by any directions from Sport Compact Group officials.
                                <p>I/We hereby certify my/our acceptance of the Show-N-Shine Terms and Conditions of entry.</p>
                                <p><strong>NOTE:</strong> The organisers reserve the right to change/alter entry or Show-N-Sell procedure at any time as deemed necessary.<br/><br/>* Mandatory fields</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3" valign="top" style="border-bottom: none;">
                              <div align="justify"></div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <div align="justify">
                                <input type="submit" value="Enter now &amp; pay with Credit Card or PayPal" class="submit"/>
                              </div>
                              <h3 align="justify">NOTE: After clicking the &quot;Enter Now&quot; button it may take up to 30 to 50 seconds for the PayPal payment screen to appear so please be patient.</h3>
                            </td>
                          </tr>
                        </table>
                      </form><?php } ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center" class="footer"><?php include('../../incs/php/footer.php'); ?>
        </td>
      </tr>
    </table>
  </body>
</html>