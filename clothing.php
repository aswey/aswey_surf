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
</head>
<body> 
<?php include('navigation.html');?>
<!-- banner -->
	<div class="w3ls-banner-c"> 
	</div>	
<!-- welcome -->
	<div class="welcome">
		<br>
		<div class="w3l-heading">
			<h2 class="w3ls_head">衣</h2>
		</div>
		<br>
			<div class="welcome-top">
				<div class="col-md-6 welcome-left">
					<div class="welcome-left-top">
						<h3>衝浪褲</h3>
						<p><img src="images/clothing/OA.png" alt="OA" title="OA" /></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="col-md-6 welcome-right-c1">
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-bottom">
				<div class="col-md-6 welcome-bottom-left-c1">
				</div>
				<div class="col-md-6 welcome-bottom-right">
					<div class="welcome-left-top">
						<h3>比基尼</h3>
						<p><img src="images/clothing/OA.png" alt="OA" title="OA" /></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal2">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-top">
				<div class="col-md-6 welcome-left">
					<div class="welcome-left-top">
						<h3>防寒衣</h3>
						<p></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="col-md-6 welcome-right-c2">
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-bottom">
				<div class="col-md-6 welcome-bottom-left-c2">
				</div>
				<div class="col-md-6 welcome-bottom-right">
					<div class="welcome-left-top">
						<h3>防磨衣</h3>
						<p></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal2">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-top">
				<div class="col-md-6 welcome-left">
					<div class="welcome-left-top">
						<h3>毛巾衣</h3>
						<p></p>
					</div>
				</div>
				<div class="col-md-6 welcome-right-c3">
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-bottom">
				<div class="col-md-6 welcome-bottom-left-c3">
				</div>
				<div class="col-md-6 welcome-bottom-right">
					<div class="welcome-left-top">
						<h3>防水袋</h3>
						<p><img src="images/clothing/logo_stream_trall.png" alt="stream_trall" title="stream_trall" /></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal2">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-top">
				<div class="col-md-6 welcome-left">
					<div class="welcome-left-top">
						<h3>太陽眼鏡</h3>
						<p><img src="images/clothing/slastiksun.png" alt="slastiksun" title="slastiksun" /></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="col-md-6 welcome-right-c4">
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="welcome-bottom">
				<div class="col-md-6 welcome-bottom-left-c4">
				</div>
				<div class="col-md-6 welcome-bottom-right">
					<div class="welcome-left-top">
						<h3>衝浪備品</h3>
						<p></p>
						<!--<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal2">詳細內容</a>
						</div>-->
					</div>
				</div>
				<div class="clearfix"></div>
			</div>	
	</div>
	<!-- //welcome -->

<?php include('footer.html');?>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- js --> 
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script -->
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