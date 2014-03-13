<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta property="og:image" content="http://overflowproject.org/images/top_logo.png" />
<meta property="og:title" content="The Overflow Project" />
<meta property="og:url" content="http://overflowproject.org" />
<meta property="og:description" content="The Overflow Project is an initiative committed to a new way of living, a way of living that breaks down the walls that divide rich and poor. Using a 50 Day Challenge, The Overflow Project helps individuals, groups and churches simplify their lives in order to give generously." />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44650121-1', 'overflowproject.org');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');
</script>
<script type="text/javascript">
function trackFormSubmit(form, category, action, label) { 
  try { 
    _gaq.push(['_trackEvent', category , action, label]); 
  } catch(err) {}
  setTimeout(function() {
    form.submit(); 
  }, 100);
  return false;
}
</script>

</head>
<body <?php body_class(); ?>>
<!-- Header Wrapper -->
<div id="header-wrapper" class="wrapper">
  <div class="container">
    <div class="row">
      <div class="12u">
      
        <!-- Header -->
          <div id="header">
            
            <!-- Logo -->
              <div id="logo">
                <h1>The Overflow Project</h1>
              </div>
            <!-- /Logo -->
            
            <!-- Nav -->
              <nav id="nav">
                <ul>
                  <li class="desktop-hide"><a href="#">Welcome</a></li>
                  <li><a href="/#50">50-Day Challenge</a></li>
                  <li><a href="/#water">Why Water?</a></li>
                  <li><a href="/#resources">Resources</a></li>
                  <li><a href="/#about">About The Overflow Project</a></li>
                </ul>
              </nav>
            <!-- /Nav -->

          </div>
        <!-- /Header -->

      </div>
    </div>
  </div>
</div>
<!-- /Header Wrapper -->