<?php include('header.php'); ?>
	<script type="text/javascript">
		function validate()
		{
			var err="";
			  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if(document.get_quote_1.contactemail.value == "")
			{
				document.getElementById('contactemail1').style.display="block";
				document.getElementById('contactemail1').style.color ="#a94442";
				document.getElementById('contactemail').style.borderColor ="#a94442";
				document.getElementById('contactemail2').style.display="none";
				document.getElementById('contactemail2').style.color ="";
				err="error";
				
			}
			else if(reg.test(document.get_quote_1.contactemail.value ) == false) 
			{
				document.getElementById('contactemail1').style.display="none";
				document.getElementById('contactemail1').style.color ="";
				document.getElementById('contactemail2').style.display="block";
				document.getElementById('contactemail2').style.color ="#a94442";
				document.getElementById('contactemail').style.borderColor ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('contactemail1').style.display="none";
				document.getElementById('contactemail1').style.color ="";
				document.getElementById('contactemail2').style.display="none";
				document.getElementById('contactemail2').style.color ="";
				document.getElementById('contactemail').style.borderColor ="#ccc";
				
			}
			if(document.get_quote_1.contactName.value == "")
			{
				document.getElementById('contactName1').style.display="block";
				document.getElementById('contactName1').style.color ="#a94442";
				document.getElementById('contactName').style.borderColor ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('contactName1').style.display="none";
				document.getElementById('contactName1').style.color ="";
				document.getElementById('contactName').style.borderColor ="#ccc";
				
			}
			if(document.get_quote_1.need_a.checked == false && document.get_quote_1.need_a1.checked == false)
			{
				document.getElementById('need_a_1').style.display="block";
				document.getElementById('need_a_1').style.color ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('need_a_1').style.display="none";
				document.getElementById('need_a_1').style.color ="";
			
			}
			if(document.get_quote_1.Phone.value == "")
			{
				document.getElementById('Phone1').style.display="block";
				document.getElementById('Phone1').style.color ="#a94442";
				document.getElementById('Phone').style.borderColor ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('Phone1').style.display="none";
				document.getElementById('Phone1').style.color ="";
				document.getElementById('Phone').style.borderColor ="#ccc";
				
			}
			if(document.get_quote_1.budget_range.value == "")
			{
				document.getElementById('budget_range1').style.display="block";
				document.getElementById('budget_range1').style.color ="#a94442";
				document.getElementById('budget_range').style.borderColor ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('budget_range1').style.display="none";
				document.getElementById('budget_range1').style.color ="";
				document.getElementById('budget_range').style.borderColor ="#ccc";
				
			}
			
			if(document.get_quote_1.dp.value == "")
			{
				document.getElementById('dp1').style.display="block";
				document.getElementById('dp1').style.color ="#a94442";
				document.getElementById('dp').style.borderColor ="#a94442";
				err="error";
			}
			else
			{
				document.getElementById('dp1').style.display="none";
				document.getElementById('dp1').style.color ="";
				document.getElementById('dp').style.borderColor ="#ccc";
				
			}
			
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
	<div class="jumbotron">
    <center><h1>Get a free quote</h1>
    <p>Tell us what you need so we can provide you with the best deal out there!</p></center>
</div>
		<div id="contactWrap" style="padding-top:20px; !important">
		<div class="overlay">
			<div class="container">
				<form name="get_quote_1" action="/quote2/" method="post" onsubmit="return validate();">	
				
					<div class="row">
						<div class="col-12 col-lg-8 col-lg-offset-2">

						<div class="panel">
						<div class="panel-body">
							
							<div class="form-group">
							<label>Name</label>
							<input type="text" name="contactName" id="contactName" value="" class="form-control" autocomplete="off" />
							<span id="contactName1" style="display: none;">Please enter your name.</span>
							 </div>
							 <div class="form-group">
							<label>Email</label>
							<input type="text" name="contactemail" id="contactemail" value="" class="form-control" autocomplete="off" />
							<span id="contactemail1" style="display: none;">Please enter your Email Address.</span>
							<span id="contactemail2" style="display: none;">Please enter Valide Email Address.</span>
							 </div>
							<div class="form-group">
							<label class="screen-reader-text" style="width:100%;">I Need</label>
							<input type="checkbox" name="need_a" value="1"/>&nbsp;&nbsp;A new website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="need_a1" value="1" />&nbsp;&nbsp;Digital Marketing
							<span id="need_a_1" style="display: none;">Please Select Atleat One Checkbox.</span>
							  </div>
							  <div class="form-group">
							<label>Phone</label>
								<input type="text" name="Phone" id="Phone" value="" class="form-control" autocomplete="off" />
							<span id="Phone1" style="display: none;">Please enter a Phone.</span>
							  </div>
							  <div class="form-group">
							<label class="screen-reader-text">Budget Range</label>
								<select name="budget_range" id="budget_range" class="form-control">
									<option value="">-- Select Budget --</option>
									<option value="1">$5,000 - 10,000</option>
									<option value="2">$11,000 - 20,000</option>
									<option value="3">$21,000 - 50,000</option>
								</select>
							<span id="budget_range1" style="display: none;">Please Select Budget Range.</span>
							  </div>
							  <div class="form-group">
							<label class="screen-reader-text">Looking To Start</label>
								<input type="text" id="dp" name="dp" value="" class="form-control span2">
							<span class="help-block"  id="dp1" style="display: none;">Please Select Start Date.</span>
							  </div>
							  <input type="submit" name="Next" id="feedbackSubmit" class="btn btn-success btn-lg" value="Next" style="display: block; margin-top: 10px;">
						
						</div>
						</div>
				</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- /contactWrap -->
	<script src="/assets/js/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp').datepicker({
				format: 'mm-dd-yyyy'
			});

		});
	</script>
<?php include('footer.php'); ?>