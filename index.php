<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김순례 닭강정</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugin/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="plugin/slick/slick-theme.css"/>
	<script type="text/javascript" src="plugin/slick/slick.min.js"></script>

	<style>
		@media (max-width: 600px) {
			.header-pc {
				display: none;
			}
		}
		@media (min-width: 600px) {
			.header-mobile {
				display: none;
			}
		}

		body {
			margin: 0;
			padding: 0;
			overflow-x: hidden; 
			overflow-y: auto;
		}

		header {
			position: fixed;
		}
		
		.menu-pc {
			top: 87px;
		}

		a { 
			text-decoration:none
		}
		
		/*우측 배너*/
		.swing {
			animation: swing ease-in-out 1s infinite alternate;
			transform-origin: center -20px;
			float:left;
			position: absolute;
			position: fixed;
			right: 10px;
			top: 200px;
		}

		.swing:before {
			position: absolute;
			width: 5px;
			height: 5px;
			top: -14px;
			left: 54%;
			z-index: 5;
			border-radius: 50% 50%;
			background: #000;
		}
		 
		@keyframes swing {
			0% { transform: rotate(1deg); }
			100% { transform: rotate(-1deg); }
		}
		
		/*탭메뉴 애니메이션*/
		.scale:hover img {
			-webkit-transform: scale(0.9);
			-moz-transform: scale(0.9);
			-o-transform: scale(0.5);	  
			-webkit-transition:.3s; 
			-moz-transition:.3s; 
			-o-transition:.3s; 
			-ms-transition:.3s;
		}

		/*롤링이미지*/
		.slick-dots {
			position: relative;
			bottom: 50px;
			color: white;
		}

		.slick-prev {
			left: 10px;
			z-index: 2;
		}

		.slick-next {
			right: 10px;
			z-index: 2;
		}
	</style>

</head>

<body>
	<!--PC version header-->
    <div class="header-pc" style="position: relative; z-index: 3;">
		<center>
			<header>
				<!--별 테두리-->
				<img src="./img/navi_star.gif" style="position: absolute; width: 1246px; left: 337px; top: 10px;">

				<!--87닭강정-->
				<a href="#section01" class="tab scroll scale">
					<img src="./img/navibtn01.png" class="menu-pc" style="position: absolute; left: 440px;">
				</a>
				<!--메뉴-->
				<a href="#section02" class="tab scroll scale">
					<img src="./img/navibtn02.png" class="menu-pc" style="position: absolute; left: 565px;">
				</a>
				<!--인테리어-->
				<a href="#section03" class="tab scroll scale">
					<img src="./img/navibtn03.png" class="menu-pc" style="position: absolute; left: 640px;">
				</a>
				<!--프랜차이즈-->
				<a href="#section04" class="tab scroll scale">
					<img src="./img/navibtn04.png" class="menu-pc" style="position: absolute; left: 1190px;">
				</a>
				<!--매장안내-->
				<a href="#section05" class="tab scroll scale">
					<img src="./img/navibtn05.png" class="menu-pc" style="position: absolute; left: 1315px;">
				</a>
				<!--고객의소리-->
				<a href="#section06" class="tab scroll scale">
					<img src="./img/navibtn06.png" class="menu-pc" style="position: absolute; left: 1420px;">
				</a>
				<!--로고-->
				<a href="#section-main" class="tab scroll">
					<img src="./img/logo.png" style="position: absolute; left: 771px; top: 50px;">
				</a>
				<!--배경-->
				<img src="./img/top_bg.png" style="width: 1920px;">
			</header>
		</center>
	</div>
	<div style="padding-top: 157px;">
		
		<!--배너-->
		<div class="swing" style="z-index: 2;">
			<div style="position: relative;">
				<img src="./img/scroll_bg.png" >
				<div style="position: absolute; top: 172px; left: 42px;">
					<!--배너 gif-->
					<img src="./img/scroll_star.gif" style="position: absolute; bottom: 187px; right: 2px;">
					<!--인스타그램-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 2px;">
						<img src="./img/scroll_snsicon_instagram.png">
					</a>
					<!--블로그-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 8px;">
						<img src="./img/scroll_snsicon_blog.png">
					</a>
					<!--페이스북-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 13px;">
						<img src="./img/scroll_snsicon_facebook.png">
					</a>
					<!--창업문의-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; top: 15px;">
						<img src="./img/scroll_customer.png">
					</a>
					<!--빠른상담-->
					<a href="#section07" class="scroll" target="_blank" style="position: relative; left: 2px; top: 30px;">
						<img src="./img/scroll_inquiry.png">
					</a>
				</div>
			</div>
		</div>

		<div id="section-main" style=" width: 100%; z-index: 1;">
			<div class="rolling">
				<!--롤링이미지01-->
				<div>
					<img src="./img/main_images01.jpg">
				</div>
				<!--롤링이미지02-->
				<div>
					<img src="./img/main_images02.jpg">
				</div>
				<!--롤링이미지03-->
				<div>
					<img src="./img/main_images03.jpg">
				</div>
				<!--롤링이미지04-->
				<div>
					<img src="./img/main_images04.jpg">
				</div>
				<!--롤링이미지05-->
				<div>
					<img src="./img/main_images05.jpg">
				</div>
			</div>
		</div>

		<div id="section01" style="height: 500px;">
			section01
		</div>

		<div id="section02" style="height: 500px;">
			section02
		</div>

		<div id="section03" style="height: 500px;">
			section03
		</div>

		<div id="section04" style="height: 500px;">
			section04
		</div>

		<div id="section05" style="height: 500px;">
			section05
		</div>

		<div id="section06" style="height: 500px;">
			section06
		</div>

		<div id="section07" style="height: 1000px;">
			section07
		</div>
	</div>

	<div class="header-mobile">
		ss
	</div>
</body>
</html>

<script>
	$(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top - 157}, 500);
		});
	});

	$('.rolling').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		pauseOnHover: false,
		fade: true,
		arrows: true,
		dots: true,
		autoplaySpeed: 2500,
	});
	
	handleMouseOver = (element, key) => {
		element.className = "content "+key;
		element.addEventListener("animationend", () => {
			element.className = "content";
		});
	}	
</script>