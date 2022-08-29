<?php $__env->startSection('content'); ?>
  <?php if(have_rows('strona_glowna')): ?>
    <?php while(have_rows('strona_glowna')): ?> <?php the_row() ?>
    <?php if(get_sub_field(get_row_layout())): ?>
      <?php if ($__env->exists('sections.'.get_row_layout(),
        ['block_name' => get_row_layout(), 'data'=> get_sub_field(get_row_layout())])) echo $__env->make('sections.'.get_row_layout(),
        ['block_name' => get_row_layout(), 'data'=> get_sub_field(get_row_layout())], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\Ampps\www\recruitment-starter.test\wp-content\themes\coditive\resources\views/front-page.blade.php ENDPATH**/ ?>