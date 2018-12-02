<?php get_header(); ?>
<div class="container">
    <div class="contents">

<!-- loop for single article -->

<?php if (have_posts()) : the_post(); ?>

<article <?php post_class('article'); ?>>

<!-- article contents -->

<div class="article-info">

<!-- day of post -->

<span class="article-date">
<i class="fas fa-pencil-alt"></i>
    <time
    datetime="<?php echo get_the_date('Y-m-d'); ?>">
    <?php echo get_the_date(); ?>
    </time>
</span>

<!-- category get -->

<?php if (has_category()) : ?>
<span class="cat-data">
    
    <?php echo get_the_category_list(' '); ?>
</span>
<?php endif; ?>
</div>

</article>

<?php endif; ?>



    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>