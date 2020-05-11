<?php $center = get_field('center_gallery_blocks')?>
<?php $gallery = get_field('gallery');
    $text = get_field('text_block')
?>

<section class="gallery">
        <div class="gallery__grid">
          <div class="gallery__grid<?php echo $center['grid_positioning']?>">
            <div class="block">
              <div class="grid">
                <div
                  class="center-block"
                  data-sal="<?php echo $center['slide_animation_center']?>"
                  data-sal-delay="<?php echo $center['animation_delay']?>"
                  data-sal-easing="ease-in-out"
                  data-sal-duration="600"
                >
                  <p><?php echo $center['title']?></p>
                  <li><a href="#"><?php echo $center['link']['title']?></a></li>
                </div>
                <div
                  class="image-wrapper"
                  data-sal="<?php echo $center['slide_animation_center']?>"
                  data-sal-delay="<?php echo $center['animation_delay']?>"
                  data-sal-easing="ease-in-out"
                  data-sal-duration="600"
                  style="background-image: url('<?php echo $center['background_image']?>');"
                >
                  <div class="hover-image">
                    <img
                      class="logo-figaro"
                      src="<?php echo $center['hover_image']?>"
                    />
                    <li><a href="#"><?php echo $center['link']['title']?></a></li>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php foreach($gallery as $block) {?>
          <div
            class="gallery__grid<?php echo $block['grid_positioning']; ?>"
            data-sal="<?php echo $block['slide_animation'];?>"
            data-sal-delay="<?php echo $block['animation_delay']?>"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
            style="background-image: url('<?php echo $block['background_image']?>');"
          >
          <?php if ($block['type'] == true) {?>
            <div class="wrapper">
             <img src="<?php echo $block['image']?>">

              <p><?php echo $block['title']?></p>
              <li><a href="#"><?php echo $block['link']['title']?></a></li>
            </div>
          <?php }?>

          <?php if ($block['type'] == false) {?>
            <div class="hover-image">
              <img
                class="logo-figaro"
                src="<?php echo $block['hover_image']?>"
              />
              <li><a href="#">Discover →</a></li>
            </div>
          <?php } ?>
          </div>     
 
          <?php }?>
          <div
            class="gallery__grid<?php echo $text['grid_positioning']?>"
            data-sal="<?php echo $text['animation_slide']?>"
            data-sal-delay="500"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
            <p>
              <?php echo $text['title']?>
            </p>
            <p class="signature"><?php echo $text['signature']?></p>
          </div>
        </div>
      </section>