<?php

	$holdername=$_REQUEST['name_on_card'];
	$ccnumber=$_REQUEST['card_no'];
	$month=$_REQUEST['exp'];
	$year=$_REQUEST['exp_year'];
	$ccv=$_REQUEST['cvv'];
	$address=$_REQUEST['address'];
$price=$_REQUEST['price'];
$invoice=$_REQUEST['invoice'];
$newsale=number_format($price, 2, '', '');

$pattern="/[^0-9]+/";
	
if(preg_match($pattern, $ccnumber) || preg_match($pattern, $month) || preg_match($pattern, $year) || preg_match($pattern, $ccv))
		{
			
			echo "<script language='javascript'>window.location='../checkout/?err=1&invoice=".$invoice."'</script>";	
			exit;
		}
		else
		{
			
			require 'Stripe.php';
			//Stripe::setApiKey('sk_live_AsyubMbZ1HhfTyVotZqVly5N');
			Stripe::setApiKey('sk_live_JI0eH6MhDtwx0D0i9x0FLG8D');//test key
			
			try
			{
				
				Stripe_Charge::create(array('amount'=>$newsale,'currency'=>'usd','description'=>$invoice,"card"=>array('number'=>$ccnumber,'name'=>$holdername,'address_line1'=>$address,'exp_month'=>$month,'exp_year'=>$year,'cvc'=>$ccv,'address_zip'=>"")));
				/* For Reccuring
				$interval='month';
				Stripe_Plan::create(array(
				  "amount" => $newsale,
				  "interval" => $interval,//month
				  "interval_count"=> 1,//1
				  "trial_period_days"=>30,//30
				  "name" => $emailaddress.' '.$cardname,//Service 1 monthly WITH 30 DAYS TRIAL
				  "currency" => 'gbp',//usd
				  "id" => $emailaddress.' '.$cardname//Service 1 monthly WITH 30 DAYS TRIAL
				  )
				);*/
			}
			catch (Exception $e)
			{
				$error=$e->getMessage();
				//print_r($error);exit;
				include('dbclose.php');
				echo "<script language='javascript'>window.location='../checkout/?err=2&invoice=".$invoice."'</script>";	
				exit;
			}  
			echo "<script language='javascript'>window.location='../stripethanks.php?msg=1'</script>";	
			exit;
		}
			