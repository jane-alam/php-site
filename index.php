<?php include('header.php'); ?>
<style type="text/css">

/*VIDEO DIV*/
.header-unit {
    height: 88%;
    /*border: 2px solid #000;*/
    border-right:none;
    border-left: none;
    position: relative;
    padding-bottom: 3rem;
}
video.fillWidth
{
width:100%;
}
</style>
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
			<div id="topWrap" class="jumbotron home" style="padding-top:0px; background:none;">
			<div class="container" style="margin:0px; padding:0px; width:100%;">
				
				<div class="col-md-12 col-lg-12" style="margin:0px; padding:0px; width:100%;">
							<video autoplay="autoplay" loop="" class="fillWidth">
								<source src="small.mp4" type="video/mp4">
								<source src="small.oga" type="video/ogg">
								<source src="small.webm" type="video/webm">
								Your browser does not support the video tag. I suggest you upgrade your browser.
							</video>
				</div>
				<div class="jumboText">
					<h1 class="cd-headline slide">We <span style=" padding:0px;" class="cd-words-wrapper"><b class="is-visible">Build</b><b class="is-hidden">Market</b><b class="is-hidden">Optimize</b><b class="is-hidden">Analyse</b></span> smart websites</h1>
					<h2>Let us build your smart website and help you reach more customers on the web.</h2>
					<a href="#productWrap" class="btn btn-lg btn-success actionBtn"><span class="line1">Learn about how</span><br><span class="line2">We Can Help</span></a>
				</div>

			</div>
			</div>

	<div id="featureWrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-desktop icon"></i>
					<h3>We Build Your Website</h3>
					<p>
					We will make your vision into a smart reality. Our websites come with a back-end that allows you to edit the content and images, and post on your blog.
					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-cloud icon"></i>
					<h3>We Host & Maintain</h3>
					<p>
					We host your website on our secure cloud server environment allowing for fast loading, encrypted transactions, and make sure your website's back-end is always up to date..
					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-dollar icon"></i>
					<h3>We Help You Find Clients</h3>
					<p>
					Through extensive research, analysys, and implementation of custom strategies, we measure success on your ROI. Our strategies are modern, and will get traffic.
					</p>
				</div>
			</div>
		</div>
	</div> <!-- /featureWrap -->

	<div id="productWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">A brand new smart website that gives you an edge over your competition</h2>
					<h3 class="sectionTitle">With a wide range of features ranging from content management to SEO friendly architecture, you will be ahead.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<div class="imgWrap">
						<img class="img-responsive" src="assets/img/tablet.png"/>
					</div>
				</div>
				<div class="col-md-5">
					<div class="productFeatures clearfix">
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>Amazing features</h3>
							<p>Edit your content and media, add new pages, post on your blog, view your orders, manage billing, view website traffic analytics, view sales and conversions and much more..</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-cog fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>Fully customizeable</h3>
							<p>Edit your content and images at your discretion through your Wordpress CMS back-end from anywhere in the world. Give access to your contributors or moderators while maintaining the administrative privileges to yourself.</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-bars fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>Clean &amp; modern layout</h3>
							<p>All our websites are built for conversions and search engine optimization. We do our best to enhance your % of conversions via numerous code and aesthetic elements during the design phase while using the latest technologies to make your website as top-notch as can be within our times.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /productWrap -->


	<?php include('footer.php'); ?>
