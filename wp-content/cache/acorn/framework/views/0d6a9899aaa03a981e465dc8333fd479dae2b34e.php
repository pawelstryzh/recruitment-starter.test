<?php
  $title = $data['tytul'];
  $subtitle = $data['podtytul'];
  $btn = $data['przycisk'];
  $image = $data['zdjecie'];
?>
<section class="hero">
  <div class="container">
    <div class="hero__holder">
      <div class="hero__caption" data-aos="fade-right">

        <?php if($title): ?>
          <h1 class="hero__heading">
            <?php echo $title; ?>

          </h1>
        <?php endif; ?>

        <?php if($subtitle): ?>
          <div class="hero__subtitle">
            <?php echo $subtitle; ?>

          </div>
        <?php endif; ?>

        <?php if($data['przycisk']): ?>
          <a class="hero__btn"
             href="<?php echo $btn['url']; ?>"
             title="<?php echo $btn['title']; ?>"
             <?php if($btn['target']): ?>
             target="<?php echo $btn['target']; ?>" <?php endif; ?>>
            <?php echo $btn['title']; ?>

          </a>
        <?php endif; ?>

      </div>

      <?php if($image): ?>
        <div class="hero__image" data-aos="fade-left">
          <img src="<?php echo $image['url']; ?>"
               alt="<?php echo $image['alt']; ?>">
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php /**PATH C:\Work\Ampps\www\recruitment-starter.test\wp-content\themes\coditive\resources\views/sections/hero_section.blade.php ENDPATH**/ ?>