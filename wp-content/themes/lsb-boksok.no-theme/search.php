<?php get_template_part('templates/page', 'header'); ?>

<?php 

$lsb_cat_query_var = get_query_var(TaxonomyUtil::get_rewrite_slug_for_taxonomy('lsb_tax_lsb_cat'));
$lsb_cat_query_var_array = explode(',', $lsb_cat_query_var);
$lsb_cat_

?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Beklager, ingen søkeresultater.', 'lsb'); ?>
  </div>
  <?php get_search_form(); ?>
<?php elseif($lsb_cat_query_var) : ?>
  <p class="alert alert-info">
    Viser kun resultater i 
    <?php echo ucfirst(TaxonomyUtil::get_names_from_slugs($lsb_cat_query_var_array, 'lsb_tax_lsb_cat')) ?>.
    Søk etter "<?php echo get_search_query()?>"
    <a href="/?s=<?php echo get_search_query()?>">
       i alle bøker.
    </a>
  </p>
<?php endif; ?>

<section class="loop">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-summary', get_post_type()); ?>
<?php endwhile; ?>
</section>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <?php roots_pagination(); ?>
  </nav>
<?php endif; ?>

<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $search_query = $wp_query->query_vars['s'];
?>
