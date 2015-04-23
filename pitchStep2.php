<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pitch Application</title>
<link rel="shortcut icon" href="http://villgro.org/images/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/reg.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link href='http://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
<!--<script src="js/validate_submit.js"></script>-->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>


</head>
<script type="text/javascript" >
function check()
{
	if($("#other_areas").prop('checked') == true)
     {
      //alert('on');
      $('#a_other').show();
      $("#areas_other").rules("add", {required : true , messages: {
                                      required: "Enter other sector?",
                                    } });   
     }
    else
    {
      //alert('off');
      $('#a_other').hide();
      $("#areas_other").rules( "remove" );
    }
	}
function check2(checkedValue)
{
	
	if( checkedValue== 'yes')
     {
      //alert('on');
      var remember = document.getElementById('fund1');
    if (remember.checked==0){
      $('#a_fund').hide();
    }else{
      document.getElementById("fund2").checked = false;
      $('#a_fund').show();
      }
     }
    else
    {
      //alert('off');
       document.getElementById("fund1").checked = false;
      $('#a_fund').hide();
      
    }
    
	}
	function check3(checkedValue)
{
	if( checkedValue== 'yes')
     {
      //alert('on');
       var remember = document.getElementById('awards1');
    if (remember.checked==0){
      $('#share').hide();
    }else{
      document.getElementById("awards2").checked = false;
      $('#share').show();
      }
     }
    else
    {
      //alert('off');
       document.getElementById("awards1").checked = false;
      $('#share').hide();
      
    }
	}
	function check4(selval)
{
	$('#emailer_div').hide();
	$('#social_media_div').hide();
	$('#website_div').hide();
	$('#other_website_div').hide();
	$('#other_aboutus_div').hide();
	if(selval=='emailer')
	{
		$('#emailer_div').show();
		}
		else if(selval=='social media')
		{
			$('#social_media_div').show();
			}
			else if(selval=='website')
		{
			$('#website_div').show();
			}
			else if(selval=='others')
		{
			$('#other_aboutus_div').show();
			}
	}
		function check5(selval)
{
	$('#other_website_div').hide();
	if(selval=='other')
	{
		$('#other_website_div').show();
		}
		
	}

</script>
<script type="text/javascript">

	function limitText(limitField, limitCount, limitNum) {
		wordcount = limitField.value.trim().split(" ");
		if (wordcount.length > limitNum) {
			resultArray = wordcount.slice(0, limitNum);
			limitField.value = resultArray.join(" ");
			return false;
		} else {
			limitCount.value = limitNum - wordcount.length;
		}	
	}
	
/*	function limitText(limitField, limitCount, limitNum) {
		var len = limitField.value.split(/[\s]+/);
		if (len.length > limitNum) {
			limitField.value = limitField.value;
			onKeyDown();
			return false;
		} else {
			limitCount.value = limitNum - len.length;
		}	
	}*/
	
function countWordsLeft(id) {  
	 var maxWords=5;
    var d=document.getElementById(id);
    if ( d.value.split(/[\s]+/).length > maxWords ) {
        t=d.value.substring(0,d.value.lastIndexOf(' '));
        d.value=t.substring(0,t.lastIndexOf(' ')+1);
    }
    else
    {
    	document.getElementById('countdown_question_4').innerHTML = maxWords - d.value.split(/[\s]+/).length;
    	}
}
$(document).ready(function(){
	
		var selector1 = document.getElementById('question_1');
      var counter1 = document.getElementById('countdown_question_1');
      limitText(selector1,counter1,250);
	 
      var selector2 = document.getElementById('question_2');
      var counter2 = document.getElementById('countdown_question_2');
      limitText(selector2,counter2,250);

      var selector3 = document.getElementById('question_3');
      var counter3 = document.getElementById('countdown_question_3');
      limitText(selector3,counter3,250);

    	 var selector4 = document.getElementById('question_4');
      var counter4 = document.getElementById('countdown_question_4');
      limitText(selector4,counter4,10);

      var selector5 = document.getElementById('question_5');
      var counter5 = document.getElementById('countdown_question_5');
      limitText(selector5,counter5,100);
      
      var selector6 = document.getElementById('question_6');
      var counter6 = document.getElementById('countdown_question_6');
      limitText(selector6,counter6,100);

 $('#close_finalmsg').click(function(){
    
    $('#finalMsg').removeClass('in');
    $('#finalMsg').css('display','none');
    $('#finalMsg').attr('aria-hidden','true');
  });

  $('#bt_save').click(function(){
  		
  		$('#savetype').val('save');
  		//console.log($('#savetype').val());
  		$("#step2Form").submit();
  		
  });
function applicationSubmit()
	{
	var step1 = $("#s1name"); //page 1
   var step2 = $("#s1org"); //page 1
   var step3 = $("#s1title"); //page 1
   var step4 = $("#s1email"); //page 1
   var step5 = $("#s1phone");
  	
 // alert('fdg');
   var step6 = $("#question_4").val();
  	var step7=$('input[name="fund"]:checked' ).val();
  	var step8= $("#awards").val();
   var step9 = $("#about_us").val();
   var step10 = $("#question_5").val();
   var step12 = $("#emailer").val();
   var step13 = $("#social_media").val();
   var step14 = $("#website").val();
   var step15 = $("#other_website").val();
   var step16 = $("#other_aboutus").val();
   
   var page_path = $("#formPath").val();
  
	if(step1.val() == '' || step2.val() == '' || step3.val() == '' || step4.val() == ''|| step5.val() == '')
		{
					
		
			var r=confirm("Some questions have been left unanswered. Please fill them in to be able to submit");
				if (r==true)
				  {
				  	//alert(page_path+'registration.php');
				   window.location = 'pitchstep1.php';
				  }				
			return false;
		}
	   else if(step6 == '' || step7 == '' || step8 == '' || step9 == '' || (step7 == 'yes' && step10 =='') || (step9 == 'emailer' && step12 =='') ||(step9 == 'social media' && step13 =='')||(step9 == 'website' && step14 =='')||(step9 == 'others' && step16 =='')||(step14 == 'other' && step15 ==''))
     {
        var r=confirm("Some questions have been left unanswered. Please fill them in to be able to submit");
        if (r==true)
          {
           // alert(page_path+'info_enterprise.php');
           window.location ='pitchstep2.php';
          }       
        return false;
     }
      
  else{
    
  	return true;	
  }
  
		
		}


  $('#bt_submit').click(function(){
  		$('#savetype').val('submit');
		if(applicationSubmit()){
  			$("#step2Form").submit();
  		}
  		else
  		{
  			return false;
  			}
  });

});  
</script>
<body>
<div class="reg-container">
    <!-- <h1 style="background:none;color:#A9CF55;">Business Viability</h1> -->
  <div class="form-info">
    <div class="fleft form-desc">
    	<strong style="font-size:16px;">Instructions:</strong>
    	<a style="float:right;font-family: 'Asap',sans-serif;font-size:14px;color:#008000;" href="edit_profile.php" style="font-family: 'Asap',sans-serif;
    font-size:14px;color:#008000;" >Account info </a>
    	<a style="float:right;margin-right: 10px;font-family: 'Asap',sans-serif;font-size:14px;color:#008000;" href="change_pitchpwd.php" style="font-family: 'Asap',sans-serif;
    font-size:14px;color:#008000;" >Change Password </a>
      <p style="margin-top:25px;"><!-- We will review your application and get back to you as soon as possible. <br /> -->
        
        Please fill all fields marked with an asterisk <span class="req">*</span>. If all necessary fields are not filled, you will not be able to submit this form.<br />
       You can fill this form in multiple sittings. You will receive a copy of the filled form in your email, once it is completed and submitted. <br />
       Please submit accurate information. <br />
       Please write ‘Not applicable’ to the questions not applicable to you.<br>
       Upon online form submission, shortlisted candidates will be contacted by the Unconvention team directly. <br />
      All decisions made by Villgro are final and undisputable.<br/>
      </br>
      For queries, please contact <a href="mailto:unconvention@villgro.org">unconvention@villgro.org</a><br />
      </p>
		<?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'){ ?> <br><p style="color:#8A0808;font-size:15px;">Application form saved successfully</p><?php }?>
  <?php if(isset($_GET['msg']) && $_GET['msg'] == 'completed'){ ?> <br><p style="color:#8A0808;font-size:15px;">Application form completed successfully </p><?php }?>
  <?php if(isset($_GET['msg']) && $_GET['msg'] == 'fill'){ ?> <br><p style="color:#8A0808;font-size:15px;">Please fill the Information about enterprise form and save</p><?php }?>

       <div class="spacer"></div>
      
    </div>
    <!--<div class="fright form-logo"><img src="images/logo.jpg" alt="" border="0" /></div>-->
    <div class="spacer"></div>
   
  </div>
   <p style="font-size:16px;background: none repeat scroll 0 0 #A9CF55; border-radius: 5px;padding: 6px 12px;">Information about enterprise</p>
          <br/>
  <div class="forms-container">
    <form method="post" id="step2Form" action="step2pitchSave.php" class="uniform clearfix reg-forms" enctype="multipart/form-data" >
           
      <dl>
      <input type="hidden" name="edit_id" value="<?php echo ((isset($details['id'])) ? $details['id'] : 0); ?>">
      <input type="hidden" name="savetype" id="savetype" value="">
         <dt class="text-label">
          <label>Briefly describe your idea, product or service?</label>
         </dt>
        <dd class="text-area">
          <textarea class="input-text" id="question_1" name="question_1" onKeyDown="limitText(this.form.question_1,this.form.countdown_question_1,5);" 
onKeyUp="limitText(this.form.question_1,this.form.countdown_question_1,5);"><?php echo ((isset($details['quest_1'])) ? $details['quest_1'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum words: 5). You have
          <input readonly="readonly" type="text" name="countdown_question_1" id="countdown_question_1" size="3" value="5" style="width:40px;" />
          words left.</span> </dd>

          <dt class="text-label">
          <label>Describe the innovative element in your enterprise?</label>
         </dt>
        <dd class="text-area">
          <textarea class="input-text" id="question_2" name="question_2" onKeyDown="limitText(this.form.question_2,this.form.countdown_question_2,250);" 
onKeyUp="limitText(this.form.question_2,this.form.countdown_question_2,250);"><?php echo ((isset($details['quest_2'])) ? $details['quest_2'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum characters: 250). You have
          <input readonly="readonly" type="text" name="countdown_question_2" id="countdown_question_2" size="3" value="250" style="width:40px;" />
          characters left.</span> </dd>

          <dt class="text-label">
          <label>What need does your business address? What is the social benefit created by your enterprise?</label>
         </dt>
        <dd class="text-area">
          <textarea class="input-text" id="question_3" name="question_3" onKeyDown="limitText(this.form.question_3,this.form.countdown_question_3,250);" 
onKeyUp="limitText(this.form.question_3,this.form.countdown_question_3,250);"><?php echo ((isset($details['quest_3'])) ? $details['quest_3'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum characters: 250). You have
          <input readonly="readonly" type="text" name="countdown_question_3" id="countdown_question_3" size="3" value="250" style="width:40px;" />
          characters left.</span> </dd>


           <dt class="text-label">
          <label>Sector</label>

        </dt>
			 <?php  
            $chk_f_prog = array("agri-business", "energy", "healthcare","education","others");
            if(count($chk_f_prog)>0 && count($org_sector)>0){
            $new_list = array_diff($org_sector,$chk_f_prog);
            foreach ($new_list as $value) {
              $other_value = $value;
            }
          
        }
      ?>
        <dd class="text-area">

          <div class="chkbox">
            <label class="check">
              <input type="checkbox" name="sector[]" value="agri-business" <?php echo ( isset($sect) ? ((in_array('agri-business',$sect)) ? 'checked="checked"' : ''): '');?>  />
              Agri - business</label>
          </div>
          
          <div class="chkbox">
            <label class="check">
              <input type="checkbox" name="sector[]" value="energy" <?php echo ( isset($sect) ? ((in_array('energy',$sect)) ? 'checked="checked"' : ''): '');?>  />
              Energy</label>
          </div>
          
         <div class="chkbox">
            <label class="check">
              <input type="checkbox" name="sector[]" value="healthcare" <?php echo ( isset($sect) ? ((in_array('healthcare',$sect)) ? 'checked="checked"' : ''): '');?> />
              Healthcare</label>
          </div>
          
          <div class="chkbox">
            <label class="check">
              <input type="checkbox" name="sector[]" value="education" <?php echo ( isset($sect) ? ((in_array('education',$sect)) ? 'checked="checked"' : ''): '');?>  />
              Education</label>
          </div>
          <div class="chkbox">
            <label class="check">
              <input type="checkbox" id="other_areas" name="sector[]" onclick="check()" value="others" <?php echo (!empty($sect) ? ((in_array('others', $sect)) ? 'checked="checked"' : ''): '');?> />
              Other</label>
          </div>
           <div id="a_other" class="chkbox fleft" <?php echo ((in_array('others',$sect)) ? 'style="display:block;"' : 'style="display:none;"');?>  >
            <label class="check">
              <input type="text" name="areas_other" id="areas_other" value="<?php echo ((isset($details['areas_other'])) ? $details['areas_other'] : ""); ?>"/>
            </label>
          </div>
          <div class="spacer"></div>
          <div id="error_msg2" class="chkbox fleft"></div>
        </dd>
           <dt>
             <label for="how_long">How long have you been in operation?</label>
        </dt>
        <dd>
            <select id="how_long" name="how_long">
                <option value="">-Select-</option>
          		 <option value="less than one year" <?php if($details['how_long']=='less than one year'){ echo 'selected';}?>>Less than one year</option>
          		 <option value="1 - 2 year" <?php if($details['how_long']=='1 - 2 year'){ echo 'selected';}?>>1 - 2 year</option>
          		 <option value="more than 2 years" <?php if($details['how_long']=='more than 2 years'){ echo 'selected';}?>>More than 2 years</option>
            </select>
        </dd>
          
          <dt>
          <label>Which regions do you operate in?</label>

        </dt>
        <dd>
           <select id="org_state" name="org_state">
            <option value="">State</option>
              <?php
                $i=1;
                  foreach($data as $rowdata) { ?> 
                    <option value="<?php echo $rowdata['state_name'];?>"  <?php echo (isset($rowdata) ? ($details['org_state'] == $rowdata['state_name'] ? 'selected="selected"' : ''): '');?> ><?php echo $rowdata['state_name'];?></option>
                  <?php $i++;} ?>
          </select>
        </dd>
        
        <dt class="text-label">
          <label> Provide brief explanation of the pilots that you have run for your venture?<span class="req">*</span></label>
         </dt>
        <dd class="text-area">
          <textarea class="input-text" id="question_4" name="question_4" onkeypress="countWordsLeft(this.id)"><?php echo ((isset($details) && isset($details['quest_4'])) ? $details['quest_4'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum characters: 10). You have
          <input readonly="readonly" type="text" name="countdown_question_4" id="countdown_question_4" size="3" value="10" style="width:40px;" />
          characters left.</span> </dd>
        
         
        <dt>
          <label>Have you raised funding?<span class="req">*</span></label>

        </dt>
			 
        <dd class="checkbox-div">

          <div class="chkbox">
            <label class="check">
              <input type="checkbox" id="fund1"name="fund" onclick="check2(this.value)" value="yes" <?php if($details['fund']=='yes'){ echo 'checked="checked"';}?> />
              Yes</label>
          </div>
          <div class="chkbox">
            <label class="check">
              <input type="checkbox" id="fund2" name="fund" onclick="check2(this.value)" value="no" <?php if($details['fund']=='no'){ echo 'checked="checked"';}?> />
              No</label>
          </div>
           <label class="error" for="fund" style="display:none"></label>
          <div class="spacer"></div>
          
          <div id="error_msg2" class="chkbox fleft"></div>
         
        </dd>
          <div <?php if($details['fund']=='yes'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?>  id="a_fund">
        <dt class="text-label">
              <label>If yes, how much and from whom?<span class="req">*</span></label>
        </dt>
          <dd class="text-area" >
            
          <textarea class="input-text" id="question_5" name="question_5" onKeyDown="limitText(this.form.question_5,this.form.countdown_question_5,100);" 
onKeyUp="limitText(this.form.question_5,this.form.countdown_question_5,100);"  ><?php echo ((isset($details) && isset($details['quest_5'])) ? $details['quest_5'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum characters: 100). You have
          <input readonly="readonly" type="text" name="countdown_question_5" id="countdown_question_5" size="3" value="100" style="width:40px;" />
          characters left.</span>
           
         </dd>
          </div>
          
          
			<dt>
          <label> Have you won a prize, recognition, award for your enterprise? If yes, please mention below<span class="req">*</span></label>

        </dt>
        <dd class="checkbox-div">
        <input type="text" name="awards" id="awards" value="<?php echo $details['awards']; ?>"/>
        </dd>			
			 <!--<dd class="checkbox-div">

          <div class="chkbox">
            <label class="check">
              <input type="checkbox" id="awards1"name="awards" onclick="check3(this.value)" value="yes" <?php if($details['awards']=='yes'){ echo 'checked="checked"';}?>  />
              Yes</label>
          </div>
          <div class="chkbox">
            <label class="check">
              <input type="checkbox" id="awards2" name="awards" onclick="check3(this.value)" value="no" <?php if($details['awards']=='no'){ echo 'checked="checked"';}?>  />
              No</label>
          </div>
          <div  id="share" <?php if($details['awards']=='yes'){ echo 'style="display:inline;"';} else { echo 'style="display:none;"';}?> >
            <label class="check">
              <input type="text" name="awards_yes" id="awards_yes" value="<?php echo ((isset($details['awards_yes'])) ? $details['awards_yes'] : ""); ?>"/>
            </label>
          </div>
          <label class="error" for="awards" style="display:none"></label>
          <div class="spacer"></div>
          <div id="error_msg2" class="chkbox fleft"></div>
        </dd>    -->      
          <div>
          <dt class="text-label">
              <label>Any other supporting document you would like to share pertaining to the business?</label>
        </dt>
        
        <dd class="text-area">
        <table border="0" cellpadding="10px" cellspacing="10px" >
			<tr style="height:30px;"> <td width="37%">Media coverage</td><td> <input type="file" name="media" id="media"  /><p>(example:.pdf,.doc,.docx,.xls,.xlsx,.txt)</p></td><td><?php echo $awardmen['media'];?></td></tr>
			<tr style="height:30px;"><td>Marketing collateral</td><td> <input type="file" name="marketing" id="marketing"  /><p>(example:.pdf,.doc,.docx,.xls,.xlsx,.txt)</p></td><td><?php echo $awardmen['marketing'];?></td></tr>
			<tr style="height:30px;"><td>Photo of product</td><td> <input type="file" name="photo" id="photo"  /><p>(example:.gif,.jpeg,.jpg,.png)</p></td><td><?php echo $awardmen['photo'];?></td></tr>
			<tr style="height:30px;"><td>Business Plan</td><td> <input type="file" name="business" id="business"  /><p>(example:.pdf,.doc,.docx,.xls,.xlsx,.txt)</p></td><td><?php echo $awardmen['business'];?></td></tr>
			<tr style="height:30px;"><td>Links /Youtube videos</td><td> <input type="text" name="link" id="link" value="<?php echo $awardmen['link'];?>"  /></td></tr>
			</table>
         <input type="hidden" name="media_hidden" value="<?php echo $awardmen['media'];?>">   
         <input type="hidden" name="marketing_hidden" value="<?php echo $awardmen['marketing'];?>">  
         <input type="hidden" name="photo_hidden" value="<?php echo $awardmen['photo'];?>">  
         <input type="hidden" name="business_hidden" value="<?php echo $awardmen['business'];?>">  
         <input type="hidden" name="link_hidden" value="<?php echo $awardmen['link'];?>">  
        </dd>
        </div>
     <br/>
     <dt class="text-label">
          <label>What is your expectation from Unconvention|L Pitch session?</label>
         </dt>
        <dd class="text-area">
          <textarea class="input-text" id="question_6" name="question_6" onKeyDown="limitText(this.form.question_6,this.form.countdown_question_6,100);" 
onKeyUp="limitText(this.form.question_6,this.form.countdown_question_6,100);"><?php echo ((isset($details['quest_6'])) ? $details['quest_6'] : ""); ?></textarea>
          <div class="spacer"></div>
          <span style="margin:5px 0px 0px;">(Maximum characters: 250). You have
          <input readonly="readonly" type="text" name="countdown_question_6" id="countdown_question_6" size="3" value="100" style="width:40px;" />
          characters left.</span> </dd>
      <dt>
             <label for="about_us">How did you come to know about us?<span class="req">*</span></label>
        </dt>
        <dd>
            <select id="about_us" name="about_us" onchange="check4(this.value)">
                <option value="">-Select-</option>
          		 <option value="emailer" <?php if($details['about_us']=='emailer'){ echo 'selected';}?>>Emailer</option>
          		 <option value="poster" <?php if($details['about_us']=='poster'){ echo 'selected';}?>>Poster</option>
          		 <option value="social media" <?php if($details['about_us']=='social media'){ echo 'selected';}?>>Social Media </option>
          		 <option value="website" <?php if($details['about_us']=='website'){ echo 'selected';}?>>Website</option>
          		 <option value="others" <?php if($details['about_us']=='others'){ echo 'selected';}?>>Others</option>
            </select>
        </dd>
         
        <div id="emailer_div" <?php if($details['about_us']=='emailer'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?> >
        <dt>
             <label for="emailer">Please select a Emailer<span class="req">*</span></label>
        </dt>
        <dd>
            <select id="emailer" name="emailer">
                <option value="">-Select-</option>
          		 <option value="villgro" <?php if($details['emailer']=='villgro'){ echo 'selected';}?>>Villgro</option>
          		 <option value="partner" <?php if($details['emailer']=='partner'){ echo 'selected';}?>>Partner</option>
          	</select>
        </dd>
        </div>
        <div id="social_media_div" <?php if($details['about_us']=='social media'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?>>
        <dt>
             <label for="social_media">Please select a Social Media<span class="req">*</span></label>
        </dt>
        <dd>
            <select id="social_media" name="social_media">
                <option value="">-Select-</option>
          		 <option value="facebook" <?php if($details['social_media']=='facebook'){ echo 'selected';}?>>Facebook</option>
          		 <option value="twitter" <?php if($details['social_media']=='twitter'){ echo 'selected';}?>>Twitter</option>
          		 <option value="linkedin" <?php if($details['social_media']=='linkedin'){ echo 'selected';}?>>LinkedIn</option>
            </select>
        </dd>
        </div>
        <div id="website_div" <?php if($details['about_us']=='website'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?>>
        <dt>
             <label for="website">Please select a Website<span class="req">*</span></label>
        </dt>
        <dd>
            <select id="website" name="website" onchange="check5(this.value)">
                <option value="">-Select-</option>
          		 <option value="unconvention" <?php if($details['website']=='unconvention'){ echo 'selected';}?>>Unconvention</option>
          		 <option value="villgro" <?php if($details['website']=='villgro'){ echo 'selected';}?>>Villgro</option>
          		 <option value="other" <?php if($details['website']=='other'){ echo 'selected';}?>>Other</option>
            </select>
        </dd>
        </div>
        <div id="other_website_div" <?php if($details['website']=='other'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?>>
        <dt>
             <label for="other_website">Others<span class="req">*</span></label>
        </dt>
        <dd>
           <input type="text" name="other_website" id="other_website" value="<?php echo ((isset($details['other_website'])) ? $details['other_website'] : ""); ?>" />
        </dd>
        </div>
         <div id="other_aboutus_div" <?php if($details['about_us']=='others'){ echo 'style="display:block;"';} else { echo 'style="display:none;"';}?>>
        <dt>
             <label for="other_aboutus">Others<span class="req">*</span></label>
        </dt>
        <dd>
            <select id="other_aboutus" name="other_aboutus">
                <option value="">-Select-</option>
          		 <option value="referral" <?php if($details['other_aboutus']=='referral'){ echo 'selected';}?>>Referral</option>
          		 <option value="local media" <?php if($details['other_aboutus']=='local media'){ echo 'selected';}?>>Local Media</option>
          	</select>
        </dd>
        </div>
        
      </dl>

<br>


      <div class="spacer"></div>
      <div class="button-controls">
        <div class="buttons" style="width:129%!important;">
          <a href="#" class="button" data-toggle="modal" data-target="#preview" style="text-decoration:none;" >Preview</a>
         <?php if($_SESSION['status_pitch'] != 'completed'){?><input type="submit" class="button" value="Save" name="bt_save" id="bt_save"/><?php } ?> 
         <?php if($_SESSION['status_pitch'] != 'completed'){?> <input type="submit" class="button" value="Submit Application" name="bt_submit" id="bt_submit" /><?php } ?>
          <input type="button" class="button" value="Logout" onclick="setTimeout(function(){window.location = 'pitchStep2.php?logout=logout'},500)"/>
        </div>
        <div class="page-nav fright"> <a href="pitchStep1.php" id="previd" class="prev"><img src="images/prev.jpg" alt="" border="0" /></a> <!--<a href="step5.php" class="next"><img src="images/next.jpg" alt="" border="0" /></a>-->
          <div class="spacer"></div>
        </div>
      </div>
      
     <input type="hidden" id="formPath" value="pitchForm" />
      <input type="hidden" id="s1id" value="<?php echo isset($fit_id[0]['id'])?$fit_id[0]['id']:'';?>" />
        <input type="hidden" id="s1name" value="<?php echo isset($fit_name[0]['name'])?$fit_name[0]['name']:'';?>" />
        <input type="hidden" id="s1org" value="<?php echo isset($fit_org[0]['org'])?$fit_org[0]['org']:'';?>" />
        <input type="hidden" id="s1title" value="<?php echo isset($fit_title[0]['title'])?$fit_title[0]['title']:'';?>" />
        <input type="hidden" id="s1email" value="<?php echo isset($fit_email[0]['email'])?$fit_email[0]['email']:'';?>" />
        <input type="hidden" id="s1phone" value="<?php echo isset($fit_phone[0]['phone'])?$fit_phone[0]['phone']:'';?>" />
                
    </form>
  </div>
</div>

    <div class="modal fade" id="finalMsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" id="close_finalmsg" aria-hidden="true">&times;</button> 
                 <h2 style="font-family: 'Asap',sans-serif;
                         font-size: 16px; color:green">THANK YOU FOR APPLYING TO THE VILLGRO PITCH PROGRAM</h2>
            </div>
                          
                          <div class="modal-body" style="height: 118px; overflow: hidden;">
                          You have now successfully submitted your application. We will review your application form carefully 
                          over the next few weeks and come to a decision. Only shortlisted candidates will be contacted.
  
                          </div>

                       
           </div>
        </div>
      </div>


    <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h1 class="modal-title" id="myModalLabel" style="font-family: 'Asap',sans-serif;font-size: 16px;">Pitch Application</h1>
                       </div>
                         
                             
                        <div class="modal-body">
                            <div class="spacer"></div>
                          
                            <dl style="font-size:12px;" class="dl-horizontal">
                               
                                <p style="font-size:14px;color:green;font-weight:bold;">Registration details</p>
                  		        <dt><label class="p-label">Name of Organization </label></dt><dd><?php echo $i_orgname; ?></dd>
                                <dt><label class="p-label">Name of Applicant</label></dt><dd><?php echo $i_appname; ?></dd>
                                <dt><label class="p-label">Age</label></dt><dd><?php echo $i_age; ?></dd>                            
                                <dt><label class="p-label">Gender</label></dt><dd><?php echo $i_gender; ?></dd>                            
                                <dt><label class="p-label">Email</label></dt><dd><?php echo $i_email;?></dd> 
                                <dt><label class="p-label">Mobile number</label></dt><dd><?php echo $i_mobileno; ?></dd>                            
                                <dt><label class="p-label">Alternate phone number</label></dt><dd><?php echo $i_altmobileno;?></dd>                            
                                                          
                                 <br/>
                           </dl>  
                           <?php if($num_rows>0){ ?>
                            <dl style="font-size:12px;" class="dl-horizontal">
                               
                                <p style="font-size:14px;color:green;font-weight:bold;">Applicant Information</p>
                  		         <p style="margin-left:152px;font-size:14px;color:#A9CF55;">Team Member 1 </p>
                                <dt><label class="p-label">Name</label></dt><dd><?php echo $fit_name[0]['name']; ?></dd>
                                <dt><label class="p-label">Current organization</label></dt><dd><?php echo $fit_org[0]['org']; ?></dd>
                                <dt><label class="p-label">Current title</label></dt><dd><?php echo $fit_title[0]['title']; ?></dd>                            
                                <dt><label class="p-label">Email address</label></dt><dd><?php echo $fit_email[0]['email']; ?></dd>                            
                                <dt><label class="p-label">Mobile Number</label></dt><dd><?php echo $fit_phone[0]['phone'];?></dd>                            
                                 <br/>
                                                                  
                  		         <p style="margin-left:152px;font-size:14px;color:#A9CF55;">Team Member 2 </p>
                                <dt><label class="p-label">Name</label></dt><dd><?php echo $fit_name[1]['name']; ?></dd>
                                <dt><label class="p-label">Current organization</label></dt><dd><?php echo $fit_org[1]['org']; ?></dd>
                                <dt><label class="p-label">Current title</label></dt><dd><?php echo $fit_title[1]['title']; ?></dd>                            
                                <dt><label class="p-label">Email address</label></dt><dd><?php echo $fit_email[1]['email']; ?></dd>                            
                                <dt><label class="p-label">Mobile Number</label></dt><dd><?php echo $fit_phone[1]['phone'];?></dd>                            
                                 <br/>
                                 
                                <p style="margin-left:152px;font-size:14px;color:#A9CF55;">Team Member 3 </p>
                                <dt><label class="p-label">Name</label></dt><dd><?php echo $fit_name[2]['name']; ?></dd>
                                <dt><label class="p-label">Current organization</label></dt><dd><?php echo $fit_org[2]['org']; ?></dd>
                                <dt><label class="p-label">Current title</label></dt><dd><?php echo $fit_title[2]['title']; ?></dd>                            
                                <dt><label class="p-label">Email address</label></dt><dd><?php echo $fit_email[2]['email']; ?></dd>                            
                                <dt><label class="p-label">Mobile Number</label></dt><dd><?php echo $fit_phone[2]['phone'];?></dd>                            
                                 <br/>

                          </dl>  
                          <?php } ?>  
                           <?php if(!empty($details['pitch_id'])){ ?>
                          <dl style="font-size:12px;" class="dl-horizontal">
                            <p style="font-size:14px;color:green;font-weight:bold;">Information about enterprise </p>
                                <dt><label class="p-label">Briefly describe your idea, product or service?</label></dt><dd> <?php echo $details['quest_1']; ?></dd>
                                <dt><label class="p-label">Describe the innovative element in your enterprise?</label></dt><dd> <?php echo $details['quest_2']; ?></dd>
                                <dt><label class="p-label">What need does your business address? What is the social benefit created by your enterprise?</label></dt><dd> <?php echo $details['quest_3']; ?></dd>
                                <dt><label class="p-label">Sector</label></dt><dd> <?php echo implode(',',$sect); ?></dd>
                               <?php if(in_array('others',$sect)) { ?>
                                <dt><label class="p-label">If other Sector?</label></dt><dd><?php echo $details['areas_other']; ?></dd>
                                <?php } ?>
                                <dt><label class="p-label">How long have you been in operation?</label></dt><dd><?php echo ucfirst($details['how_long']); ?></dd>
                                <dt><label class="p-label">Which regions do you operate in?</label></dt><dd><?php echo ucfirst($details['org_state']);?></dd>
                                <dt><label class="p-label">Provide brief explanation of the pilots that you have run for your venture.</label></dt><dd><?php echo $details['quest_4']; ?></dd>
                                <dt><label class="p-label">Have you raised funding?</label></dt><dd><?php echo ucfirst($details['fund']); ?></dd>
                                <?php if($details['fund']=='yes'){?>
                                <dt><label class="p-label">If yes, how much and from whom?</label></dt><dd><?php echo $details['quest_5']; ?></dd>
                                <?php } ?>
                                <dt><label class="p-label">Have you won a prize, recognition, award for your enterprise? If yes, please mention below</label></dt><dd><?php echo $details['awards']; ?></dd>
                                <label class="p-label">Any other supporting document you would like to share pertaining to the business?</label></dt><dd></dd>
                                <dt><label class="p-label">Media coverage</label></dt><dd><?php echo $awardmen['media']; ?></dd>
                                <dt><label class="p-label">Marketing collateral</label></dt><dd><?php echo $awardmen['marketing']; ?></dd>
                                <dt><label class="p-label">Photo of product</label></dt><dd><?php echo $awardmen['photo']; ?></dd>
                                <dt><label class="p-label">Business Plan</label></dt><dd><?php echo $awardmen['business']; ?></dd>
                                <dt><label class="p-label">Links /Youtube videos</label></dt><dd><?php echo $awardmen['link']; ?></dd>                                
                                <dt><label class="p-label">What is your expectation from Unconvention|L Pitch session?</label></dt><dd> <?php echo $details['quest_6']; ?></dd>
                                <dt><label class="p-label">How did you come to know about us?</label></dt><dd><?php echo ucfirst($details['about_us']); ?></dd>
                                <?php if($details['about_us']=='emailer'){?>
                                <dt><label class="p-label">Please select a Emailer</label></dt><dd><?php echo ucfirst($details['emailer']); ?></dd>
                                <?php } ?>
                                <?php if($details['about_us']=='social media'){?>
                                <dt><label class="p-label">Please select a Social Media</label></dt><dd><?php echo ucfirst($details['social_media']); ?></dd>
                                <?php } ?>
                                 <?php if($details['about_us']=='website'){?>
                                <dt><label class="p-label">Please select a Website</label></dt><dd><?php echo ucfirst($details['website']); ?></dd>
                                <?php } ?>
                                <?php if(($details['website']=='other') && ($details['about_us']=='website')){?>
                                <dt><label class="p-label">Other</label></dt><dd><?php echo ucfirst($details['other_website']); ?></dd>
                                <?php } ?>
                                <?php if($details['about_us']=='others'){?>
                                <dt><label class="p-label">Others</label></dt><dd><?php echo $details['other_aboutus']; ?></dd>
                                <?php } ?>
                                                         
                           </dl> 
                           <?php } ?>    
                           
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        </div>
                       
                 </div>
               </div>
           </div>


                                
</body>

</html>
<script>
$(document).ready(function(){

 
    <?php if($_GET['msg'] == 'completed'){ ?>
      $('#finalMsg').addClass('in');
      $('#finalMsg').css('display','block');
      $('#finalMsg').attr('aria-hidden','false');  
    <?php } ?>
    
     
});
</script>
<script>
$(document).ready(function(){

var original = $('#step2Form').serialize();
    var save = "<?=$_SESSION['status_pitch'];?>";
    
$('#fund').on('change', function () {

        $('input[name="question_5"]').rules('remove');

        if ($(this).val() =='yes') {  // Amount
            $('input[name="question_5"]').rules('add', {
                 required: true
            });
        } 
        
        $('input[name="question_5"]').valid();  // trigger validation of the text field (optional)

    });	
	
 $.validator.addMethod("extension", function(value, element, param) {
      param = typeof param === "string" ? param.replace(/,/g, '|') : "doc|docx|pdf|xls|xlsx|txt|gif|jpeg|jpg|png";
     return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
  }, $.format("Please enter a value with a valid extension."));


$('#step2Form').validate({
                rules: {
                  'media':{
           			    extension:"doc|docx|pdf|xls|xlsx|txt"
         			    },
           			 'marketing':{
             			 extension:"doc|docx|pdf|xls|xlsx|txt"
           			 },
           			 'photo':{
             			 extension:"gif|jpeg|jpg|png"
           			 },
           			 'business':{
             			 extension:"doc|docx|pdf|xls|xlsx|txt"
           			 },
           			 'link':{
             			 url:true
           			 }
                              
                },
                messages: {
                   'media': { extension:'Only pdf,doc,docx,xls,xlsx,txt files are accepted'},
                   'marketing': { extension:'Only pdf,doc,docx,xls,xlsx,txt files are accepted'},
                   'photo': { extension:'Only gif,jpeg,jpg,png files are accepted'},
                  'business': { extension:'Only pdf,doc,docx,xls,xlsx,txt files are accepted'},
                  'link': { url:'Links url is accepted'},
                   
                }
              });  
   $("#previd").click(function(){
	if(save != 'completed'){
    if($('#step2Form').serialize() != original){
    	if(confirm("Changes made in form are not saved \n Do you want to continue without save?")){
        return(true);
      }else{
        return(false);
      }
    }
}
});           
    
});
</script>
