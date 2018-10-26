<div id="container">
<dl id="post-<?php the_ID(); ?>" class="recent-article">
  <?php the_category() ?>
  <dt class="recent-article"> <a href="<?php the_permalink() ?>">
    <?php the_post_thumbnail( 'custom' ) ?>
    </a> </dt>
  <dd>
    <hgroup> <a href="<?php the_permalink() ?>">
      <h1>
        <?php the_title() ?>
      </h1>
      </a> </hgroup>
	<?php the_excerpt() ?>
    <div class="share-container">
      <div class="click-me"><span>Share</span><img src="<?php bloginfo("template_url") ?>/images/share.png" /></div>
      <?php sharing_display() ?>
      <?php 
		  	  if ( function_exists( 'sharing_display' ) ) {
			  sharing_display( '', true );
			  }
			  
			  if ( class_exists( 'Jetpack_Likes' ) ) {
			  $custom_likes = new Jetpack_Likes;
			  echo $custom_likes->post_likes( '' );
			  }
		  ?>
    </div>
  </dd>
</dl>
</div>