<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Menstrual Cycle | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Automobile Accident Patient Finds Relief for Increased Pain Symptoms During Menstrual Cycles.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_menstrual_cycle";
$page_class 			= "page page_symptom symptom_menstrual_cycle";
$page_title 			= "Automobile Accident Patient Finds Relief for Increased Pain Symptoms During Menstrual Cycles";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/_ypIfI9s1v8?rel=0"></iframe>
			</div>	

			<p>For over 3 decades as head of the Car Accident Injury Clinic at West Coast Spine Center in Sarasota, Florida, Gonstead Chiropractic Physician, Dr. Craig Barcomb has a long reputation for successfully treating patients where others have failed.</p>
			
			<p>In this video, he shares his clinical diagnosis and treatment of a woman who was involved in a serious automobile accident. In addition to expected pain and loss of mobility, she had increased symptoms during her menstrual cycles. Dr. Barcomb explains the methods and tools he used to properly diagnose the causal agents of these symptoms and the treatment plan that resulted in a successful recovery for this patient.</p>

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