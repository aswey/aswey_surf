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
		<div class="w3ls-banner-1"> 
		</div>	
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3l-heading">
					<h2 class="w3ls_head">聯絡我們</h2>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-7 agileits_mail_grid_left">
						<div class="agile-map">
							<iframe width='100%' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=947 台灣屏東縣滿州鄉屏東縣滿州鄉茶山路457之10號&z=16&output=embed&t='></iframe>
						</div>
					</div>
					<div class="col-md-5 agileits_mail_grid_right">
						<!--  lol  -->
						<div class="left-agileits">
							<h3>聯絡資訊</h3>
								<ul>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true"></span>947 台灣屏東縣滿州鄉屏東縣滿州鄉茶山路457之10號</li>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:bbsurf2007@yahoo.com.tw">bbsurf2007@yahoo.com.tw</a></li>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 08-8801727</li>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 0939-960-303</li>
									<li><img src="images/line.png" alt="Line" title="Line" />&nbsp;&nbsp;&nbsp;&nbsp;0939960303</li>
								</ul>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //contact -->
<?php include('footer.html');?>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- js --> 
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