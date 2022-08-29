<?php
  $footer_logo = get_field('footer', 'option')['footer_logo'];
  $footer_text = get_field('footer', 'option')['footer_tekst'];
  $social = get_field('footer', 'option')['social_media'];
  $copy = str_replace('$year', Date('Y'), get_field('footer', 'option')['copyright']);
?>

<footer class="footer">
  <div class="container">
    <div class="footer__holder">
      <div class="footer__column">
        <?php if($footer_logo): ?>
        <a class="footer__logo" href="<?php echo e(home_url('/')); ?>">
          <img class="lozad" data-src="<?php echo $footer_logo['url']; ?>"
               alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
        </a>
        <?php endif; ?>

        <?php if($footer_text): ?>
        <div class="footer__text">
          <?php echo $footer_text; ?>

        </div>
        <?php endif; ?>

        <?php if($social): ?>
          <div class="footer__social">
            <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a class="footer__social-link"
                 href="<?php echo $item['link']['url']; ?>"
                 title="<?php echo $item['link']['title']; ?>"
                 target="<?php echo $item['link']['target']; ?>">
                <img src="<?php echo $item['ikona']['url']; ?>" alt="<?php echo $item['link']['title']; ?>">
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>

        <?php if($copy): ?>
          <div class="footer__copy">
            <?php echo $copy; ?>

          </div>
        <?php endif; ?>

      </div>
      <div class="footer__menus">
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            <?php echo wp_get_nav_menu_name('footer-1'); ?>

          </h4>
          <?php echo wp_nav_menu(array('theme_location' => 'footer-1')); ?>

        </div>
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            <?php echo wp_get_nav_menu_name('footer-2'); ?>

          </h4>
          <?php echo wp_nav_menu(array('theme_location' => 'footer-2')); ?>

        </div>
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            <?php echo wp_get_nav_menu_name('footer-3'); ?>

          </h4>
          <?php echo wp_nav_menu(array('theme_location' => 'footer-3')); ?>

        </div>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH C:\Work\Ampps\www\recruitment-starter.test\wp-content\themes\coditive\resources\views/sections/footer.blade.php ENDPATH**/ ?>