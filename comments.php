<?php
if (!post_password_required()) { ?>
    <ul class="comments-list">
        <?php
            wp_list_comments(array(
                'avatar_size'    => 60,
                'style'            => 'ul',
                'callback'        => 'churel_comments',
                'type'            => 'all'
            ));

            ?>
    </ul>
<?php
}
?>
<div class="comment-pagination <?php if (empty(get_comments_number())) {
                                    echo 'minus-comment-spacing';
                                } ?>">
    <?php
    paginate_comments_links(array(
        'prev_text' => esc_html__('<', 'churel'),
        'next_text' => esc_html__('>', 'churel'),
        'mid_size'  => 3
    ));
    ?>
</div>
<?php
$comments_args = array(
    // Change the title of send button 
    'label_submit' => esc_html__('Add Comment', 'churel'),
    // Change the title of the reply section
    'title_reply' => esc_html__('Leave a Comment', 'churel'),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    // Redefine your own textarea (the comment body).
    'class_submit' => 'submit_class',
    'fields' => array(
        'author' => '<div class="form-row"> <div class="form-group col-md-6"><input type="text" class="form-control" name="author" placeholder="' . esc_attr__('Your Name*', 'churel') . '" required /></div>',
        'email' => '<div class="form-group col-md-6"><input class="form-control" placeholder="' . esc_attr__('Your Email*', 'churel') . '" name="email" type="email" required></div></div> ',
    ),
    'comment_field' => '<div class="form-row">
    <div class="form-group col-md-12"><textarea rows="10" class="form-control" placeholder="' . esc_attr__('Type Comment', 'churel') . '" class="form-control" id="comment" name="comment" aria-required="true"></textarea></div></div>',
    'id_form'           => 'commentform',
    'class_form'      => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'   => 'btn-submit load-more-btn',
    'title_reply_to'    => esc_html__('Leave a Reply to ', 'churel').'%s',
    'cancel_reply_link' => esc_html__('Cancel Reply', 'churel'),
    'format'            => 'xhtml',
);
comment_form($comments_args);
?>