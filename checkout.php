<?php
include('header.php');
include('dbsettings.php');
?>

<!-- VALIDATE THE FORM AND SEND TO STRIPE FOR PROCESSING IF OK -->

<script type="text/javascript">
  $(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#checkout_form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });
  function cleanError(error) {
    var errors = {
      // "invalid_number": ""
    };
    console.log(error);
    return (error.code in errors ? errors[error.code] : error.message);
  }
  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(cleanError(response.error));
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.data('cc-on-file', true);
      $form.append("<input type='hidden' name='stripe_token' value='" + token + "'/>");
      $form.submit();
    }
  }
})
  </script>

  <div class = "jumbotron">
        <center><h1>Online Bill Pay</h1>
        <p>Pay your bills online and at your own convenience with Welyx online bill payment center</p>
        </center>
    </div>
<?php if(isset($fail) && $fail): ?>
<div class="container " id="loginWrap" >
    <div class='form-row'>
            <div class='col-md-8 col-md-offset-2' style="padding: 20px 0 10px 0;">
    <div class=" col-md-12 form-group">
          <div class='alert-danger alert'>
            Invalid Invoice Number 
          </div>
          Redirecting you back in 2 seconds..
    </div>
    </div>
</div>
</div>
            <?php $url='/payments';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$url.'">';

            ?>
        </div>
    </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container " id="loginWrap" >


    <div class='form-row'>
        <div class='col-md-8 col-md-offset-2 table-bordered' style="padding: 20px 0 10px 0;">
          <div class='col-md-12 form-group'>
          <div class="blurb">
          <h1 align="center">#<?php echo($invoice); ?> <small>outstanding for the amount of <strong>$<?php echo($amount); ?></strong></small></h1>
 		  </div>

            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>

          <!-- pk_test_zCT3pWueuyJRemsl9kuunJpl -->
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/payment-received/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_live_ZefK8tNUNekKCj3pvI8Odsaw" id="checkout_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="PUT" />
            <input type="hidden" name="price" value="<?php echo $amount*100; ?>"  />
  		      <input type="hidden" name="invoice" value="<?php echo $invoice ?>"  />
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' type='text' name="name">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number'  type='text'>
              </div>
            </div>
             <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Billing Address</label>
                <input autocomplete='off' class='form-control'  type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' type='text'>
              </div>
            </div>
 <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'> $<?php echo($amount); ?></span>
                </div>
              </div>
            </div>

            <div class='form-row'>
              <div class='col-md-12 form-group'>
               <!-- <button class='col-sm-12 btn btn-success btn-lg' type='submit'>Pay</button>-->
			       <input type="submit" name="submitbtn" value="Pay" class="col-sm-12 btn btn-success btn-lg"  />
              </div>
            </div>

		 </form>
        </div>

        <div class='col-md-4'></div>
    </div>
</div>
</div></div>
<?php endif; ?>
<?php include('footer.php'); ?>
