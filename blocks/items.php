<?php $shampoo = get_field('shampoo');
      $creme = get_field('creme');  
?>

<section class="products">
        <div class="products__shampoo">
          <img
            data-sal="zoom-in"
            data-sal-delay="300"
            data-sal-easing="ease-in"
            data-sal-duration="400"
            src="<?php echo $shampoo['image']?>"
          />
          <p class="text-block"><?php echo $shampoo['text']?></p>
        </div>
        <div class="products__creme">
          <img
            data-sal="zoom-in"
            data-sal-delay="300"
            data-sal-easing="ease-in"
            data-sal-duration="400"
            src="<?php echo $creme['image']?>"
          />
          <p class="text-block"><?php echo $creme['text']?></p>
        </div>
      </section>