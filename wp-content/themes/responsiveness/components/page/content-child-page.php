<?php

/* 
 * Template part for displaying child page content inside page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package responsiveness
 */
?>

<li class="clear archive-item list-child-pages group">
    <?php
        if ( responsiveness_post_icon() ) { ?>
            <a class="list-link" href="<?php echo esc_url( get_permalink() ); ?>" title="<?php 
                    echo esc_attr__( 'See more info about ', 'responsiveness' ) . get_the_title(); ?>">
                <figure class="post-icon medium-3 columns">
                <?php responsiveness_the_post_icon(); ?>
                </figure>
            </a>
        <?php } elseif( has_post_thumbnail() ) { ?>
            <a class="list-link text-center" href="<?php echo esc_url( get_permalink() ); ?>" title="<?php
                    echo esc_attr__( 'See more info about ', 'responsiveness' ) . get_the_title(); ?>">
                <figure class="post-image">
                <?php the_post_thumbnail( 'medium' ); ?>
                </figure>
            </a>
    <?php }
    ?>
    
    <div class="<?php echo responsiveness_post_icon() ? 'medium-9' : 'medium-12'; ?> columns">
    <a class="list-link" href="<?php echo esc_url( get_permalink() ); ?>" title="<?php
                    echo esc_attr__( 'See more info about ', 'responsiveness' ) . get_the_title(); ?>">
        <h2 class="entry-list-title <?php echo ! responsiveness_post_icon() ? 'text-center' : ''; ?>"><?php echo get_the_title(); ?></h2>
    </a>
    <?php responsiveness_fancy_excerpt(); ?>
    </div>

</li>