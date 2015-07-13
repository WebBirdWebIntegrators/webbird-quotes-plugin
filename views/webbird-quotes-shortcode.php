<?php

if( have_rows('webbird_quotes__repeater') ): ?>

  <div class="webbird-quotes">

    <?php while ( have_rows('webbird_quotes__repeater') ) : the_row(); ?>

      <div class="webbird-quotes__wrapper">

        <!-- Show image -->
        <?php if( get_sub_field('webbird_quotes__image') ) { ?>
          <div class="webbird-quotes__image">

            <?php

            $image = get_sub_field('webbird_quotes__image');

            if( !empty($image) ):

            	// thumbnail
            	$size = 'thumbnail';
            	$thumb = $image['sizes'][ $size ];

            endif;
            ?>
            <img src="<?php echo $thumb; ?>"/>
          </div>
        <?php } ?>

        <div class="webbird-quotes__content">

          <!-- Show title -->
          <?php if( get_sub_field('webbird_quotes__title') ) { ?>
            <h3><?php echo get_sub_field('webbird_quotes__title'); ?></h3>
          <?php } ?>

          <!-- Show content -->
          <?php echo get_sub_field('webbird_quotes__content'); ?>

          <!-- Show author -->
          <?php if (get_sub_field('webbird_quotes__author')) { ?>
            <div class="webbird-quotes__content__author">
              <?php echo get_sub_field('webbird_quotes__author'); ?>
            </div>
          <?php } ?>

        </div>

        <!-- Show if internal link type -->
        <?php if ( 'internal' === get_sub_field('webbird_quotes__link_type')) { ?>
          <div class="webbird-quotes__link">
            <div style="width:100%; background-color: red">
              <a href="<?php echo get_sub_field('webbird_quotes__link_type__internal'); ?>" class="button" onclick="<?php echo get_sub_field('webbird_quotes__link_google_click_event'); ?>">
                <?php if ( get_sub_field('webbird_quotes__link_label') ) { ?>
                  <?php echo get_sub_field('webbird_quotes__link_label'); ?>
                <?php } else { ?>
                  <?php _e('More info', 'webbird-quotes'); ?>
                <?php } ?>
              </a>
            </div>
          </div>

        <!-- Show if external link type -->
        <?php } elseif ( 'external' === get_sub_field('webbird_quotes__link_type')) { ?>
          <div class="webbird-quotes__link">
            <a href="<?php echo get_sub_field('webbird_quotes__link_type__external'); ?>" class="button" onclick="<?php echo get_sub_field('webbird_quotes__link_google_click_event'); ?>" target="_blank">
              <?php if ( get_sub_field('webbird_quotes__link_label') ) { ?>
                <?php echo get_sub_field('webbird_quotes__link_label'); ?>
              <?php } else { ?>
                <?php _e('More info', 'webbird-quotes'); ?>
              <?php } ?>
            </a>
          </div>
        <?php } ?>

      </div>

    <?php endwhile; ?>

  </div>

<?php else :

    // no rows found

endif;

?>
