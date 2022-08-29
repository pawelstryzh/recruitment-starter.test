<section class="liczby">
  <div class="container">
    <div class="liczby__holder">

      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="liczby__single"
           data-aos="fade-up"
           data-aos-delay="<?php echo $key+1; ?>00">
        <div class="liczby__single-inner">
          <img class="liczby__icon lozad" data-src="<?php echo $item['ikona']['url']; ?>"
               alt="<?php echo $item['ikona']['alt']; ?>">
          <div class="liczby__value">
            <div class="liczby__number">
              <span><?php echo $item['liczba']; ?></span><?php if($item['dodac_plus']): ?>+<?php endif; ?>
            </div>
            <div class="liczby__subtitle">
              <?php echo $item['podtytul']; ?>

            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </div>
</section>
<?php /**PATH C:\Work\Ampps\www\recruitment-starter.test\wp-content\themes\coditive\resources\views/sections/liczby.blade.php ENDPATH**/ ?>