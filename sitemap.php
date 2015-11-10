<?php include('header.php'); ?>
<link href="/assets/css/jquery.treemenu.css" rel="stylesheet" >
<style>
.tree { background-color:#3A3939; color:#46CFB0;}
.tree li,
.tree li > a,
.tree li > span {
    padding: 4pt;
    border-radius: 4px;
}

.tree li a {
   color:#46CFB0;
    text-decoration: none;
    line-height: 20pt;
    border-radius: 4px;
}

.tree li a:hover {
    background-color: #34BC9D;
    color: #fff;
}

.active {
    background-color: #34495E;
    color: white;
}

.active a {
    color: #fff;
}

.tree li a.active:hover {
    background-color: #34BC9D;
}
.toggler
{
border:0px !important;
}
</style>
<div class="overlay">
		 <div class = "jumbotron">
            <center><h1>Sitemap</h1>
            <p>A solid team that can help you build a professional online presence and attract customers.</p>
            </center>
        </div>
<div id="contactWrap" style="padding-top:20px !important;">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					
			
          
            <ul class="tree">
			  <li><a href="/">Home</a></li>
			  <li><span><a href="/about-us/">Who we are</a></span></li>
			  <li><span>What we do </span>
				<ul>
				  <li><a href="#">Websites</a>
					<ul>
					  <li><a href="#"> Custom Smart Websites</a></li>
					</ul>
				  </li>
				  <li><a href="#">Digital Marketing</a>
					<ul>
					  <li><a href="#">Search Engine Optimization (SEO)</a></li>
					  <li><a href="#">Social Media Management</a></li>
					  <li><a href="#">Media Placement Campaigns</a></li>
					  <li><a href="#">Email Newsletters</a></li>
					  <li><a href="#">Reputation Management</a></li>
					</ul>
				  </li>
				  <li><a href="#">Hosting</a>
					<ul>
					  <li><a href="#">Website Hosting</a></li>
					  <li><a href="#">SSL Security Certificates</a></li>
					</ul>
				  </li>
				 
				</ul>
			  </li>
			  <li><a href="/portfolio/">Our work</a></li>
			   <li><a href="/quote/">Get a Quote</a></li>
			   <li><span>Customer Care</span>
				<ul>
				  <li><a href="#">Existing Clients</a>
				  	<ul>
					  <li><a href="/faq/">Frequently Asked Questions</a></li>
					  <li><a href="/login/?type=hosting">Customer Center</a></li>
					  <li><a href="/payments/">Bill Pay</a></li>
					</ul>
				  </li>
				  <li><a href="#">Get in touch !</a>
				  	<ul>
					  <li><a href="/contact/">Contact us</a></li>
					</ul>
				  </li>
				</ul>
			  </li>
			</ul>

            
              
              
			
            
          
        </div>
					
					</div>
				</div>
			</div>
		</div>
</div>	
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
<script src="/assets/js/jquery.treemenu.js"></script> 
<script>
$(function(){
        $(".tree").treemenu({delay:300}).openActive();
    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php include('footer.php'); ?>