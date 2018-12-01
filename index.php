<?php get_header(); ?>
<div class="main-container">
    <div class="row contents">
        <div class="col-md-8">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('article-list'); ?>>
        <a href="<?php the_permalink(); ?>">

        <!-- add image -->
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
<?php endif; ?>
<div class="text">
    <!-- title -->
    <h2><?php the_title(); ?></h2>
    <!-- Post Date -->
    <span class="article-date">
        <i class="fas fa-pencil-alt"></i>
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
</time>
    </span>
    <!-- Category -->
    <?php if (!is_category()) : ?>
    <?php if (has_category()) : ?>
    <span class="cat-data">
        <?php $postcat = get_the_category();
        echo $postcat[0]->name; ?>
    </span>
<?php endif; ?>
<?php endif; ?>

<?php the_excerpt(); ?>
</div>

        </a>
        </article>

        <!-- end of loop -->
<?php endwhile;
endif; ?>

<div class="pagination">
    <?php echo paginate_links(array(
        'type' => 'list',
        'mid_size' => '1',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;'
    )); ?>
</div>




    </div>
    <div class="col-md-4">
    <?php get_sidebar(); ?>
</div>
</div>
</div>



<?php get_footer(); ?>