<!DOCTYPE html>
<?php $controller 	=	strtolower($this->request->params['controller']); ?>
<?php $action 		=	strtolower($this->request->params['action']); ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DEXJOBS- Home</title>
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>images/favicon.png">
    <!-- Bootstrap -->
    <link href="<?php echo WEBSITE_URL; ?>css/bootstrap.min.css" rel="stylesheet"/>
    <!--Custom template CSS-->
     <link href="<?php echo WEBSITE_URL; ?>css/style.css" rel="stylesheet"/>
     <!--Custom template CSS Responsive-->
     <link href="<?php echo WEBSITE_URL; ?>css/webcss/site-responsive.css" rel="stylesheet"/>
       <!--Animated CSS -->
     <link href="<?php echo WEBSITE_URL; ?>css/webcss/animate.css" rel="stylesheet"/>
     <link href="<?php echo WEBSITE_URL; ?>css/validation_error.css" rel="stylesheet"/>
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>css/font-awesome/css/font-awesome.min.css"/>
     <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>js/owlslider/owl-carousel/owl.carousel.css"/>
     
    <!-- Default template -->
    <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>js/owlslider/owl-carousel/owl.template.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
    <body class="<?php 
		if($action == 'blog'){
			echo 'page-blog';
		}
		if($action == 'forgot-password'){
			echo 'title-image';
		}
		
		?>">   
   <?php 
    echo $this->element('header_menu');
	echo $this->fetch('content');
	echo $this->element('footer'); ?>
		
<!-- Scripts
================================================== -->
  	<!--  jQuery 1.7+  -->
     <script type="text/javascript" src="<?php echo WEBSITE_URL; ?>js/jquery-1.9.1.min.js"></script>
     <!--Select 2-->
	 <?php /*
    <script type="text/javascript" src="js/select2.min.js"></script>
    <!-- Html Editor -->
    <script src="js/tinymce/tinymce.min.js"></script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="js/parallax.js-1.4.2/parallax.js"></script>*/ ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo WEBSITE_URL; ?>js/bootstrap.min.js"></script>
   	<!-- Include js plugin -->
	 <?php /*
    <script type="text/javascript" src="js/owlslider/owl-carousel/owl.carousel.js"></script>
	*/ ?>
    <script type="text/javascript" src="<?php echo WEBSITE_URL; ?>js/waypoints.min.js"></script> 
  	<script type="text/javascript" src="<?php echo WEBSITE_URL; ?>js/counter/jquery.counterup.min.js"></script> 
    <!--Site JS-->
     <script src="<?php echo WEBSITE_URL; ?>js/webjs.js"></script>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
     <script src="<?php echo WEBSITE_URL; ?>js/custom.js"></script>
	 <script src="<?php echo WEBSITE_URL; ?>js/tmpl.min.js"></script>
  <!-- Scripts
================================================== -->
<script>
</script>
<script type="text/x-tmpl" id="tmpl-demo">
<h3>{%=o.title%}</h3>
<p>Released under the
<a href="{%=o.license.url%}">{%=o.license.name%}</a>.</p>
<h4>Features</h4>
<ul>
{% for (var i=0; i<o.features.length; i++) { %}
    <li>{%=o.features[i]%}</li>
{% } %}
</ul>
</script>
	</body>
</html>