<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intolerance
 */

?>

<!-- footer section -->
<section class="pv-5 ph-3" style="background-color: #343434;">
  <div class="container fg-align-center">
    <div>
      <p class="fg-color-inverted fg-size-small">
        <?php the_field('footer__copyright'); ?>        
      </p>
    </div>

    <!-- short cuts to nav links -->
    <div class="footer__links mv-2">
      <!-- <a href="our_tests.html" class="fg-size-small mh-2">Our Tests</a>
      <a href="#" class="fg-size-small mh-2">About Us</a>
      <a href="#" class="fg-size-small mh-2">Intolerance</a>
      <a href="#" class="fg-size-small mh-2">Blog</a>
      <a href="#" class="fg-size-small mh-2">My Account</a>
      <a href="#" class="fg-size-small mh-2">Terms & Conditions</a>
      <a href="#" class="fg-size-small mh-2">Privacy Policy</a> -->
      <?php intolerancetesting_clean_custom_menus('footer'); ?>
    </div>

    <!-- disclaimers -->
    <p
      class="fg-color-dull fg-size-small mt-2"
      style="line-height: 1.5rem;"
    >
      <?php the_field('footer__disclaimer'); ?>
    </p>

    <p
      class="fg-color-dull fg-size-small mt-2"
      style="line-height: 1.5rem;"
    >
      <?php the_field('footer__para_one'); ?>
    </p>

    <p
      class="fg-color-dull fg-size-small mt-2"
      style="line-height: 1.5rem;"
    >
      <?php the_field('footer__para_two'); ?>      
    </p>
  </div>
</section>


<?php wp_footer(); ?>

</body>
</html>
