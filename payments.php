<?php include('header.php');
?>
   <div class = "jumbotron">
        <center><h1>Online Bill Pay</h1>
        <p>Pay your bills online and at your own convenience with Welyx online bill payment center</p>
        </center>
    </div>

	<div class="container" id='loginWrap'>
    <div class="col-md-10 col-md-offset-1" style="padding:20px">
        <h2 align="center">Enter your invoice # <small>starting with INV</small></h2>
          <form class="form-inline centered text-center" role="form" action="/checkout" method="GET">
            <div class="form-group col-md-6 col-md-offset-3">
              <input type="invoice" class="form-control center-block" id="invoice" name="invoice" placeholder="INVXXXX" required><br />
              <button type="submit" class="btn btn-success btn-lg center-block mar-top-15">Continue</button>
            </div>
          </form>
        </div>
    </div>
	</div> <!-- /pricingWrap -->
	<?php include('footer.php'); ?>
