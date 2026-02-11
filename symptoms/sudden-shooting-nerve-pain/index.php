<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Sudden Shooting Nerve Pain | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Woman Experiences Sudden Pain and Nerve Symptoms from Head to Toe.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_sudden_shooting_nerve_pain";
$page_class 			= "page symptom_sudden_shooting_nerve_pain";
$page_title 			= "Woman Experiences Sudden Pain and Nerve Symptoms from Head to Toe";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/n-3lWPG400E?rel=0"></iframe>
			</div>		

			<p>I originally came to West Coast Spine Center because I started experiencing sudden shooting nerve pains that started in my feet and then quickly spread to the rest of my body. This came out of nowhere and was more than a bit concerning to me. When this happened, I was traveling abroad, so it only added to the stress I was also experiencing, along with the troubling symptoms. I’m very active and in good health, so I knew something wasn’t right. As soon as I returned home to Sarasota, Florida, I reached out to Dr. Craig Barcomb and came in, hoping to find the source of the problems I was experiencing.</p>

			<p>Dr. Barcomb is also a Gonstead Chiropractor, which means it’s a more thorough and specific type of Chiropractic Medicine he practices. This made me feel much more confident we’d be able to figure out what was going on with my body. After a complete examination and discussion of the symptoms and issues I was experiencing, Dr. Barcomb took X-rays and performed a thermographic scan of my entire spine. This scan shows areas of heat and inflammation below the skin and around the spine. He then reviewed these results with me. Being able to look at the images on a large screen with my Doctor while we talked through it gave me an entirely new perspective about what was actually going on. It also gave me a very clear picture of how he was going to go about treating my condition.</p>
						
			<p>Dr. Barcomb narrowed it down to my lower back and neck as the key areas where the symptoms I was experiencing were being generated. His treatment plan would focus on those areas with a series of adjustments. Through five visits now, I’m feeling positive changes happen, and we’re both seeing them in subsequent thermal scan images. Right now, my treatments are three times a week, and those visits will become less frequent as my recovery progresses. I’m feeling better every day now and would highly recommend Dr. Craig Barcomb and West Coast Spine Center for anyone experiencing pain and nerve symptoms or any type of mobility issues.</p>
			
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