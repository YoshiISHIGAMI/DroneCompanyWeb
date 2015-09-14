<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

  <?php 
    $page_id = 2;
    $page = get_post( $page_id );
    echo $page->post_content;
  ?>
  
  <footer>
    <p><img src="/_asset/img/copyrights.png" height="10" width="191" alt="&copy; 2015 DRONE SOLUTIONS inc."></p>
  </footer>
  
</body>
</html>
