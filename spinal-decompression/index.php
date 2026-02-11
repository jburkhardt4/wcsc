<?php

$page_root = "..";

include_once( "$page_root/_/bin/config.php" );
ob_start("sanitize_output");

$meta_title 			= "Spinal Decompression | $company_city $company_state | $company_name";
$meta_description 		= "Millions of people seek effective relief and suffering from back and neck ailments and extremity problems every year with Chiropractic care. We Can Help!";
$meta_robots 			= "index, follow";

$page_id 				= "page_spinal_decompression";
$page_class 			= "page page_spinal_decompression has_youtube";
$page_title 			= "Spinal Decompression";
$page_subtitle 			= null;

$page_image				= null;
$page_widgets 			= null;
$twitter_card			= null; //summary, summary_large_image, app, player

$page_schedule			= $page_title . " Therapy";

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
					
			<p class="lead">Spinal decompression puts negative pressure on each disk, to alleviate the pressure and pain associated with compressed disks.</p>			 

			<p>When a disk is compressed, the disk material moves from its place between each disk, into the space occupied by the sensitive nerves.</p>
			
			<p>When the nerves become crowded, the patient experiences great pain and pressure. This pain is not alleviated by even the strongest of pain medications. Many times, the condition warrants the use of highly addictive medications, such as morphine to mask the pain long enough to give the patient some relief. Long term however, the risk for addiction increases, while the source of the pain is untreated.</p>
			
			<p>Surgery attempts to treat the condition by shaving the part of the disk to create room for the material that is crowding the nerves. Spinal decompression eliminates the source of the pain, therefore eliminating the need for risky spine surgery and the subsequent months of down time post surgery.</p>
		
		</section>
			
		<aside class="wrap sidebar" role="complementary">
			<?php include_once("$page_root/_/templates/block/sidebar.php"); ?>
			<picture>
				<source srcset="/_/images/pages/services/17680d_261dfe560d274140bd47e1f129f84d65_mv2.webp" type="image/webp">
				<source srcset="/_/images/pages/services/17680d_261dfe560d274140bd47e1f129f84d65_mv2.jpg" type="image/jpeg">
				<img class="img-thumbnail" width="480" height="680" src="/_/images/pages/services/17680d_261dfe560d274140bd47e1f129f84d65_mv2.jpg" alt="westcoastspinecenter">
			</picture>
		</aside>
						
	</div></div></div>
</main>

<?php 
include_once( "$page_root/_/templates/block/page_schedule.php");
include_once( "$page_root/_/templates/block/site_info.php");
include_once( "$page_root/_/templates/foot.php"); 
?>