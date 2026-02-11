<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Boating Accident | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Boating Accident Symptoms, Diagnosis & Treatment for Back & Neck Injuries by Gonstead Chiropractor.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_boating_accident";
$page_class 			= "page page_symptom symptom_boating_accident";
$page_title 			= "Boating Accident Symptoms, Diagnosis & Treatment for Back & Neck Injuries by Gonstead Chiropractor";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/yndVS2FhUK4?rel=0"></iframe>
			</div>			
			
			<p>Boating is a very popular means of recreation and transportation in Florida. Sarasota Gonstead and Car Injury Chiropractor, Dr. Craig Barcomb has also seen and successfully treated many boating accident injuries.</p>
			
			<p>In this video, he shares one of his many success stories highlighting one patient who received upper and lower spinal injuries during a boating mishap. His diagnostic methods of thorough exam, use of X-Ray and Thermographic tools provide the specific information he needs to prescribe appropriate treatment and recovery plans for each individual patient.</p>

			<p>If you or someone you know is in pain from a car, boating or other accident injury, do them or yourself a favor. Pick up a phone and dial 941-362-2000. Come see us so we can help you just like we've helped thousands of patients over the past 35+ years.</p>
		
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