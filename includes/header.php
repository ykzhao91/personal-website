
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Yankun's First Web Page!</title>

<!-- Begin Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End Meta -->

<!-- Begin Styles -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="flexslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- End Styles -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider.js"></script>

<!-- begin flexslider -->

<script type="text/javascript">
	
	$(window).load(function(){
				   
				   $('.flexslider').flexslider();
				   })
	
	</script>
<!-- end flexslider -->

<!-- Begin Toggle -->
	<script type="text/javascript">
		
		$(window).load(function() {
			
			$('#toggle').click(function() {
				
				$('#navigation').slideToggle();
				
			});
			
			var loadWidth = window.innerWidth;
			
			$(window).resize(function() {
				
				if ( loadWidth !== window.innerWidth) {
					
					if (window.innerWidth < 601) {
					
						$('#navigation').hide();
					
					} else {
					
						$('#navigation').show();
					
					}
					
				}
				
				
				
			});
			
		});
		
	</script>
	<!-- End Toggle -->
	
</head>
<body>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="index.php">Yankun Zhao</a></h1>
<span id="toggle">&#8801;</span>
</div>

<!-- End Header -->

<?php include('includes/navigation.php'); ?>

<!-- Begin Content -->
<div id="content">