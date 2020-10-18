<div class="comments">
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
                if ( get_comments_number() == 1 ) {
                    echo get_comments_number() . ' Comment';
                } else {
                    echo get_comments_number() . ' Comments';
                }
            ?>
        </h3><!-- .comments-title -->
        <ul class="row comment-list">
            <?php
                wp_list_comments(array(
                    'avatar_size'   => 90,
                    'callback'      => 'add_theme_comments',
                ));
            ?>

        </ul><!-- .row comment-list -->
    <?php endif; ?>
        
    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed', 'dazzling' ); ?></p>
    <?php endif; ?>

</div>

<hr />

<?php
    $comment_args = array(
        // Change the title of send button 
        'label_submit'              => __( 'Send', 'textdomain' ),
        // Change the title of the reply section
        'title_reply'               => __( 'Write a Reply or Comment', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after'       => '',
        // Redefine your own textarea (the comment body).
        'comment_field'             => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
    );
    comment_form( $comment_args );
?>