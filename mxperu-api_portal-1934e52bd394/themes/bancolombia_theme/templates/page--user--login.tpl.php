<div class="home">

	  
<div id="page" class="">

  <?php print render($page['top_menu']); ?>

    <header id="header1" class="clearfix" role="banner">
	   <nav class="h-bk--white h-shadow--gray position-fixed w-100 g-index--10">

        <div class="container">
          <div class="row"> 
            <div class="col-md-12">
              <div class="header">
               
    <?php if ($site_logo || $site_name || $site_slogan): ?>
      <!-- start: Branding -->
      <div id="branding1" class="branding-elements clearfix">

        <?php if ($site_logo): ?>
          <div id="logo1">
            <?php print $site_logo; ?>
          </div>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <!-- start: Site name and Slogan hgroup -->
          <div <?php print $hgroup_attributes; ?>>

            <?php if ($site_name): ?>
              <h1 <?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <h2 <?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
            <?php endif; ?>

          </div><!-- /end #name-and-slogan -->

        <?php endif; ?>

      </div><!-- /end #branding -->
    <?php endif; ?>
                <div class="nav">
                 <?php// print render($page['menu_bar']); ?>
                  <div class="user">
                     <?php print render($page['header']); ?>
                  </div>
                </div>
                <!--button class="g-btn--circle">
                <i>ico</i>
                </button-->
              </div>
            </div>
          </div>
        </div>
      </nav>
  </header>	 


  <div id="columns1" <?php print $page['menu_bar'] ? 'class="no-menu-bar"' : ''; ?>>
    <div class="columns-inner1 clearfix">

    
      <?php print render($page['help']); ?>
      <?php print render($page['secondary_content']); ?>

      <?php if (
        $page['three_33_top'] ||
        $page['three_33_first'] ||
        $page['three_33_second'] ||
        $page['three_33_third'] ||
        $page['three_33_bottom']
      ): ?>
        <!-- Three column 3x33 Gpanel -->
        <div class="at-panel gpanel panel-display three-3x33 clearfix">
          <?php print render($page['three_33_top']); ?>
          <?php print render($page['three_33_first']); ?>
          <?php print render($page['three_33_second']); ?>
          <?php print render($page['three_33_third']); ?>
          <?php print render($page['three_33_bottom']); ?>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <div id="content-column">
        <div class="content-inner">

          <?php print render($page['highlighted']); ?>

          <div <?php print $tag; ?> id="main-content" role="main">

          <?php print render($title_prefix); ?>
          <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
            <header id="main-content-header">

              <?php if ($title): ?>
                <h1 id="page-title"<?php print $attributes; ?>>
                  <?php// print $title; ?>
                </h1>
              <?php endif; ?>

              <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                <div id="tasks">

                  <?php if ($primary_local_tasks): ?>
                    <ul class="tabs primary clearfix"><?php // print render($primary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($secondary_local_tasks): ?>
                    <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($action_links = render($action_links)): ?>
                    <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                  <?php endif; ?>

                </div>
              <?php endif; ?>

            </header>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <!-- region: Main Content -->
		  <div class="g-fixed">
        <div class="g-ui--sckity d-flex">
          <div class="container g-ui--sckity d-flex">
            <div class="d-flex align-items-center g-ui--sckity">
				<div class="login__form g-box">
				<div class="pb-4">
                  
                  <p class="title">API Portal</p>
                  <span class="bajada">Thursday, July 31, 2019 10:06 am</span>
                </div>
				  <?php print $messages; ?>
				  <?php if ($content = render($page['content'])): ?>
					<div id="content">
					  <?php print $content; ?>
					</div>
				  <?php endif; ?>
			    </div>
				<div class="login__img">
                <img class="bkg-login" src="<?php echo base_path().path_to_theme(); ?>/images/bkg-login.png" alt="background">
                <img class="bkg-login--user" src="<?php echo base_path().path_to_theme(); ?>/images/bkg-login--user.png" alt="background">
              </div>
</div>
</div>
</div>
</div>
          <?php print $feed_icons; ?>

        </<?php print $tag; ?>>

        <?php print render($page['content_aside']); ?>

      </div>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
    <?php print render($page['tertiary_content']); ?>

  </div>
</div>
<footer class="footer">
        <div class="h-bb--white pb-5">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-of-pages">
                  <li class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact us</font></font></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact us</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Work with us</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About us</font></font></a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-of-pages">
                  <li class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quick access</font></font></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Economic investigations</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Glossary</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sustainability</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tariff</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Site Map</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transactions</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Press room</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Frequent questions</font></font></a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-of-pages">
                  <li class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Legal</font></font></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Legal documents</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terms of use</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financial consumer, requirements and Defender</font></font></a></li>
                  <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Insurance bidding process 2019</font></font></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="container">
            <div class="row pb-4 pt-4">
              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <img class="iso" src="<?php echo base_path().path_to_theme(); ?>/images/iso.png" alt="">
                  <span class="label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020 Bancolombia Group</font></font></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>



</div><!-- //End #page, .container -->

<?php if ($collapsible = render($page['collapsible'])): ?>
  <section id="section-collapsible" class="section-collapsible clearfix">
    <h2 class="collapsible-toggle"><span class="togglebg"><a href="#"
                                                             title="<?php print t('Toggle collapsible region'); ?>"><?php print t('Toggle collapsible region'); ?></a></span>
    </h2>
    <?php print $collapsible; ?>
  </section>
<?php endif; ?>
</div>