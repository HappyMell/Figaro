<div
        class="hero"
        style="background-image: url('<?php echo the_field('hero_image')?>');"
        data-sal="fade"
        data-sal-delay="200"
        data-sal-easing="ease-in-out"
        data-sal-duration="300"
      >
        <div class="hero__wrapper">
          <div
            class="separator"
            data-sal="fade"
            data-sal-duration="700"
            style=" --sal-delay: 1s;"
          ></div>
<?php $bottomText = get_field('bottom_text')?>
          <div class="hero__wrapper--text">
            <h1
              data-sal="fade"
              data-sal-duration="700"
              style=" --sal-delay: 1.6s;"
            >
              <?php echo $bottomText['bottom_header_text']?>
            </h1>
            <p
              data-sal="fade"
              data-sal-duration="700"
              style=" --sal-delay: 2.3s;"
            >
            <?php echo $bottomText['bottom_text']?>
            </p>
            <li
              data-sal="fade"
              data-sal-duration="700"
              style=" --sal-delay: 3s;"
            >
              <a href="<?php echo $bottomText['bottom_button']['url']?>"><?php echo $bottomText['bottom_button']['title']?></a>
            </li>
          </div>
        </div>

        <?php $blackBanner = get_field('black_banner')?>
        <div
          class="hero__black-banner"
          data-sal="slide-down"
          data-sal-easing="ease-in-out"
          data-sal-duration="600"
          style=" --sal-delay: 3.9s;"
        >
          <div class="black-banner">
           <?php echo $blackBanner['details']?>
          </div>
        </div>
<?php $play = get_field('play')?>
        <div
          class="hero__play"
          data-sal="fade"
          data-sal-duration="700"
          style=" --sal-delay: 4.5s;"
        >
          <a href="<?php echo $play['play_button']['url']?>" data-lity>
            <img
              src="<?php echo $play['play_button']['title']?>"
          /></a>
        </div>

        <?php $socal = get_field('social')?>
        <?php $buttons = get_field('social')['social_buttons']?>
        <?php $i = 5.3?>

        <div class="hero__social">
          <?php foreach($buttons as $button) {  $i+= .3 ?>
          <a
            href="<?php echo $button['link']['url']?>"
            data-sal="fade"
            data-sal-duration="700"
            style=" --sal-delay: <?php echo $i?>s;"
            ><img
              src="<?php echo $button['link']['title']?>"/></a>
          <?php };?>
        </div>

        <div
          class="hero__white-banner"
          data-sal="slide-left"
          data-sal-easing="ease-in-out"
          data-sal-duration="600"
          style=" --sal-delay: 3.5s;"
        >
          <img
            src="https://uploads-ssl.webflow.com/5bcdaad41740e348e1bb4a8a/5bcdd747d44cf472bb71b1b2_2.svg"
          />
          <hr class="separator" />
            <?php $whiteBanner = get_field('white_banner')?>
         
            <?php echo $whiteBanner['text']?>
          

          <p class="signature"><?php echo $whiteBanner['signature']?></p>
        </div>
      </div>