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
<!-- about -->
<!-- courses -->
	<div class="courses">
		<div class="container"> 
			
				<div class="w3l-heading">
					<h2 class="w3ls_head">關於阿水</h2>
				</div>
				
			
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>無悔的Surfer，衝浪阿水</h3>
							<p>現年45歲的「阿水」吳家誌，是屏東佳樂水的衝浪教練，全心致力推廣水上活動文化20年，從「浪」檢視並學習人生態度。因為熱愛衝浪成癡、好玩水，恆春的朋友總喚他「啊水～啊水～！」就這樣，「阿水」之名，跟了吳家誌20年。</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>生活與工作皆是衝浪</h3>
							<p>屏東內埔出生、高雄長大。退伍那年，阿水與同事前往恆春玩衝浪，便深深愛上海浪帶來的速度感、以及在海中解放的自由。相較於許多運動，訓練的是人類生理上的肌耐力，對於從小活潑好動、性格急躁的阿水來說，唯獨衝浪，能訓練出「一種堅持、不容易放棄」的本質。</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>"沒有不能衝的浪 ，只有不想下水的人"</h3>
							<p>為了讓衝浪者每次划出海都能更快進入狀況，做有效的水況評估，阿水透過多年的衝浪經驗，建立了一個屬於自己的衝浪模式。「衝浪最快樂的，不是搶先站在浪板上！」在衝浪的領域裡，最重要的先是環境評估、身體評估、以及對裝備的了解，再來則是練習划水、等待越過一道道浪。</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 agileits_courses_right">
					<img src="images/gallery/g2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //courses -->

<!-- stats-bottom-banner -->
	<div class="stats-bottom-banner">
		<div class="container">
			<h3>他是等浪匠人，他是無悔的Surfer，他是<span>阿水</span>，常下最權威的指令：「注意安全！」</h3>
			<p>「衝浪能夠讓人的心變寬，你會發現你需要的東西變少，<br>每天在水裡也改變了原有的急躁與強悍的個性！ 慢慢學習大自然的協調與節奏。」</p>
		</div>
	</div>
<!-- //stats-bottom-banner -->	

<!-- //about -->
<?php include('footer.html');?>


	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- js --> 
	<script src="js/bars.js"></script>
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
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
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