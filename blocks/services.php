<?php $services = get_field('services');
      $i = 300; 
?>

<div class="services" id="service">
        <h2><?php echo $services['title']?></h2>
        <div class="services__card">
            <?php foreach($services['card'] as $card) {
                $i += 100;
                ?>
          <div
            class="card"
            data-sal="fade"
            data-sal-delay="<?php echo $i?>"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
            <div class="icon">
              <img
                src="<?php echo $card['icon']?>"
              />
            </div>
            <h3><?php echo $card['title']?></h3>
            <p>
             <?php echo $card['details']?>
            </p>
          </div>
            <?php } ?>    
        </div>
        <div class="paragraph_wrapper">
          <p><?php echo $services['paragraph']?></p>
        </div>
        <?php $black = $services['black_offer']?>
        <div class="price_wrapper">
          <div class="black-price">
            <h3 class="black-offer"><?php echo $black['title']?></h3>
            <hr class="separator" />
            <p class="white-days"><?php echo $black['days']?></p>

            <ul class="price-list">
                <?php foreach($black['price_list'] as $item) {?>
              <li>
                <div>
                  <div class="service"><p><?php echo $item['service']?></p></div>
                  <div class="price"><p><?php echo $item['price']?></p></div>
                </div>
              </li>
                <?php }?>        
            </ul>
          </div>
          <?php $white = $services['white_offer']?>
          <div class="white-price">
            <h3 class="white-offer"><?php echo $white['title']?></h3>
            <hr class="separator" />
            <p class="white-days"><?php echo $white['days']?></p>

            <ul class="price-list">
                <?php foreach($white['price_list'] as $whiteItem) {?>
              <li>
                <div>
                  <div class="service"><p><?php echo $whiteItem['service']?></p></div>
                  <div class="price"><p><?php echo $whiteItem['price']?></p></div>
                </div>
              </li>
                <?php }?>
            </ul>
          </div>
        </div>
      </div>