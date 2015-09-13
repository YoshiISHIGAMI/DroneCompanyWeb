<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


  <section id="service" class="content">
    <h2><img src="_asset/img/h2_service.png" height="75" width="177" alt="SERVICE"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>空撮</h3>
          <div class="cont_body">
            <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
          </div>
        </div>
        <div class="col-md-6">
          <h3>ドローン操縦者派遣</h3>
          <div class="cont_body">
            <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
          </div>
        </div>
      </div>
    </div>

    <p class="box_contact"><a href="#contact" class="btn btn-lg btn_contact">お問い合せ</a></p>
  <!-- /service --></section>

  <section id="works" class="content bg_wht">
    <h2><img src="_asset/img/h2_works.png" height="75" width="156" alt="WORKS"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/XjxOW5oKElc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="cont_body">
          <h3>Cast Your Shell/Fear, and Loathing in Las Vegas</h3>
          <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
          <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
        </div>
        </div>
      </div>
    </div>
  <!-- /works --></section>

  <section id="company" class="content">
    <h2><img src="_asset/img/h2_company.png" height="75" width="207" alt="COMPANY"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Profile</h3>
          <div class="cont_body">
            <table class="profile_company">
            <tr>
              <th>会社名</th>
              <td>ドローンソリューション株式会社</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>2015年8月31日</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>三浦 雅史</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>東京都豊島区南池袋2-4-3 池袋ホウライビル 4F</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>空撮、ドローン操縦者の派遣</td>
            </tr>
            </table>
          </div>
        </div>
        
        <div class="col-md-6">
          <h3>News</h3>
          <div class="cont_body">
            <ul class="list_news">
              <li><a href="#">2015年10月31日<br>ドローン操縦者の派遣サービスを開始しました</a></li>
              <li><a href="#">2015年9月11日<br>空撮サービスを</a></li>
              <li><a href="#">2015年9月1日<br>ウェブサイトを公開しました</a></li>
            </ul>
          </div>
      </div>
    </div>
    </div>
  <!-- /company --></section>
  <div id="map"></div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMwT0G9ZhR4uTkKtZWJA7axoqjZR2TA4M&callback=initMap"></script>
    <script type="text/javascript">
      var map;
      function initMap() {
        var myLatLng = {lat: 35.724444, lng: 139.716437};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'DRONE SOLUTIONS inc.'
        });
        marker.setMap(map);
      }
    </script>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
