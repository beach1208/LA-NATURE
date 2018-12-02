<?php get_header(); ?>
<div class="main-container">
    <div class="row contents">
    <div class="col-md-8">

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

<!-- title -->
<h1><?php the_title(); ?></h1>

<!-- thumbnail -->

<?php if (has_post_thumbnail()) : ?>
<div class="article-img">
    <?php the_post_thumbnail('large'); ?>
</div>
<?php endif; ?>

<!-- main contents -->
<?php the_content(); ?>
<!-- tag -->
<div class="article-tag">
    <?php the_tags('<ul><li>Tag: </li><li>', '</li><li>', '</li></ul>'); ?>
</div>
</article>
<?php endif; ?>

    </div>
    <div class="col-md-4">
    <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>