<?php include('header.php'); ?>
<script>
    $(function(){
        $('form').on('submit', function(){
            var data = $(this).serializeArray()
            $.post('contactsender.php', data, function(r,s){
               
            });
            // Updated answer (change submit button's ID to class instead);
            $(this).find('.submit').prop('disabled', true);
            return false;
        })
    })
</script>

		<div class="overlay">
		 <div class = "jumbotron">
            <center><h1>Contact us</h1>
            <p>Have a question? Send us a message. We'd love to hear from you!</p>
            </center>
        </div>
	<div id="loginWrap" class="container">
       <div class="col-12 col-lg-8 col-lg-offset-2">

			<div class="panel">
			<div class="panel-body">
			<!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->

			<form role="form" id="feedbackForm" method="POST" action="contactsender.php">
			      <div class="form-group">
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				<span class="help-block" style="display: none;">Please enter your name.</span>
			      </div>
			      <div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
				<span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
			      </div>
			      <div class="form-group">
				<textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
				<span class="help-block" style="display: none;">Please enter a message.</span>
			      </div>
			      <img id="captcha" src="/assets/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
			      <a href="#" onclick="document.getElementById('captcha').src = '/assets/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-default btn-sm">Show a Different Image</a><br/>
			      <div class="form-group" style="margin-top: 10px;">
				<input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="For security, please enter the code displayed in the box." />
				<span class="help-block" style="display: none;">Please enter the code displayed within the image.</span>
			      </div>

			      <span class="help-block" style="display: none;">Please enter a the security code.</span>
			      <input type="submit" id="feedbackSubmit" class="btn btn-success btn-lg" value="Send Message" style="display: block; margin-top: 10px;">
			</form>
			<!-- END CONTACT FORM -->
			</div>
			</div>
		</div>
      </div>
    </div> <!-- /container -->
	
<script src="/assets/js/contact-form.js"></script>
<?php include('footer.php'); ?>
