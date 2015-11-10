<?php include('header.php'); ?>
<?php include('connect.php'); ?>
<style type="text/css">
    /* Methods */
.method .header, .method .cell {
  padding: 6px 6px 6px 10px; }
.method .list-header .header {
  font-weight: normal;
  text-transform: uppercase;
  font-size: 0.8em;
  color: #999;
  background-color: #eee; }
.method [class^="row"],
.method [class*=" row"] {
  border-bottom: 1px solid #ddd; }
  .method [class^="row"]:hover,
  .method [class*=" row"]:hover {
    background-color: #f7f7f7; }
.method .cell {
  font-size: 0.85em; }
  .method .cell .mobile-isrequired {
    display: none;
    font-weight: normal;
    text-transform: uppercase;
    color: #aaa;
    font-size: 0.8em; }
  .method .cell .propertyname {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }
  .method .cell .type {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }
  .method .cell code {
    color: #428bca; }
  .method .cell a, .method .cell a:hover {
    text-decoration: none; }
  .method .cell code.custom {
    color: #8a6d3b;
    text-decoration: none; }
  .method .cell .text-muted {
    color: #ddd; }
@media (max-width: 991px) {
  .method [class^="row"],
  .method [class*=" row"] {
    padding-top: 10px;
    padding-bottom: 10px; }
  .method .cell {
    padding: 0 10px; }
    .method .cell .propertyname {
      font-weight: bold;
      font-size: 1.2em; }
      .method .cell .propertyname .lookuplink {
        font-weight: normal;
        font-size: 1.5em;
        position: absolute;
        top: 0;
        right: 10px; }
    .method .cell .type {
      padding-left: 10px;
      font-size: 1.1em; }
    .method .cell .isrequired {
      padding-left: 10px;
      display: none; }
    .method .cell .description {
      padding-left: 10px; }
    .method .cell .mobile-isrequired {
      display: inline; } }


/* Row Utilities */
[class^='row'].margin-0,
[class*=' row'].margin-0,
[class^='form-group'].margin-0,
[class*=' form-group'].margin-0 {
  margin-left: -0px;
  margin-right: -0px; }
  [class^='row'].margin-0 > [class^='col-'],
  [class^='row'].margin-0 > [class*=' col-'],
  [class*=' row'].margin-0 > [class^='col-'],
  [class*=' row'].margin-0 > [class*=' col-'],
  [class^='form-group'].margin-0 > [class^='col-'],
  [class^='form-group'].margin-0 > [class*=' col-'],
  [class*=' form-group'].margin-0 > [class^='col-'],
  [class*=' form-group'].margin-0 > [class*=' col-'] {
    padding-right: 0px;
    padding-left: 0px; }
  [class^='row'].margin-0 [class^='row'],
  [class^='row'].margin-0 [class*=' row'],
  [class^='row'].margin-0 [class^='form-group'],
  [class^='row'].margin-0 [class*=' form-group'],
  [class*=' row'].margin-0 [class^='row'],
  [class*=' row'].margin-0 [class*=' row'],
  [class*=' row'].margin-0 [class^='form-group'],
  [class*=' row'].margin-0 [class*=' form-group'],
  [class^='form-group'].margin-0 [class^='row'],
  [class^='form-group'].margin-0 [class*=' row'],
  [class^='form-group'].margin-0 [class^='form-group'],
  [class^='form-group'].margin-0 [class*=' form-group'],
  [class*=' form-group'].margin-0 [class^='row'],
  [class*=' form-group'].margin-0 [class*=' row'],
  [class*=' form-group'].margin-0 [class^='form-group'],
  [class*=' form-group'].margin-0 [class*=' form-group'] {
    margin-left: 0;
    margin-right: 0; }
    
    </style>

<script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>

<div class="container" id="loginWrap">

			
								


	<div class="row">

	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  text-center">
		<div class="method">
        <div class="row margin-0 list-header hidden-sm hidden-xs">
            <div class="col-md-2"><div class="header">Date</div></div>
            <div class="col-md-8"><div class="header">Description</div></div>
			<div class="col-md-2"><div class="header">Download</div></div>
        </div>

   
		
		
		<div class="row margin-0">
            
            <div class="col-md-2">
                <div class="cell">
                    <div class="type">
                        <code>01-01-2012</code>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cell">
                    <div class="description">
                      <p>This is test 1.This is test 1.This is test 1.This is test 1.This is test 1.This is test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        <a target="_blank" href="/download?filename=Hydrangeas.jpg">Download</a>
                    </div>
                </div>
            </div>
			
        </div>
		<div class="row margin-0">
            
            <div class="col-md-2">
                <div class="cell">
                    <div class="type">
                        <code>01-01-2012</code>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cell">
                    <div class="description">
                      <p>This is test 1.This is test 1.This is test 1.This is test 1.This is test 1.This is test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        <a target="_blank" href="/download?filename=Hydrangeas.jpg">Download</a>
                    </div>
                </div>
            </div>
			
        </div>
		<div class="row margin-0">
            
            <div class="col-md-2">
                <div class="cell">
                    <div class="type">
                        <code>01-01-2012</code>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cell">
                    <div class="description">
                      <p>This is test 1.This is test 1.This is test 1.This is test 1.This is test 1.This is test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        <a target="_blank" href="/download?filename=Hydrangeas.jpg">Download</a>
                    </div>
                </div>
            </div>
			
        </div>
		<div class="row margin-0">
            
            <div class="col-md-2">
                <div class="cell">
                    <div class="type">
                        <code>01-01-2012</code>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cell">
                    <div class="description">
                      <p>This is test 1.This is test 1.This is test 1.This is test 1.This is test 1.This is test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        <a target="_blank" href="/download?filename=Hydrangeas.jpg">Download</a>
                    </div>
                </div>
            </div>
			
        </div>
		<div class="row margin-0">
            
            <div class="col-md-2">
                <div class="cell">
                    <div class="type">
                        <code>01-01-2012</code>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cell">
                    <div class="description">
                      <p>This is test 1.This is test 1.This is test 1.This is test 1.This is test 1.This is test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        <a target="_blank" href="/download?filename=Hydrangeas.jpg">Download</a>
                    </div>
                </div>
            </div>
			
        </div>
		

    </div>
	</div>
	
	</div>	
	

		
    <!-- Example row of columns -->
	</div>
	

	
<?php include('footer.php'); ?>
