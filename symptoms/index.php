<?php

$page_root = "..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Injury Symptoms | $company_city $company_state | $company_name";
$meta_description 		= "West Coast Spine Center carefully considers symptoms as the first step in addressing the root of your problems at $site_title_condensed.";
$meta_robots 			= "index, follow";

$page_id 				= "page_symptoms";
$page_class 			= "page page_symptoms";
$page_title 			= "Symptoms";
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

		<section class="wrap page_welcome">

			<p class="lead">Here at West Coast Spine Center we carefully consider symptoms as the first step in addressing the root of your problems.</p>

			<picture class="img--right">
				<source srcset="/_/images/pages/symptoms/index.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/index.jpg" type="image/jpeg">
				<img class="img-thumbnail split-50-img" width="640" height="480" src="/_/images/pages/symptoms/index.jpg" alt="The West Coast Spine Center Team.">
			</picture>

			<blockquote>
			<p>“I’ve been a Gonstead Chiropractic Physician for over 30 years in Sarasota Florida. During that time, I’ve treated thousands of patients who were injured in car accidents and other types of incidents. I’ve also successfully treated a wide variety of conditions where others had failed. It’s important to understand I don’t treat symptoms, I use them to understand and get to the root of the problem. One of the things you’ll hear me say is - Find it, Fix it, and Leave it Alone.”</p>
			<cite>- Dr. Craig L. Barcomb / West Coast Spine Center</cite>
			</blockquote>

			<p>These are some of the most common symptoms experienced as the result of car accidents or other types of injuries and conditions. These may include those experienced from playing sports, slip & fall accidents, postoperative recovery, infant spinal injuries, pregnancy, postpartum, and various neurological disorders.</p>
		
		</section>

				
		<section class="wrap main">
			<ul class="list list-spaced">
			<li>Headaches at Base of Skull and Other Areas of the Head</li>
			<li>Neck Stiffness And / Or Pain</li>
			<li>Increase Of Pain When Moving The Neck</li>
			<li>Dizziness</li>
			<li>Loss Of Balance</li>
			<li><a href="/symptoms/muscle-spasms-insomnia">Insomnia Or Inability To Experience Normal Sleep Cycles</a></li>
			<li>Nausea</li>
			<li>Shoulder Pain And / Or Tenderness</li>
			<li><a href="/symptoms/low-mid-upper-back-pain/">Low, Mid Or Upper Back Pain</a></li>
			<li>Loss Of Mobility In Neck, Back, Arms Or Legs</li>
			<li>Pain, Tingling Or Numbness In The Arms Or Legs</li>
			<li>Pain And Discomfort In Hip, Knee, Ankle Or Foot</li>
			<li><a href="/symptoms/sudden-shooting-nerve-pain">Sudden Shooting Nerve Pain</a></li>
			<li>Muscle Spasms</li>
			<li>Loss Or Reduction Of Range Of Motion</li>
			<li>Unusual Fatigue</li>
			<li><a href="/symptoms/incontinence">Incontinence</a></li>	
			</ul>
		</section>
		
		<aside class="wrap sidebar" role="complementary">
			<?php include_once("$page_root/_/templates/block/sidebar.php"); ?>
		</aside>
			
		<section class="wrap">
			<p>Meet just a few of our thousands of patients who came to us experiencing these symptoms, and find out how we successfully treated their underlying chiropractic issues, and helped them recover.</p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/car-accident.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/car-accident.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1280" height="720" src="/_/images/pages/symptoms/car-accident.jpg" alt="Car Accident Symptoms.">
			</picture>
			<p></p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/car-accident">Car Accident</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/boat-accident.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/boat-accident.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1280" height="720" src="/_/images/pages/symptoms/boat-accident.jpg" alt="Boating Accident Symptoms.">
			</picture>
			<p></p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/boating-accident">Boating Accident</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/whiplash.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/whiplash.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1280" height="720" src="/_/images/pages/symptoms/whiplash.jpg" alt="Whiplash Symptoms.">
			</picture>
			<p></p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/whiplash">Whiplash</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/menstrual-cycles.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/menstrual-cycles.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1280" height="720" src="/_/images/pages/symptoms/menstrual-cycles.jpg" alt="Menstrual Cycle Symptoms.">
			</picture>
			<p></p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/menstrual-cycle">Menstrual Cycles</a></p>
		</section>
		
		
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/muscle-spasms-insomnia.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/muscle-spasms-insomnia.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1920" height="1080" src="/_/images/pages/symptoms/muscle-spasms-insomnia.jpg" alt="Muscle Spasms & Insomnia">
			</picture>
			<p>The experience with Dr. Craig Barcomb has been so different from other chiropractors I’ve seen who only treated symptoms versus the root of the problem. The Gonstead Method narrows it down to what is actually causing the pain, discomfort and mobility issues.</p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/muscle-spasms-insomnia">Muscle Spasms & Insomnia</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/sudden-shooting-nerve-pain.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/sudden-shooting-nerve-pain.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1920" height="1080" src="/_/images/pages/symptoms/sudden-shooting-nerve-pain.jpg" alt="Sudden Shooting Nerve Pain">
			</picture>
			<p>I originally came to West Coast Spine Center because I started experiencing sudden shooting nerve pains that started in my feet and then quickly spread to the rest of my body. Dr. Barcomb narrowed it down to my lower back and neck as the key areas of focus.</p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/sudden-shooting-nerve-pain">Sudden Shooting Nerve Pain</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/incontinence.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/incontinence.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1920" height="1080" src="/_/images/pages/symptoms/incontinence.jpg" alt="Incontinence.">
			</picture>
			<p>When Ashley came to us with her 6-year-old son and explained the issues he’d been experiencing for several years with chronic daytime and nighttime incontinence, we felt a genuine sense of responsibility to do anything we could to help. We couldn’t be more proud of the results of our efforts in this case.</p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/incontinence">Incontinence</a></p>
		</section>
		
		<section class="wrap split_50">
			<picture class="img-touch--right">
				<source srcset="/_/images/pages/symptoms/back-pain-symptoms.webp" type="image/webp">
				<source srcset="/_/images/pages/symptoms/back-pain-symptoms.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="1920" height="1080" src="/_/images/pages/symptoms/back-pain-symptoms.jpg" alt="Back Pain Symptoms.">
			</picture>
			<p>Dr. Barcomb does specifically what’s needed for my injury and nothing more. He doesn’t just treat pain symptoms. Instead, he finds and diagnoses the underlying causes of pain and treats those. The Gonstead method is so better than anything I’ve tried in the past.</p>
			<hr class="mt20 mb20" />
			<p><a class="btn --solid-accent" href="/symptoms/low-mid-upper-back-pain/">Back Pain</a></p>
		</section>
						
	</div></div></div>
</main>

<?php 
include_once( "$page_root/_/templates/block/page_schedule.php");
include_once( "$page_root/_/templates/block/site_info.php");
include_once( "$page_root/_/templates/foot.php");
?>