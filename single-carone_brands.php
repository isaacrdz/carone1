


<?php while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></a></h2>
        <?php the_date( ); ?> <br>
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail ('list_articles_thumbs',array('class'=>'img-responsive img-blog')); } ?>
        <?php the_author( ); ?>
        <p><?php echo get_the_excerpt(); ?></p>
        <?php the_field( "description" ); ?>
<?php endwhile;?>

