<?php
	$content_video_title = get_sub_field('content_video_title');
	$content_video_video = get_sub_field('content_video_video');
?>

<!-- video -->

<section id="video" class="video-section section-gray section">
	<div class="container">
		<h2 class="section-heading text-center"><?php echo $content_video_title; ?></h2>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="video-embed embed-responsive embed-responsive-16by9">
					<iframe class="video-async embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $content_video_video; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>			