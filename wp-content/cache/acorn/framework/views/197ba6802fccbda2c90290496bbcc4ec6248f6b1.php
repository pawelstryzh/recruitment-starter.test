<?php
  $title = $data['tytul'];
  $subtitle = $data['podtytul'];
  $prices = $data['blok_cenowy'];
?>
<?php if($prices): ?>
<div class="ceny">
  <div class="container">

    <?php if($title): ?>
    <h2 class="ceny__heading" data-aos="fade-up">
      <?php echo $title; ?>

    </h2>
    <?php endif; ?>

    <?php if($subtitle): ?>
    <div class="ceny__subtitle" data-aos="fade-up">
      <?php echo $subtitle; ?>

    </div>
    <?php endif; ?>

    <div class="ceny__holder">
      <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ceny__single"
             data-aos="fade-up"
             data-aos-delay="<?php echo $key+1; ?>00">

          <?php if($price['zdjecie']): ?>
          <img class="ceny__image lozad"
               data-src="<?php echo $price['zdjecie']['url']; ?>"
               alt="<?php echo $price['zdjecie']['alt']; ?>">
          <?php endif; ?>

          <?php if($price['tytul']): ?>
            <h3 class="ceny__single-title">
              <?php echo $price['tytul']; ?>

            </h3>
          <?php endif; ?>

          <?php if($price['cechy']): ?>
            <div class="ceny__features">
              <?php echo $price['cechy']; ?>

            </div>
          <?php endif; ?>

          <div class="ceny__bottom">

            <?php if($price['cena']): ?>
              <div class="ceny__price">
                <?php if($price['cena'] == 'Free'): ?>
                  <strong><?php echo $price['cena']; ?></strong>
                <?php else: ?>
                  <strong>
                    $<?php echo $price['cena']; ?>

                  </strong> / mo
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <?php if($price['przycisk']): ?>
              <a class="ceny__btn" href="#" title="<?php echo $price['przycisk']['title']; ?>">
                <?php echo $price['przycisk']['title']; ?>

              </a>
            <?php endif; ?>

          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<?php /**PATH C:\Work\Ampps\www\recruitment-starter.test\wp-content\themes\coditive\resources\views/sections/ceny.blade.php ENDPATH**/ ?>