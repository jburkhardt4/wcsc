<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Muscle Spasms & Insomnia | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= ".Car Accident Patient Discovers the Difference with Gonstead Chiropractic Care.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_muscle_spasms_insomnia";
$page_class 			= "page page_symptom symptom_muscle_spasms_insomnia";
$page_title 			= "Car Accident Patient Discovers the Difference with Gonstead Chiropractic Care";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/BEhaOM6HcZk?rel=0"></iframe>
			</div>			
		
			<p>One of our patients, Ashley Royer, was involved in a car accident and afterwards, was experiencing muscle spasms, insomnia and other injury symptoms. She had been seeing another chiropractor in Sarasota, Florida. As a happenstance, they referred her to West Coast Spine Center for Physical Therapy. We thank her for sharing her treatment and recovery experience with us.</p>

			<p>After a few sessions of physical therapy here at West Coast Spine Center, and conversations with my therapist, Donna Barcomb about where I find myself in my health and recovery from my automobile accident, I learned there were big differences between the kinds of chiropractic care available to me. This is when I first learned of the Gonstead Method. I began researching it and went to Dr. Craig Barcomb’s website, where I found the most amazing reviews by patients with injuries like mine and so many others. It turns out he is one of only a few Gonstead Chiropractors in this area. After learning more about him, then seeing how highly rated a chiropractor he was on Google with all his positive reviews, it gave me the confidence to schedule an appointment.</p>

			<p>The experience with him has been so different from other chiropractors I had seen where they were treating symptoms versus treating the root of the problem. As opposed to the Gonstead Method, which narrows things down to what is actually causing the pain, discomfort and mobility issues. Before I came to see Dr. Barcomb, I was going three times a week to a conventional chiropractor, and I wasn’t getting any better. I actually felt like I was getting worse.</p>

			<p>After only 3 visits with Dr. Barcomb, I feel like a new person. I have less pain and discomfort. Better mobility. I sleep better. I feel like I have better blood flow. More energy. With the combination of physical therapy and Gonstead chiropractic care here at West Coast Spine Center, my body has never felt so healthy, even after the car accident.</p>

			<p>You won’t feel like just another patient here. They really care in a way that makes you feel like their focus is truly on you. After every visit with Dr. Craig or Donna Barcomb, they’re always asking me, “How do you feel? What can we do better?” I think that check-in makes all the difference in terms of your recovery and the level of care you’re receiving. I highly recommend West Coast Spine Center, and can tell you, I wouldn’t go anywhere else.</p>
		
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