<!-- Blog Post -->
<div class="card mb-4">
    <h1>This Post is in Image Format </h1>
	<div class="card-body">
		<a href="<?php the_permalink(); ?>"><h2 class="card-title"><?php the_title(); ?></h2></a>
		<div class="thumbnail-img"><?php the_post_thumbnail('medium');?></div>
		<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
	</div>
	<div class="card-footer text-muted">
		Posted on <a href="#"><?php the_date(); ?></a> by
		<a href="#"><?php the_author(); ?></a>
	<a href="#"><?php the_category(); ?></a>
	</div>
</div>