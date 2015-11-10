<?php
	include('header.php');
	/*include('dbsettings.php');*/
?>

<div class="container" id="loginWrap" >
    <div class='row'>
        <div class='col-md-12'></div>
        <div class='col-md-12'>
          <div class='col-md-12 form-group'>
          <h2 class="sectionTitle">Credit Card Authorization Form</h2>
          <hr class="featurette-divider"></hr>
          <h3>You hereby agree to the following:</h3>
          <p>I authorize SagaNET, LLC (“WELYX”) to charge the credit card listed below for payment of fees incurred by the Customer listed below. WELYX will continue to provide detailed statements. I certify that I am authorized to sign this form on behalf of the Customer’s Name. This information will be maintained securely by WELYX. I will notify WELYX in the event that the credit card information below is lost, stolen, expires or is canceled. WELYX does not apply a convenience fee to payments made with a credit card on file.</p>
          <hr class="featurette-divider"></hr>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/" class="require-validation col-md-6" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
             <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Billing Address</label>
                <input autocomplete='off' class='form-control' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>


            <div class='form-row'>
              <div class='col-md-12 form-group'>
                         <hr class="featurette-divider"></hr>
                <button class='form-control btn btn-success submit-button' type='submit'> Authorize my card</button>
              </div>
            </div>

            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class='col-md-12'><p class="bg-info">Your IP Address <?php echo $_SERVER["REMOTE_ADDR"]; ?> is being logged into your authorization file.</p></div>
    </div>
</div>
</div>
	<?php include('footer.php'); ?>
