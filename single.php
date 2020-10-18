<?php get_header(); ?>

<div class="container index">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Blog Title</h3>
                </div>
                <div class="panel-body">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                    
                            <article class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>
                                            <a href="<?php echo the_permalink(); ?><?php echo the_title(); ?>"></a>
                                        </h2>
                                        
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="post-thumbnail">
                                                <?php echo get_the_post_thumbnail(); ?>
                                            </div><!-- .post-thumbnail -->
                                        <?php endif; ?>
                                            
                                        <br />		
                                        <p class="meta">Posted at <?php the_time( 'F j, Y g:i a' ); ?> by <strong><?php the_author(); ?></strong>
                                        </p>
                                        <div class="content">
                                            <?php the_content(); ?>
                                        </div><!-- .content -->
                                        <br />
                                        <a class="btn btn-default" href="<?php the_permalink(); ?>">Read More &raquo;</a>
                                    </div><!-- .col-md-12 -->
                                </div><!-- .row -->
                            </article><!-- .post -->
                    
                        <?php endwhile; ?>

                    <?php endif; ?>

                    <?php comments_template(); ?>

                </div><!-- .panel panel-body -->
            </div><!-- .panel panel-default -->

        </div><!-- .col-md-8 -->
        
        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div><!-- .col-md-4 -->

    </div><!-- .row -->
</div><!-- .container index -->

<?php get_footer(); ?>		

