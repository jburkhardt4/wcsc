<?php

$page_root = "..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Videos | $company_city $company_state | $company_name";
$meta_description		= "Videos from $company_name - $company_city Chiropractor at $site_title_condensed. Call Today for Chiropractic care in $company_city, $company_state.";
$meta_robots 			= "index, follow";

$page_id 				= "page_videos";
$page_class 			= "page page_videos";
$page_title 			= "Videos";
$page_subtitle 			= null;
$page_schedule			= "Chiropractic Care";

$page_image				= null;
$page_widgets 			= ['feedback'];
$twitter_card			= null; //summary, summary_large_image, app, player

include_once( "$page_root/_/templates/head.php" );
include_once( "$page_root/_/templates/block/mobile_button.php" );

?>

<div class="site_top">
<?php include_once( "$page_root/_/templates/block/site_banner.php" ); ?>
<?php include_once( "$page_root/_/templates/block/site_banner_rate.php" ); ?>
</div>

<?php
include_once( "$page_root/_/templates/block/site_navigation.php" );
include_once( "$page_root/_/templates/block/page_title.php");
?>

<main role="main">
	<div class="block block_content"><div class="container"><div class="row">
	
	
		
		<section class="wrap page_welcome">
			<p class="lead">Please enjoy this continuing series of videos that take you inside West Coast Spine Center with Dr. Craig Barbomb and some of his patients, as they share their stories of treatment and care. We also invite you to <a href="https://www.youtube.com/channel/UCy-QFDEXejDuIP9P0Zb6Y5g" target="_blank">subscribe to our YouTube Channel</a>.</p>
			<hr class="hr-inset" />
		</section>
		
		<section class="wrap split_50">
		
			<h3>Car Accident Doctor, Craig Barcomb Details Injury Symptoms, Treatment Plan for Auto Accident Patient</h3>
			<div class="embed_responsive embed_responsive_16by9 mb30">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/NHhK4nW56o0?rel=0"></iframe>
			</div>
		
			<h3>Auto Accident Chiropractor, Dr. Craig Barcomb Diagnoses Whiplash Using Exam, X-rays and Thermograph</h3>
			<div class="embed_responsive embed_responsive_16by9">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/fYo1IRCUULA?rel=0"></iframe>
			</div>
						
		</section>
		
		<section class="wrap split_50">
			
			<h3>Boating Accident Symptoms, Diagnosis & Treatment for Back & Neck Injuries by Gonstead Chiropractor</h3>
			<div class="embed_responsive embed_responsive_16by9 mb30">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/yndVS2FhUK4?rel=0"></iframe>
			</div>
			
			<h3>Automobile Accident Patient Finds Relief for Increased Pain Symptoms During Menstrual Cycles</h3>
			<div class="embed_responsive embed_responsive_16by9">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/_ypIfI9s1v8?rel=0"></iframe>
			</div>
		
		</section>
		
		<!--<section class="wrap split_50">
		
			<div class="embed_responsive embed_responsive_16by9 mb30">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/S9_9B8L8oLk?rel=0"></iframe>
			</div>
		
			<div class="embed_responsive embed_responsive_16by9">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/vaUYvl2kkNM?red=0"></iframe>
			</div>
			
		</section>
		
		<section class="wrap split_50">
			
			<div class="embed_responsive embed_responsive_16by9 mb30">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/n-3lWPG400E?rel=0"></iframe>
			</div>
			
			<div class="embed_responsive embed_responsive_16by9">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/ZLUjYAOyHIo?rel=0"></iframe>
			</div>
		
		</section>-->
						
	</div></div></div>
</main>

<?php 
include_once( "$page_root/_/templates/block/page_schedule.php");
include_once( "$page_root/_/templates/block/site_info.php");
include_once( "$page_root/_/templates/foot.php"); 
?>