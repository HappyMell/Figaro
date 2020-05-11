<?php $place = get_field('places');
$i = 300
?>

<section class="video">
        <div
          class="video-background"
          data-poster-url="https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-poster-00001.jpg"
          data-video-urls="https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-transcode.mp4,https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-transcode.webm"
          data-autoplay="true"
          data-loop="true"
        >
          <video
            autoplay="true"
            loop="true"
            muted=""
            playsinline=""
            data-object-fit="cover"
            style="background-image: url('https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-poster-00001.jpg');"
          >
            <source
              src="https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-transcode.mp4"
            />
            <source
              src="https://assets.website-files.com/5bcdaad41740e348e1bb4a8a/5bcf23a800ba18da2d868ae4_New York City - 1044-transcode.webm"
            />
          </video>

          <div class="video__opacity">
            <div class="video__opacity--locations" id="locations">
                <?php foreach($place['card'] as $card) {
                    $i += 100;
                    ?>
              <div
                class="city__wrapper"
                data-sal="slide-down"
                data-sal-delay="<?php echo $i?>"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
                <h3><?php echo $card['place']?></h3>
                <p><?php echo $card['details']?></p>
                <ul class="card-list">
                  <li>
                    <div class="block">
                      <div class="card-row">
                        <p><?php echo $card['address']?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="card-row">
                        <p><?php echo $card['number']?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="card-row">
                        <p><?php echo $card['email']?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
                <?php }?>
            </div>
          </div>
        </div>
      </section>