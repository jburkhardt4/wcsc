<?php

include_once( "_/bin/config.php" );
ob_start();

$meta_title 			= "$company_name | Southwest Florida Chiropractor";
$meta_description 		= "Westcoast Spine Center is a Chiropractor in Sarasota FL that specialize in The Gonstead Method! Call $company_phone today or visit at $site_title_condensed.";
$meta_robots 			= "index, follow";



$page_id 				= "page_front";
$page_class 			= "page page_front has_gmap has_youtube has_form";
$page_title 			= NULL;
$page_subtitle 			= NULL;
$page_image				= NULL;
$page_widgets 			= NULL;
$twitter_card			= NULL; //summary, summary_large_image, app, player

include_once( "_/templates/head.php" ); 
include_once( "_/templates/block/mobile_button.php" );

?>

<div class="site_top">
<?php include_once( "_/templates/block/site_banner.php" ); ?>
<?php include_once( "_/templates/block/site_banner_rate.php" ); ?>
<?php include_once( "_/templates/block/site_navigation.php" ); ?>
<?php include_once( "_/templates/front_page/jumbo.php" ); ?>

<?php include_once( "_/templates/block/schedule_cta.php" ); ?>
</div>

<?php include_once( "_/templates/front_page/services.php" ); ?>

<div class="block meet_doctor">
	<div class="container"><div class="row">		
		<div class="wrap">		
			<h1>Meet Renowned Gonstead Chiropractic Physician, Dr. Craig Barcomb</h1>
			<a href="/about-us" class="btn-meet">Meet Dr. Barcomb!</a>
		</div>
	</div></div>
</div>

<?php
include_once( "_/templates/front_page/symptoms.php" ); 
include_once( "_/templates/front_page/welcome.php" );
include_once( "_/templates/front_page/reviews.php" );
include_once( "_/templates/front_page/about.php" );
include_once( "_/templates/front_page/healthplans.php" );
include_once( "_/templates/front_page/map.php");
include( "_/templates/front_page/schedule_cta.php" ); 
?>

<?php /*
*/ ?>

<?php
include_once( "_/templates/block/site_info.php");
include_once( "_/templates/foot.php");
?>