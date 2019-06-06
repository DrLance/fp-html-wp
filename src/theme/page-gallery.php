<?php get_header( 'gallery' ); ?>
<div class="content">
  <section class="sec--gallery_bg">
    <h2><?= the_title() ?></h2>
    <div class="diveder"></div>
    <?php $gallery = get_posts([
        'post_type' => 'gallery',
        'numberposts' => -1
    ]); ?>
    <div class="container-gallery">
      <?php foreach ($gallery as $item): ?>
      <a href="<?= get_the_post_thumbnail_url($item,'full') ?>" class="gallery-item" data-fancybox-group="gallery">
        <div class="item-hover">
        </div>
        <img src="<?= get_the_post_thumbnail_url($item) ?>" alt="" />
      </a>
      <?php endforeach; ?>

    </div>
  </section>
</div>
</div>
<?php get_footer(); ?>
