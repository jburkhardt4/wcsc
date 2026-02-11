<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Car Accident | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Car Accident Doctor, Craig Barcomb Details Injury Symptoms, Treatment Plan for Auto Accident Patient.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_car_accident";
$page_class 			= "page page_symptom symptom_car_accident";
$page_title 			= "Car Accident Doctor, Craig Barcomb Details Injury Symptoms, Treatment Plan for Auto Accident Patient";
$page_subtitle 			= null;

$page_image				= null;
$page_widgets 			= ['review'];
$twitter_card			= null; //summary, summary_large_image, app, player


$page_nav				= $nav_symptoms;
$page_nav_title			= "Symptoms";
$page_schedule			= "Chiropractic or Physical Therapy";

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
				
		<section class="wrap main">
		
			<div class="embed_responsive embed_responsive_16by9 mb30">
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/NHhK4nW56o0?rel=0"></iframe>
			</div>			
			
			<p>Gonstead Chiropractic Physician, Dr. Craig Barcomb heads the Car Accident Injury Clinic at West Coast Spine Center in Sarasota, Florida. In this video, he shares his clinical diagnosis and treatment of a 58-year-old auto accident patient who was t-boned from the driver's side of his vehicle.</p>
			
			<p>Mike came to see Dr. Bacomb after experiencing the delayed onset of pain in his neck, accompanied by lower back pain, but his main complaint was radiant pain from the neck to the shoulder, and further down into the right arm. He also had numbness in his thumb and forefinger on the right hand. </p>

			<p>If you or someone you know is in pain from a car, boating or other accident injury, do them or yourself a favor. Pick up a phone and dial 941-362-2000. Come see us so we can help you just like we've helped thousands of patients over the past 35+ years. </p>
		
		</section>
			
		<aside class="wrap sidebar" role="complementary">
			<?php include_once("$page_root/_/templates/widget/service_menu.php"); ?>
			<?php include_once("$page_root/_/templates/block/sidebar.php"); ?>
		</aside>
						
	</div></div></div>
</main>

<?php 
include_once( "$page_root/_/templates/block/page_schedule.php");
include_once( "$page_root/_/templates/block/site_info.php");
include_once( "$page_root/_/templates/foot.php");
?>