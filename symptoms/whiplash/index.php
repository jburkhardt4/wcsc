<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Whiplash | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Auto Accident Chiropractor, Dr. Craig Barcomb Diagnoses Whiplash Using Exam, X-rays and Thermograph.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_whiplash";
$page_class 			= "page page_symptom symptom_whiplash";
$page_title 			= "Auto Accident Chiropractor, Dr. Craig Barcomb Diagnoses Whiplash Using Exam, X-rays and Thermograph";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/fYo1IRCUULA?rel=0"></iframe>
			</div>			
			
			<p>For over 3 decades in the Car Accident Injury Clinic at West Coast Spine Center in Sarasota, Florida, Gonstead Chiropractic Physician, Dr. Craig Barcomb has successfully treated thousands of patients. In this video, he shares his clinical diagnosis and treatment of a woman who was rear-ended in a serious automobile accident.</p>
			
			<p>She had immediate onset symptoms common with whiplash injuries, but was also experiencing an unusual and painful burning sensation in her mouth. Dr. Barcomb explains the methods and tools he uses to properly diagnose the causal agents of this patient's symptoms and the treatment plan and process for a successful recovery from these types of injuries.</p>
			
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