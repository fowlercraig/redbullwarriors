<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<div id="home--wrapper">

<section id="home--can" class="scroll-header">
  <div class="fs-row">
    <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div id="home--can_info"   class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-right">
          <nav id="home--can_nav">
            <a class="btn btn-link btn-first" href="#">The Can</a>
            <a class="btn btn-link" href="#">Mission</a>
            <a class="btn btn-link" href="#">Videos</a>
            <a class="btn btn-link" href="#">#warriorscan</a>
            <div class="right">
              <a class="btn btn-link ss-gizmo ss-facebook"  href="#">F</a>
              <a class="btn btn-link ss-gizmo ss-twitter"   href="#">T</a>
              <a class="btn btn-link ss-gizmo ss-instagram" href="#">I</a>
            </div>
          </nav>
          <header id="home--can_title">
            <h1>Inked by<br>The <span>Warriors</span></h1>
            <h3>We're launching the brand new custom can.</h3>
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

<section id="home--about">
  <div class="fs-row">
    <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div id="home--about_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
          <header id="home--about_title">
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
            <hr class="vertical-nav-line" />
          </header>
        </div><!-- Home Can Info -->
      </div>
    </div>
  </div>
</section>

</div>

<div id="spinner--overlay">
  <a id="spinner--overlay_close" class="right"><i class="ss-gizmo ss-icon">plus</i></a>
  <div class="fs-grid">
    <div class="fs-row">
      <div class="fs-cell fs-lg-10 fs-centered">
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