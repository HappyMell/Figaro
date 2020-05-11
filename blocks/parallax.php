<div class="parallax">
        <div class="parallax__wrapper">
          <h2
            data-sal="fade"
            data-sal-delay="300"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
           <?php echo the_field('header')?>
          </h2>
        <?php echo the_field('paragraph')?>
          <li
            data-sal="fade"
            data-sal-delay="500"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
            <a href="<?php echo get_field('link')['url']?>"><?php echo get_field('link')['title']?></a>
          </li>
        </div>
      </div>