<?php include('header.php'); ?>
	<?php

					if($_REQUEST['Next']=='Next')
					{
						$need1=$_REQUEST['need_a'];
						$need2=$_REQUEST['need_a1'];
						if($need1==1 && $need2=='1')
						{
							$need3=='1';
						}
					}
				?>
				<script>
	$(document).ready(function(){
		document.getElementById('div_social').style.display='none';
	document.getElementById('comment_div').style.display='none';
 var cnt = 2;
 $("#anc_add").click(function(){
 $('#tbl1 tr').last().after('<tr><td><input type="text" name="social_url[]" data-required="true" class="form-control"></td></tr>');
 cnt++;
 });
 
$("#anc_rem").click(function(){
if($('#tbl1 tr').size()>1){
 $('#tbl1 tr:last-child').remove();
 }else{
 alert('One row should be present in table');
 }
 });
 
});

function change_div_style(a,b)
{
	if(a =='yes')
	{
		
		document.getElementById(b).style.display='block';
	}
	if(a =='no')
	{
		
		document.getElementById(b).style.display='none';
	}
}
</script>

<script type="text/javascript">
	function validate()
	{
		var err="";
	 <?php if($need1==1) { ?>
		if(document.get_quote_2.logo.value == "")
		{
			document.getElementById('logo1').style.display="block";
			document.getElementById('logo1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('logo1').style.display="none";
			document.getElementById('logo1').style.color ="";			
		}
		if(document.get_quote_2.domain.value == "")
		{
			document.getElementById('domain1').style.display="block";
			document.getElementById('domain1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('domain1').style.display="none";
			document.getElementById('domain1').style.color ="";			
		}
		if(document.get_quote_2.hosting.value == "")
		{
			document.getElementById('hosting1').style.display="block";
			document.getElementById('hosting1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('hosting1').style.display="none";
			document.getElementById('hosting1').style.color ="";			
		}
		if(document.get_quote_2.web1.checked==false && document.get_quote_2.web2.checked==false)
		{
			document.getElementById('web3').style.display="block";
			document.getElementById('web3').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('web3').style.display="none";
			document.getElementById('web3').style.color ="";			
		}
		if(document.get_quote_2.comments.value == "")
		{
			document.getElementById('comments1').style.display="block";
			document.getElementById('comments1').style.color ="#a94442";
			document.getElementById('commentsText').style.borderColor ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('comments1').style.display="none";
			document.getElementById('comments1').style.color ="";
			document.getElementById('commentsText').style.borderColor ="#ccc";
		}
		if(document.get_quote_2.digital.value == "")
		{
			document.getElementById('digital1').style.display="block";
			document.getElementById('digital1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('digital1').style.display="none";
			document.getElementById('digital1').style.color ="";
		}
	<?php } ?>
	<?php if($need2=='1' || $need3=='1') {?>
		if(document.get_quote_2.website.value == "")
		{
			document.getElementById('website1').style.display="block";
			document.getElementById('website1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('website1').style.display="none";
			document.getElementById('website1').style.color ="";
		}
	<?php } ?>
	<?php if($need2=='1') {?>
		if(document.get_quote_2.digital_market.value == "")
		{
			document.getElementById('digital_market1').style.display="block";
			document.getElementById('digital_market1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('digital_market1').style.display="none";
			document.getElementById('digital_market1').style.color ="";
		}	
		if(document.get_quote_2.social.value == "")
		{
			document.getElementById('social1').style.display="block";
			document.getElementById('social1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('social1').style.display="none";
			document.getElementById('social1').style.color ="";
		}
		if(document.get_quote_2.accomplish.value == "")
		{
			document.getElementById('accomplish1').style.display="block";
			document.getElementById('accomplish1').style.color ="#a94442";
			err="error";
		}
		else
		{
			document.getElementById('accomplish1').style.display="none";
			document.getElementById('accomplish1').style.color ="";
		}
	<?php } ?>
		
		if(err !="")
		{
			
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
	<style type="text/css">
	/* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}
	</style>
	<div class="jumbotron">
    <center><h1>Get a free quote</h1>
    <p>A place where you can find answers more easily and conveniently.</p></center>
</div>
		<div id="contactWrap" style="padding-top:20px;">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Get a free quote</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						We'd love to hear about your project so that we can put together the best web and strategic package for success - while staying affordable.
						</div>
					</div>
				</div>
			<form name="get_quote_2" action="/test_mail/" method="post" onsubmit="return validate();">	
			<input type="hidden" name="contact_need_st" value="<?php if($_REQUEST['need_a']=='1') { echo "1" ;} if($_REQUEST['need_a1']=='1') { echo "2";}?>" />
				<input type="hidden" name="name_contact" value="<?php echo $_REQUEST['contactName']; ?>" />
				<input type="hidden" name="email_contact" value="<?php echo $_REQUEST['contactemail']; ?>" />
				<input type="hidden" name="need_contact" value="<?php if($_REQUEST['need_a']=='1') { echo "A new website" ;} if($_REQUEST['need_a1']=='1') { echo "Digital Marketing ";}?>" />
				<input type="hidden" name="phone_contact" value="<?php echo $_REQUEST['Phone']; ?>" />
				<input type="hidden" name="budget_range" value="<?php if($_REQUEST['budget_range']=='1') { echo '$5,000 - $10,000'; } if($_REQUEST['budget_range']=='2') { echo '$11,000 - $20,000'; } if($_REQUEST['budget_range']=='3') { echo '$21,000 - $50,000'; } ?>" />
				<input type="hidden" name="date_contact" value="<?php  echo $_REQUEST['dp']; ?>" />	
				<div class="row">
						<div class="col-12 col-lg-8 col-lg-offset-2">

					<div class="panel">
						<div class="panel-body">
							 <?php if($need1==1) { ?>
								<div class="form-group">
									
										<label>Do you already have a logo? </label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="logo" id="logo" value="yes"/> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="logo" id="logo" value="no"/> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="logo1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								<div class="form-group">
									
										<label>Do you already have a domain name?</label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="domain" id="domain" value="yes" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="domain" id="domain" value="no" /> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="domain1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								<div class="form-group">
									
										<label>Do you already have a hosting account?</label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="hosting" id="hosting" value="yes" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="hosting" id="hosting" value="no" /> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="hosting1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								<div class="form-group">
									
										<label>What type of website do you need? </label>
										<div class="row">
										<div class="col-sm-3">
											<input type="checkbox" name="web1" id="web1" value="Showcase" /> &nbsp;&nbsp; Showcase 
										</div>
										<div class="col-sm-3">
											<input type="checkbox" name="web2" id="web2" value="Ecommerce" /> &nbsp;&nbsp; Ecommerce
										</div>
									</div>
								<span id="web3" style="display: none;">Please Select Atleast One Checkbox.</span>
								 </div>
								 <div class="form-group">
									
										<label>Tell Us About Your Project </label>
										<div class="row">
										<div class="col-sm-8">
											<textarea name="comments" id="commentsText" id="commentsText"  class="form-control" autocomplete="off"></textarea>
										</div>
									</div>
								<span id="comments1" style="display: none;">Please Enter Text In Comment box.</span>
								 </div>
								 <div class="form-group">
									
										<label>Upload File if Needed</label>
										<div class="row">
										<div class="col-sm-8">
											<input type="file" name="files[]" style="float: left;" id="js-upload-files" multiple>&nbsp;&nbsp;<!--<button style="width: auto; float: left; margin-top: 0px;" type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>-->
										</div>
									</div>
								<span id="file1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <div class="form-group">
									
										<label>Do you need help finding customers with digital marketing?</label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="digital" id="digital" value="yes" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="digital" id="digital" value="no" /> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="digital1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <?php } ?>
								 <?php if($need2=='1' && $need3=='1') 
								       {
								 ?>
								 <div class="form-group">
									
										<label>Do you already have a Website?</label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="website" id="website" value="yes" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="website" id="website" value="no"/> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="website1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 	
								 <?php } ?>
								 <?php if($need2=='1') { ?>
								 <div class="form-group">
									
										<label>Do you currently run digital marketing campaigns for your website ?</label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="digital_market" id="digital_market" value="yes" onclick="change_div_style(this.value,'comment_div')" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="digital_market" id="digital_market" value="no" onclick="change_div_style(this.value,'comment_div')"/> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="digital_market1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <div class="form-group"id="comment_div">
									
										<label>please explain what you are currently doing</label>
										<div class="row">
										<div class="col-sm-8">
											<textarea name="comments_explain" id="comments_explain" id="comments_explain" class="form-control" autocomplete="off"></textarea>
										</div>
									</div>
								<span id="comments_explain1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <div class="form-group">
									
										<label>Do you have social media accounts? (ie. Facebook, Twitter, etc) </label>
										<div class="row">
										<div class="col-sm-3">
											<input type="radio" name="social" id="social" value="yes" onclick="change_div_style(this.value,'div_social')" /> &nbsp;&nbsp; Yes
										</div>
										<div class="col-sm-3">
											<input type="radio" name="social" id="social" value="no" onclick="change_div_style(this.value,'div_social')" /> &nbsp;&nbsp; No
										</div>
									</div>
								<span id="social1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <div class="form-group">
								 <div class="row" id="div_social">
									<div class="col-sm-8">
										<table class="table" style=" display:inline-table;" id="tbl1">
									  <tbody>
										<tr>
											<td><input type="text" name="social_url[]" data-required="true" class="form-control"></td>
										</tr>
									  </tbody>
									</table>
										<div class="text-right">                      
										<button type="button" style="width:auto;" class="btn btn-success btn-lg" id="anc_add">+</button>
									</div>
									</div>
								</div>
									
								<span id="social_url1" style="display: none;">Please Select Atleast One Radio Button.</span>
								 </div>
								 <div class="form-group">
									
										<label>What are you looking to accomplish?</label>
										<div class="row">
										<div class="col-sm-8">
										<select name="accomplish" class="form-control" id="accomplish" style="margin-top:0px;">
											<option value="">-- select --</option>
											<option value="Increase brand exposure">Increase brand exposure</option>
											<option value="Convert sales">Convert sales</option>
										</select>
										</div>
									</div>
								<span id="accomplish1" style="display: none;">Please Select Atleast One Option.</span>
								 </div>
								 
								 <?php } ?>
								 <div class="row">	
									<div class="col-sm-8">
										<input name="Submit" style="width:auto;" type="Submit" value="Submit" class="btn btn-success btn-lg" />
									</div>
							</div>
						</div>
					</div>
				</div>
					</div>
			</form>		
			</div>
		</div>
	</div> <!-- /contactWrap -->
	
	
<?php include('footer.php'); ?>