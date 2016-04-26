<ul class="list-inline post-meta">
	<li>
		<p class="byline author vcard">
			<?= __('', 'sage'); ?>
			<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_avatar( get_the_author_meta('user_email'), 30 ); ?><?= get_the_author(); ?></a>
		</p>
	</li>
	<small>|</small>
	<li><i class="fa fa-clock-o"></i>
		<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
	</li>
	<small>|</small>
		<?php comments_number('', '<li><i class="fa fa-comments-o"></i> 1</li><small>|</small>', '<li><i class="fa fa-comments-o"></i> %</li><small>|</small>'); ?>
	<li><i class="fa fa-eye"></i>
		<?php echo getPostViews(get_the_ID());?> 
	</li>
</ul>
