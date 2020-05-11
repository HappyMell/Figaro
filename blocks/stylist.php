<?php $carousel = get_field('carousel')?>

<section class="stylist">
        <div class="stylist__wrapper">
          <h2><?php echo $carousel['header']?></h2>

          <div class="default-container carousel">
              <?php foreach($carousel['slide'] as $slide) {?>
            <div
              class="saturday"
              style="background-image: url('<?php echo $slide['image']?>');"
            >
              <div class="hours-container">
                <div class="hours-container--full">
                  <p><?php echo $slide['title']?></p>
                </div>
              </div>
            </div>
              <?php }?>
          </div>
        </div>
      </section>