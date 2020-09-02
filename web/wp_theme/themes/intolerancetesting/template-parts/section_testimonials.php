<?php
/**
 * Template part for displaying testimonials section
 *
 * @package intolerance
 */

?>


<!-- testimonials section -->
<section class="bg-color-white">
  <div class="container pv-big">
    <div class="fg-align-center">
      <h2 class="fg-color-primary"><?php the_field('testimonials__heading_main'); ?></h2>
      <p><?php the_field('testimonials__desc'); ?></p>
    </div>

    <div class="d-grid three-col mt-2">
      <!-- card 1 -->
      <div class="fg-align-center p-4">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png'?>" class="avatar" />
        <p class="fg-size-small fg-color-dull mt-3 mb-2">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque,
          perferendis? Reiciendis harum exercitationem magnam velit adipisci
          quam esse delectus excepturi pariatur at, architecto possimus
          repellat facilis debitis sint accusamus itaque.
        </p>
        <p class="fg-size-small fg-bold uppercase">Matthew Robles</p>
        <img
          src="<?php echo get_template_directory_uri() . '/assets/images/rating-5star.png'?>"
          style="width: 6rem;"
          class="mt-1"
        />
      </div>

      <!-- card 2 -->
      <div class="fg-align-center p-4">
        <img
          src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png'?>"
          style="border-radius: 100%; height: 9rem;"
        />
        <p class="fg-size-small fg-color-dull mt-3 mb-2">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque,
          perferendis? Reiciendis harum exercitationem magnam velit adipisci
          quam esse delectus excepturi pariatur at, architecto possimus
          repellat facilis debitis sint accusamus itaque.
        </p>
        <p class="fg-size-small fg-bold uppercase">Matthew Robles</p>
        <img
          src="<?php echo get_template_directory_uri() . '/assets/images/rating-5star.png'?>"
          style="width: 6rem;"
          class="mt-1"
        />
      </div>

      <!-- card 3 -->
      <div class="fg-align-center p-4">
        <img
          src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png'?>"
          style="border-radius: 100%; height: 9rem;"
        />
        <p class="fg-size-small fg-color-dull mt-3 mb-2">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque,
          perferendis? Reiciendis harum exercitationem magnam velit adipisci
          quam esse delectus excepturi pariatur at, architecto possimus
          repellat facilis debitis sint accusamus itaque.
        </p>
        <p class="fg-size-small fg-bold uppercase">Matthew Robles</p>
        <img
          src="<?php echo get_template_directory_uri() . '/assets/images/rating-5star.png'?>"
          style="width: 6rem;"
          class="mt-1"
        />
      </div>
    </div>

    <div class="fg-align-center">
      <button class="uppercase">
        <?php $button_link = get_field('testimonials__call_to_action'); ?>
        <a href="<?php echo $button_link['url']; ?>"><?php echo $button_link['title']; ?></a>
      </button>
    </div>
  </div>
</section>