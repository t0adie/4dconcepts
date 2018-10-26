<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <section id="category"><?php set_post_background(); ?></section>
      <div class="border">
        <div class="image" style="width: 300px; height: 300px; background-image: url(<?php echo $src[0]; ?>); "></div>
        <div id="meta">
          <div id="title">
            <h1>
              <?php the_title(); ?>
            </h1>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <div class="postmetadata">
              <ul>
                <li>
                  <?php the_category(', ') ?>
                </li>
                <li>
                  <?php comments_popup_link('No Comments', '1 Comment', '% Comments') ?>
                </li>
                <li>
                  <div class="read-more"><a href="<?php the_permalink() ?>">Read More</a></div>
                </li>
              </ul>
            </div>
          </div>
          <div id="tags">
            <table class="post-tag">
              <tr>
                <?php get_tag_images(); ?>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>We haven't done this yet.</h2>
    <p>If you're interested with us working with you on this type of project, click here to get in touch.</p>
    <?php endif; ?>

<?php get_footer(); ?>
