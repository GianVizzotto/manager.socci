<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.scheetzdesigns.com/adminpro/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2008], Tue, 25 Oct 2011 02:46:21 GMT -->
<head>
<meta charset="utf-8" />
<!--<meta http-equiv="x-ua-compatible" content="ie=edge" />-->

<!-- Apple iOS Web App Settings -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="assets/images/apple-touch-logo.png"/>
<script type="text/javascript"> 
	(function () {
		var filename = navigator.platform === 'iPad' ?
	   		'splash-screen-768x1004.png' : 'splash-screen-640x920.png';
	  	document.write(
	    	'<link rel="apple-touch-startup-image" ' +
	          'href="assets/images/' + filename + '" />' );
	})();
</script>
<!-- END Apple iOS Web App Settings -->

<title>Dashboard - Socci Manager</title>

<!--	Load the master stylesheet
		Note: This is a PHP file that loads like a CSS file. This way, we can include
		a custom color very quickly and easily. -->
<?php echo $this->Html->css('/css/master5945.css?color=454E51') ;?>


<!--	Load the "Chosen" stylesheet. You can remove this if your
		select boxes aren't going to make use of the awesome Chosen script. -->
<?php echo $this->Html->css('/js/chosen/chosen.css') ; ?>

<!--	Load the Fancybox stylesheet. You can remove this if you
		are not going to be lightboxing any images. -->
<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<?php echo $this->Html->css('/js/fancybox/jquery.fancybox-1.3.4.css') ;?>

<!--	Load the jQuery Library - We're loading in the header because there are quite a few dependencies that require
		The library while the rest of the page loads. These include Highcharts and the Tablesorter scripts. -->

<?php echo $this->Javascript->link('/js/jquery/1.6.2/jquery.min.js') ;?>
<?php echo $this->Javascript->link('/js/jquery.maskedinput-1.3.min.js') ;?>

<!--	Load the Charting/Graph scripts. You can remove this if you will not be displaying any charts. -->
<script src="assets/js/flot.js" type="text/javascript"></script>
<script src="assets/js/graphtable.js" type="text/javascript"></script>

<!--	Load the Tablesorter script. You can remove this if you will not be displaying any sortable tables. -->
<?php echo $this->Javascript->link('/js/jquery.tablesorter.min.js') ; ?>
<?php echo $this->Javascript->link('/js/jquery.tablesorter.pager.js') ; ?>
<!--	Load the Chosen script. You can remove this if you will not be displaying any custom select boxes. -->
<?php echo $this->Javascript->link('/js/chosen/chosen.jquery.js') ; ?>
<!--	Load the Fancybox script. You can remove this if you will not be displaying any image lightboxes. -->
<script src="assets/js/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<?php echo $this->Javascript->link('/js/fancybox/jquery.fancybox-1.3.4.pack.js') ; ?>
<!--	Load the AdminPro custom script. THIS IS REQUIRED, but elements within can be removed if unnecessary. -->
<?php echo $this->Javascript->link('/js/custom.js') ; ?>
<!--	Set up the responsive design sizes. You probably don't want to mess with these AT ALL. -->
<script type="text/javascript">
	var ADAPT_CONFIG = {
	  	path: '/css/',
	  	dynamic: true,
		callback: resizeGalleries,
	 	range: [
	    	'0px    to 420px  /// mobile.php?color=454E51&orientation=portrait',
	    	'420px  to 760px  /// mobile.php?color=454E51&orientation=landscape',
	    	'760px  to 980px  /// 720.php?color=454E51',
	    	'980px  to 1480px /// 960.css',
	    	'1480px			  /// 1400.css'
	  	]
	};
</script>

<!--	Load the Adapt script. This is what changes and resizes elements as you shrink the browser or
		view the AdminPro template on mobile devices. Try it out! -->
<?php echo $this->Javascript->link('/js/adapt.min.js') ; ?>


</head>
<body>


<!--	AdminPro uses a version of the 960 Grid System that was customized for this template. It includes just 4 columns that
		are fluid width and change automatically as you scale down the browser size. -->

<!--

	container_4			The main container for each row. Each one needs this, so don't forget it.
					
						OPTIONS:
						no-space		Remove all margins/padding from the container and its columns.
						header-wrap		Just the style for the header.
					
	grid_1, grid_2,
	grid_3, grid_4		Each one of these is a column style, and you need to add them to the container
						to add up to 4. So if you add a grid_3, you'll need a grid_1. A grid_2 needs
						another grid_2, etc.

-->
	
	
	
<!-- BEGIN HEADER - A lot of the top stuff is custom, so if you want to change it you'll need to edit this file as well
		 as the master.php and other sized stylesheets. -->
		 		
<div class="container_4 no-space header-wrap">

	<div id="header">
	
		<!-- LOGO -->
		<div id="logo" class="grid_3"><h1>Admin Pro</h1></div>
		
		<!-- EYEBROW NAVIGATION -->
		<div id="eyebrow-navigation" class="grid_1">
			<a href="#" class="settings">Settings</a>
			<a href="/login/logout" class="signout">Sign Out</a>
		</div>
		
		<!-- MAIN NAVIGATION WITH ICON CLASSES -->
<div id="main-navigation">
	<div class="nav-wrap clearfix">
		<div class="grid_3">
		
			<!-- Regular Navigation
				 Each nav item has a different class, you'll notice. This is what creates the different icons you see.
				 To add a new one, simply create a new PNG and create the class for it in "master.php" -->
				 
			<!-- The class "hide-on-mobile" will hide this navigation on a small mobile device. -->
			<ul class="hide-on-mobile">
				<li><a href="dashboard.html" class="dashboard active">Dashboard</a></li>
				<li><a href="grid.html" class="grid">Grid Styles</a></li>
				<li><a href="page.html" class="page">Page Layout</a></li>
				<li><a href="stats.html" class="stats">Statistics</a></li>
				<li><a href="gallery.html" class="gallery">Gallery</a></li>
				<li><a href="forms.html" class="forms">Form Styling</a></li>
				<li><a href="#" class="calendar">Calendar</a></li>
				<li><a href="/usuarios" class="users">Usuários</a></li>
				<li><a href="#" class="messages">Messages<span class="counter">4</span></a></li>
			</ul>
			
			<!-- The class "show-on-mobile" will show only this navigation on a small mobile device. It's a
			 	 dropdown select box that loads the page upon select. Dependant on JS within "custom.js" -->
			<div class="show-on-mobile">
				<div class="mobile-nav-wrap">
					<select name="navigation" class="mobile-navigation">
						<option value="">Choose a Page...</option>
						<option value="dashboard.php">Dashboard</option>
						<option value="grid.php">Grid Styles</option>
						<option value="page.php">Page Layout</option>
						<option value="stats.php">Statistics</option>
						<option value="gallery.php">Gallery</option>
						<option value="forms.php">Form Styling</option>
						<option value="#">Calendar</option>
						<option value="#">Users</option>
						<option value="#">Messages</option>
					</select>
				</div>
			</div>
		</div>
		<!-- END GRID_3 -->
		
		<!-- SEARCH BLOCK -->
		<div id="search" class="grid_1">
			<form action="http://demo.scheetzdesigns.com/adminpro/dashboard.php">
				<input type="text" class="search" value="Search..." />
				<input type="submit" class="go" />
			</form>
		</div>
		<!-- END GRID_1 -->
		
	</div>
	<!-- END NAV WRAP -->
	
</div>
<!-- END MAIN NAVIGATION -->		
	</div>
	<!-- END HEADER -->
	
</div>
<!-- END CONTAINER_4 - HEADER -->


<!-- BEGIN SUBNAVIGATION -->
<div class="container_4 no-space">
	<div id="subpages" class="clearfix">
		<div class="grid_4">
			<div class="subpage-wrap">
				<ul>
					<li><a href="#">Subpage One</a></li>
					<li><a href="#">Subpage Two</a></li>
					<li><a href="#">Subpage Three</a></li>
					<li><a href="#">Subpage Four</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- END SUBNAVIGATION -->

<?php echo $content_for_layout ;?>