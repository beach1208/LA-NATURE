<?php if (comments_open()) ?>
<div class="comments">
<p>Comment</p>
<?php if (have_comments()) ?>
<ol class="comments-list">
    <?php wp_list_comments(); ?>
</ol>
<?php
$comments_args = array(
    'fields' => array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
            '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
        'email' => '<p class="comment-form-email"><label for="email">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
            '<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
        'url' => '',
    ),
    'title_reply' => 'Leave a Reply',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'label_submit' => 'Submit',
);

comment_form($comments_args);
?>
</div>


