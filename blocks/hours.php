<?php $hours = get_field('hours');?>

<div class="hours">
        <div class="hours__head-wrapper">
          <h2><?php echo $hours['header'] ?></h2>
        </div>
        <div class="hours__hours-wrapper">
            <?php foreach($hours['days'] as $day) {?>
          <div class="<?php echo $day['day']?>">
            <div class="day">
              <p><?php echo $day['day_text']?></p>
            </div>
            <div class="hours-container">
                <?php if($day['hours'] == true) {?>
              <div class="hours-container--left">
                <p><?php echo $day['hours_row']['left']['hours']?></p>
              </div>
              <div class="hours-container--right">
                <p><?php echo $day['hours_row']['right']['hours'] ?></p>
              </div>
                <?php }?>

                <?php if ($day['hours'] == false) {?>
                    <div class="hours-container--full">
                <p><?php echo $day['full_hours']['main_hours']?></p>
              </div>
                <?php }?>
            </div>
          </div>
            <?php }?>     
        </div>
      </div>