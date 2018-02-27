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
					<h2 class="w3ls_head">日本語</h2>
				</div>
				<!--<div class="agileits_mail_grids">
					<div class="col-md-7 agileits_mail_grid_left">
						<form action="#" method="post">
							<h4>姓名*</h4>
							<input type="text" name="Name" placeholder="Name..." required="">
							<h4>Email*</h4>
							<input type="email" name="Email" placeholder="Email..." required="">
							<h4>連絡電話*</h4>
							<input type="text" name="Phone" placeholder="Phone..." required="">
							<h4>內容*</h4>
							<textarea placeholder="Message..." name="Message"></textarea>
							<input type="submit" value="傳送訊息">
						</form>
						<div class="agile-map">
							<iframe width='100%' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=947 台灣屏東縣滿州鄉屏東縣滿州鄉茶山路457之10號&z=16&output=embed&t='></iframe>
						</div>
					</div>
					<div class="col-md-5 agileits_mail_grid_right">

						<div class="left-agileits">
							<h3>聯絡資訊</h3>
								<ul>
									<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>947 台灣屏東縣滿州鄉屏東縣滿州鄉茶山路457之10號</li>
									<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:bbsurf2007@yahoo.com.tw">bbsurf2007@yahoo.com.tw</a></li>
									<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
									<li><i class="fa fa-taxi" aria-hidden="true"></i></li>
									<li><i class="fa fa-motorcycle" aria-hidden="true"></i></li>
									<li><i class="fa fa-ship" aria-hidden="true"></i></li>
									<li><i class="fa fa-car" aria-hidden="true"></i></li>
									
								</ul>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>-->
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