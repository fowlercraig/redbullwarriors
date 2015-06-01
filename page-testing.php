<?php Themewrangler::setup_page();get_header(/***Template Name: Splash */); ?>

<div id="home--wrapper">

  <?php $mainWidth = 'fs-lg-10'; ?>

  <section id="home--can" class="scroll-header">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--can_info"   class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-right">
            <nav id="home--can_nav"  class="site-nav">
              <a class="btn btn-link btn-first hide" href="#home--can"><?php the_field('intro--headline'); ?></a>
              <a class="btn btn-link btn-first" href="#home--can">The Can</a>
              <a class="btn btn-link" href="#home--about">Mission</a>
              <a class="btn btn-link" href="#home--videos">Videos</a>
              <a class="btn btn-link" href="#home--story">The Story</a>
              <a class="btn btn-link" href="#home--social">#warriorscan</a>
              <a class="btn btn-link" href="#home--gallery">Gallery</a>
              <div class="right">
                <a class="btn btn-link ss-social-circle ss-facebook"  href="#"></a>
                <a class="btn btn-link ss-social-circle ss-twitter"   href="#"></a>
                <a class="btn btn-link ss-social-circle ss-instagram" href="#"></a>
              </div>
            </nav>
            <header id="home--can_title">
              <h1><?php the_field('intro--headline'); ?></h1>
              <h3><?php the_field('intro--sub-headline'); ?></h3>
              <?php the_field('intro--teaser'); ?>
              <a class="navigate-icon" href="#home--about"><i class="ss-gizmo ss-icon">navigatedown</i></a>
              <hr class="vertical-nav-line" />
            </header>
          </div><!-- Home Can Info -->
          <div id="home--can_spinner" class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">
            <?php include locate_template('parts/home/can.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="home--footer">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="footer--can_info"   class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
            <nav id="footer--can_nav"  class="site-nav">
              <a href='http://redbull.com/nz/en'><span class="logo">RedBull.com</span></a>
              <a href='http://redbull.com/nz/en/data-privacy-policy' title='Privacy Policy' target='_blank'><span>Privacy Policy</span></a>
              <a href='http://redbull.com/nz/en/terms-and-conditions' title='Terms & Conditions' target='_blank'><span>Terms & Conditions</span></a>
              <a href='http://redbull.com/nz/en/imprint' title='Imprint' target='_blank'><span>Imprint</span></a>
              <a href='http://redbull.com/nz/en/brand-protection' title='Brand Protection' target='_blank'><span>Brand Protection</span></a>
              <a href='https://www.redbullcontentpool.com' title='Media' target='_blank'><span>Media</span></a>
              <a href='http://energydrink-nz.redbull.com/contact' title='Contact Us' target='_blank'><span>Contact Us</span></a>
              <a href='http://jobs.redbull.com/nz/en' title='Jobs' target='_blank'><span>Jobs</span></a>
              <div class="right">
                <a class="btn btn-link ss-social-circle ss-facebook"  href="#"></a>
                <a class="btn btn-link ss-social-circle ss-twitter"   href="#"></a>
                <a class="btn btn-link ss-social-circle ss-instagram" href="#"></a>
              </div>
            </nav>
          </div><!-- Home Can Info -->
        </div>
      </div>
    </div>
  </footer>

</div>

<?php // Leave this stuff alone ?>

<div id="spinner--overlay">
  <a id="spinner--overlay_close" class="right"><i class="ss-gizmo ss-icon">plus</i></a>
  <div class="fs-grid">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <?php include locate_template('/parts/home/tabs.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>