<?php $book = get_field('book');?>


<section class="book" id="book">
        <div class="book__wrapper">
          <h2
            data-sal="fade"
            data-sal-delay="300"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
            <?php echo $book['header']?>
          </h2>
          <p
            data-sal="fade"
            data-sal-delay="400"
            data-sal-easing="ease-in-out"
            data-sal-duration="600"
          >
           <?php echo $book['details']?>
          </p>
          <div class="book__wrapper--block">
            <form>
              <input type="text" id="name" placeholder="Name" /><br />
              <input type="email" id="email" placeholder="e-mail" /><br />
              <textarea
                name="message"
                form="message"
                placeholder="Message"
                rows="3"
              ></textarea>
              <li><a href="#">Submit →</a></li>
            </form>

            <div class="block">
              <ul>
                  <?php foreach($book['contact'] as $contact) {?>
                <li>
                  <div>
                    <div class="service">
                      <img
                        src="<?php echo $contact['icon']?>"
                      />
                      <p><?php echo $contact['details']?></p>
                    </div>
                  </div>
                </li>
                  <?php }?>             
              </ul>
            </div>
          </div>
          <div class="book__wrapper--review">
              <?php $i = 300?>
              <?php foreach($book['reviews'] as $review) {
                  $i += 100;
                  ?>
            <div
              class="review"
              data-sal="fade"
              data-sal-delay="<?php echo $i?>"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <img class="photo" src="<?php echo $review['image']?>" />
              <p><?php echo $review['review']?></p>
              <img class="stars" src="<?php echo $review['stars']?>" />
              <p class="signature"><?php echo $review['signature']?></p>
            </div>
              <?php }?>
          </div>
        </div>
      </section>