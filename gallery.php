<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.html');?>
<link href="css/lightcase.css" rel="stylesheet" type="text/css" />
</head>
<body> 
	<?php include('navigation.html');?>
	<!-- banner -->
		<div class="w3ls-banner-1"> 
		</div>	
	<!-- portfolio -->
		<div class="banner-bottom">
			<div class="container">
				<div class="w3l-heading">
					<h2 class="w3ls_head">活動相片</h2>
				</div>
				<div class="w3ls_portfolio_grids">
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g1.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g1.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g2.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g2.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g3.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g3.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g4.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g4.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g5.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g5.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g6.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g6.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g7.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g7.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g8.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g8.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/gallery/g9.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Prefab</h3>
									</div>
									<img src="images/gallery/g9.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- portfolio -->
<?php include('footer.html');?>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- js --> 
	<!-- light-case -->
	<script src="js/lightcase.js"></script>
	<script src="js/jquery.events.touch.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
<!-- //light-case -->
	<script src="js/SmoothScroll.min.js"></script> 
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

    <!-- Facebook Share -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.11';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Line Share -->
	<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
	
</body>
</html>