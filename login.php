<?php
include('header.php');
$service=$_GET[ 'type' ];
 ?>

  <div class = "jumbotron">
        <center><h1><?php if ($service == 'hosting') {echo 'Hosting panel';} else {echo 'Helpdesk';}?> login</h1>
        <p>Control your website, create email addresses, mysql databases, and more..</p>
        </center>
    </div>

	<div id="loginWrap">
	  <div class="container">
      <form class="form-signin col-md-4 col-md-offset-4">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
          <a href="http://cp.welyx.com/index.php?action=forgotpwd" >Forgot Password? </a>
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
	</div>

	<?php include('footer.php'); ?>
