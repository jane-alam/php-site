<?php
    include('header.php');
    // require_once('/init.php');
    require 'Stripe.php';
    if ($_POST) {
      // Stripe::setApiKey("sk_test_x6QU1P6gueoIqARIVRj0FR2B");
      Stripe::setApiKey("sk_live_JI0eH6MhDtwx0D0i9x0FLG8D");
      // die('Test');
      $error = '';
      $success = '';
      try {
        if (!isset($_POST['stripe_token']))
          throw new Exception("The Stripe Token was not generated correctly");
        Stripe_Charge::create(
          array(
              "amount" => $_POST['price'],
              "description" => $_POST['description'] . $_POST['name'],
              "currency" => "usd",
              "card" => $_POST['stripe_token']
        ));
        $success = 'Your payment was successful.';

      }
      catch (Exception $e) {
        $error = $e->getMessage();
      }
    }
?>

<div class = "jumbotron">
        <center><h1>Online Bill Pay</h1>
        <p>Pay your bills online and at your own convenience with Welyx online bill payment center</p>
        </center>
    </div>

    
    <div class="container" id="loginWrap" >

        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
              <div class='col-md-12 form-group'>
              <?php if(!empty($success)) : ?>
              <!-- DISPLAY SUCCESS MESSAGE -->
              <h1 align="center"><?php echo $success; ?></h1>
              <hr class="featurette-divider"></hr>
              <p align="center">We are processing your payment and will apply to your account within 24 hours.</p>
             <!-- END SUCCESS MESSAGE -->
           <?php elseif(!empty($error)) : ?>
              <h1 align="center">Your payment could <strong>not</strong> be processed</h1>
              <hr class="featurette-divider"></hr>
              <p align="center">Please try a different credit card or contact your bank.</p>
            <?php else : ?>
               <h1 align="center">Invalid Access Token <small>Your ip is being monitored (<?php echo $_SERVER['REMOTE_ADDR']; ?>)</h1>
            <?php endif; ?>
            </div>
            <div class='col-md-4'></div>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
