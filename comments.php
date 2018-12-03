<?php if (comments_open()) ?>
<div class="comments">
<p>Comment</p>
<?php if (have_comments()) ?>
<ol class="comments-list">
    <?php wp_list_comments(); ?>
</ol>
<? php ?>
<?php comment_form(); ?>

</div>
<? php ?>