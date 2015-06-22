<html>
<head lang="en">
    <meta charset="UTF-8">
    
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
 <link rel="stylesheet" href="css/styles.css" /> 

    <title>K2-Landscape</title>
</head>
<body>

<header>
	<div id="wrapper">
		<div id="header">

			 <a href="#" id="logo"><img src="images/logo.png" alt="K2-Landscape"></a>

			<div id="nav">
				<ul class="nav nav-pills nav-justified" role="tablist">
					<li role="presentation" class="active"><a href="home.html">About Us</a></li>
					<li role="presentation"><a href="#.html">Our Work</a></li>
					<li role="presentation"><a href="#.html">K2 Blog</a></li>
					<li role="presentation"><a href="#.html">Careers</a></li>
					<li role="presentation"><a href="#.html">Contact Us</a></li>
					<li role="presentation"><a href="#.html">Schedule An Appointment</a></li>
				</ul>
			</div> 
		</div>
</header>

 <?php

 wp_nav_menu( array (
 	'theme_location' => 'primary',
 	'menu_class' => 'nav nav-pills nav-justified'
 )); ?>