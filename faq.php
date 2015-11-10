<?php include('header.php'); ?>

<div class = "jumbotron">
    <center><h1>Frequently Asked Questions</h1>
    <p>A place where you can find answers more easily and conveniently.</p></center>
</div>
<div id="loginWrap" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Hosting & Emails</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Digital Marketing</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab">Websites</a></li>
                <!--<li><a href="#faq-cat-3" data-toggle="tab">Web Design</a></li>-->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                    <h4 class="panel-title">
                                        How do I log into my hosting control panel ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can log into your control panel by <a href="http://cp.welyx.com">Clicking Here</a> or and entering the information provided to you by email when your account was created.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-1-sub-2">
                                    <h4 class="panel-title">
                                        How do I create new email accounts ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                   You must be logged into your hosting <b>Control Panel</b> to create email accounts. The steps are as follow:
                                    <ul>
                                        <li>Log into the hosting <a href="http://cp.welyx.com">control panel</a></li>
                                        <li>Click on "Create email-address"</li>
                                        <li>Enter the account @ yourdomain you would like to create</li>
                                        <li>Do <b>not</b> select the "catch-all" option unless you want all unrouted maill to end up here</li>
                                        <li>Hit submit</li>
                                        <li>This will create your account, not your email address.. you have one more step.</li>
                                        <li>On the next page, select the option to "create email address"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-1-sub-3">
                                    <h4 class="panel-title">
                                       What is "FTP" and how do i use it ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                  FTP stands for file transfer protocol. It is a way of uploading files to your server remotely. There are a few ftp softwares available for free on both mac and pc but we recommend "cyberduck". Once you have it installed and running you will need to enter some information to gain access to your website files.
                                  <ul>
                                    <li>Hostname: This is provided to you in your welcome e-mail. Example: NY3.WELYX.COM</li>
                                    <li>Username: This is provided to you in your welcome e-mail. Usually is your domain name.</li>
                                    <li>Password: Automatically generated and in your welcome e-mail. </li>
                                  </ul>
                                  All you will have to do after that is drag and drop your files into the proper window.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-4" href="#faq-cat-1-sub-4">
                                    <h4 class="panel-title">
                                       Hostw do I connect my emails to my phone or desktop computer
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Based on the software you are using, you will be asked for the following details.
                                  <ul>
                                    <li>Host: mail.welyx.com</li>
                                    <li>Username: This is your e-mail address.</li>
                                    <li>Password: The password you selected when creating the account.</li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                         <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-5" href="#faq-cat-1-sub-5">
                                    <h4 class="panel-title">
                                        How do I create a new database ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                   You must be logged into your hosting <b>Control Panel</b> to create new databases. The steps are as follow:
                                    <ul>
                                        <li>Log into the hosting <a href="http://cp.welyx.com">control panel</a></li>
                                        <li>Click on "Databases" and then "+ Create database"</li>
                                        <li>Enter a description for your own tracking purposes</li>
                                        <li>Enter a secure password</li>
                                        <li>Select "send data via email to me" to receive a copy by email</li>
                                       </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                    <h4 class="panel-title">
                                        How do I view the progress of my campaign ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  We currently email reports on a monthly basis with the current standings for certain keywords. Our team is also working on our client control panel that will also include live data.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                    <h4 class="panel-title">
                                        What will you do on my website to help ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                        Once we have determined the keywords we will be targeting, we will implement optimized titles, tags, descriptions, and other important factors.
                                   </div>
                            </div>
                        </div>
                         <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-3">
                                    <h4 class="panel-title">
                                        How long do SEO results usually take ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                       It is very difficult to tell exactly. The longer you run a campaign, the more results you will see. On average, results are seen around the 6 months mark and with favorable traffic in the year mark.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                    <h4 class="panel-title">
                                        What do I need to provide you for the design of my website ?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Every site is different so we will send you a list of information needed for your design prior to starting the project. Things that we require generally are Logo in PSD format if you already have one, color theme, example websites, items on the menu, products, etc..
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-2">
                                    <h4 class="panel-title">
                                        Can I have a temporary page on my page until my website is done ? 
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-3-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                        We provide a "coming soon.." page to you that will give your visitors a countdown to the live launch. This page is standard and not customizable.   
                                </div>
                            </div>
                        </div>
                         <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-3">
                                    <h4 class="panel-title">
                                        Why should I use your web maintenance services ? 
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-3-sub-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Having a website is fantastic. But maintaining your website can be very time consuming! Security updates, bug fixes, uptime monitoring are things that we provide with our web maintenance packages so you can focus on growing your business. Additionally, if you were to ask us to fix things for you individually, you'd end up spending almost double our monthly maintenance fee!   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
<?php include('footer.php'); ?>
