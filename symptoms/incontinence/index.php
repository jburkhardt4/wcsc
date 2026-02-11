<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Incontinence | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "Mother's Emotional Story of Gonstead Chiropractic Treatment for Child's Incontinence.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_incontinence";
$page_class 			= "page page_symptom symptom_incontinence";
$page_title 			= "Mother's Emotional Story of Gonstead Chiropractic Treatment for Child's Incontinence";
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
				<iframe class="embed_responsive_item" src="https://www.youtube.com/embed/xWFB927iwJs?rel=0"></iframe>
			</div>			
		
			<p>I originally came to West Coast Spine Center to see Dr. Craig Barcomb because my six-year-old son had been struggling with having accidents during the day and night for several years. It started when he was three. We talked to his pediatrician about it, and different doctors along the way. I was told he'd grow out of it. That never happened. We went through kindergarten last year with it being a constant problem. Multiple times a week where he was having accidents in school. We were told he might be constipated and should figure out why. Nobody really did anything to diagnose the issue. There were only guesses about what was going on. The only actual treatment ever prescribed was for multiple doses a day of MiraLAX for 6 months. After a few years with no improvement, I decided to see if there might be a chiropractic answer.</p>
			
			<p>When we came in and met Dr. Barcomb and explained everything, he immediately had an idea what the problem might be. It was the first time someone didn’t just look at me kind of clueless and say he'll grow out of it. After Dr. Barcomb examined him, he took an x-ray, and right there on the screen was exactly what he thought was there. It was such a relief to see there was a possible answer. It was a very emotional experience because when you're looking for answers as a mother and you're going to people that are supposed to have the answers, and everyone has nothing for you, it feels hopeless. I didn't know yet if we were going to fix it, but I knew there was at least a light at the end of the tunnel. That was a very emotional experience knowing that maybe we had turned a corner. As it turns out, Dr. Barcomb was right, and after a few treatments, my son hasn’t had any more accidents.</p>
			
			<p>The biggest takeaway from this experience for me is that, as parents we need to look for alternate solutions. Sometimes we go to experts for answers, but when we don't find the answers we want, there are options. I think too many people don't consider chiropractic as a first resource. As parents, we go to a pediatrician, and that's where we get all the answers. For me in this situation, that didn’t happen. This is definitely something people should consider when having an issue with their child. I wouldn't have thought it was related to chiropractic, but it completely makes sense now that I know how it works.</p>
		
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