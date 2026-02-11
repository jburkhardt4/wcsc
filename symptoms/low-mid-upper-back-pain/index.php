<?php

$page_root = "../..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Low, Mid or Upper Back Pain | Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "A Gonstead Chiropractor Gave me Relief for Decades of Chronic Back Pain at $site_title_condensed.";
$meta_robots 			= "index, follow";

$page_id 				= "symptom_backpain";
$page_class 			= "page page_symptom symptom_backpain";
$page_title 			= "A Gonstead Chiropractor Gave me Relief for Decades of Chronic Back Pain";
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
		
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/back-pain-treatment.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/back-pain-treatment.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1920" height="1080" src="/_/images/pages/symptoms/back-pain-treatment.jpg" alt="Back Pain Treatment by Gonstead Chiropractor, Dr. Craig Barcomb.">
			</picture>		
		
			<p>I’ve had back and spinal pain since 1984 after I was involved in a rock climbing accident. At the time, I was told I would never walk again so I’ve been living with pain for most of my life. I served in the military and law enforcement. These are physically active and demanding jobs, but I could never get past some of my back pain.</p>

			<p>More recently, I was in excruciating pain. Having a really bad day pain-wise. I was at my buddy’s house trying to get some relief in his pool, but I couldn’t even swim. That’s when my friend told me about the Gonstead Chiropractic Method. So I went online to research it. That’s how I found out about Dr. Craig Barcomb here at West Coast Spine Center in Sarasota, Florida. I had been to Chiropractors over the years, and the treatments didn’t really do anything for me. However, there was something about this Gonstead Method that seemed very different. There was part of me that was still skeptical about it, but I figured, what have I got to lose?</p>

			<p>I scheduled an appointment with Dr. Barcomb, and was immediately surprised at how thoroughly he checked me out. The first visit consisted of several procedures. First was an X-ray so he could get a good idea of what my spine looked like. Then he did a Thermographic scan, using a tool that showed where inflammation was occurring at places along my spine. We both reviewed these images on a large-screen display, and it was so interesting to see how the inflammation lined up with certain areas on the X-ray. He took time to specifically explain to me how we would approach a treatment plan that included adjustments to my neck and back.</p>

			<p>I was initially going for three appointments a week at West Coast Spine Center. Then it was down to two, and now it’s only once a week to maintain the gains we’ve made. It’s fantastic. I look at it as a preventative maintenance approach to prevent my back pain from ever becoming an issue again. Dr. Barcomb does specifically what I need for my injury and nothing more. He doesn’t just treat pain symptoms. Instead, he finds and diagnoses the underlying causes of the pain and treats that. I found the Gonstead method to be so much better than anything I’ve tried in the past.</p>

			<p>The reduction of pain and discomfort has been a game-changer for me. I’m retired from Law Enforcement, but still teach firearms and tactics on a regular basis. Now I can stand for hours teaching my classes. I’m back to playing golf, going to the gym, which I really enjoy. Overall, I’m back to an active lifestyle without what used to be, at times, unbearable pain.</p>

			<p>For anyone reading this, if you’ve got back, neck or other aches or pains in your body, I would highly recommend coming to see Dr. Craig Barcomb at West Coast Spine Center. You’ve got nothing to lose, and maybe a whole lot to gain.</p>
		
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