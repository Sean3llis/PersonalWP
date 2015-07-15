<div class="row" id="hero">
  <?php if( get_field('hero_image') ) : $img = get_field('hero_image'); ?>
    <div class="hero-bg" style="background: url(<?php echo $img['url'] ?>) repeat-y center 0px fixed;"></div>
      <div class="logo-wrapper">
        <div class="logo-inner">
          SEAN ELLIS
        </div>
        <div class="sub-table">

          <div class="cell">
            <div class="cell-inner">
              Developer
            </div>
          </div>

          <div class="cell">
            <div class="cell-inner">
            Designer
            </div>
          </div>

          <div class="cell">
            <div class="cell-inner">
            Person
            </div>
          </div>

        </div>
      </div>
    <div class="bottom-ribbon"></div>
  <?php endif; ?>
</div>