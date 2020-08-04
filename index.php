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
	<link href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" rel="stylesheet" type="text/css">


	<link  href="./plugin/fotorama/fotorama.css" rel="stylesheet">
	<script src="./plugin/fotorama/fotorama.js"></script>

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
			position: fixed;
			right: 10px;
			top: 200px;
		}

		.swing:before {
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

		.fotorama__arr fotorama__arr--prev fotorama__arr--disabled {
			
		}

		.fotorama__arr fotorama__arr--prev fotorama__arr--disabled {
			display: none;
		}

		.fotorama__nav--dots {
			bottom: 190px;
		}

		.fotorama__dot {
			width: 12px;
			height: 12px;
			border-radius: 12px;
		}

		.fotorama__nav__frame.fotorama__active .fotorama__dot {
			width: 13px;
			height: 13px;
			border: none;
			background: #7f7f7f;

		}

		.fotorama__nav fotorama__nav--dots {
			background: red;
		}

		.fotorama__nav--dots .fotorama__nav__frame {
			width: 26px;
		}

		/*메뉴*/
		.menu_comment1 {
			
			font-style: italic; 
			font-size: 37px;
			font-weight: 600;
			color: white;
		}

		.pointimg {
			position: absolute;
			top: 390px;
			width: 246px;
			height: 246px;
			border-radius: 100%;
			overflow: hidden;
			box-shadow: 0 5px 15px 5px rgba(0,0,0,.3);
		}

		.ribon_text_form {
			position: absolute;
			top: 572px;
		}

		.ribon_text {
			position: absolute;
			top: 8px;
			left: 35px;
		}

		.ribon_des_text {
			font-size: 24px;
			font-weight: 600;
			color: white;
		}

		.interior-background {
			position: fixed;
			z-index: 0;
		}

	</style>

</head>

<body>
	<!--PC version header-->
    <div class="header-pc" style="position: relative; z-index: 3;">
		<center>
			<header>
				<!--별 테두리-->
				<img src="./skin/img/navi_star.gif" style="position: absolute; width: 1246px; left: 337px; top: 10px;">

				<!--87닭강정-->
				<a href="#section01" class="tab scroll scale">
					<img src="./skin/img/navibtn01.png" class="menu-pc" style="position: absolute; left: 440px;">
				</a>
				<!--메뉴-->
				<a href="#section02" class="tab scroll scale">
					<img src="./skin/img/navibtn02.png" class="menu-pc" style="position: absolute; left: 565px;">
				</a>
				<!--인테리어-->
				<a href="#section03" class="tab scroll scale">
					<img src="./skin/img/navibtn03.png" class="menu-pc" style="position: absolute; left: 640px;">
				</a>
				<!--프랜차이즈-->
				<a href="#section04" class="tab scroll scale">
					<img src="./skin/img/navibtn04.png" class="menu-pc" style="position: absolute; left: 1190px;">
				</a>
				<!--매장안내-->
				<a href="#section05" class="tab scroll scale">
					<img src="./skin/img/navibtn05.png" class="menu-pc" style="position: absolute; left: 1315px;">
				</a>
				<!--고객의소리-->
				<a href="#section06" class="tab scroll scale">
					<img src="./skin/img/navibtn06.png" class="menu-pc" style="position: absolute; left: 1420px;">
				</a>
				<!--로고-->
				<a href="#section01" class="tab scroll">
					<img src="./skin/img/logo.png" style="position: absolute; left: 771px; top: 50px;">
				</a>
				<!--배경-->
				<img src="./skin/img/top_bg.png" style="width: 1920px;">
			</header>
		</center>
	</div>
	<div style="padding-top: 157px;">
		
		<!--배너-->
		<div class="swing" style="z-index: 2;">
			<div style="position: relative;">
				<img src="./skin/img/scroll_bg.png" >
				<div style="position: absolute; top: 172px; left: 42px;">
					<!--배너 gif-->
					<img src="./skin/img/scroll_star.gif" style="position: absolute; bottom: 187px; right: 2px;">
					<!--인스타그램-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 2px;">
						<img src="./skin/img/scroll_snsicon_instagram.png">
					</a>
					<!--블로그-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 8px;">
						<img src="./skin/img/scroll_snsicon_blog.png">
					</a>
					<!--페이스북-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; left: 13px;">
						<img src="./skin/img/scroll_snsicon_facebook.png">
					</a>
					<!--창업문의-->
					<a href="http://www.naver.com" target="_blank" style="position: relative; top: 15px;">
						<img src="./skin/img/scroll_customer.png">
					</a>
					<!--빠른상담-->
					<a href="#section07" class="scroll" target="_blank" style="position: relative; left: 2px; top: 30px;">
						<img src="./skin/img/scroll_inquiry.png">
					</a>
				</div>
			</div>
		</div>

		<div class="interior-background">
			<div style="position: relative; width: 1920px; height: 800px;">
				<img src="./skin/img/interior_background.png" style="width: 1920px; height: 800px;" >
			</div>
		</div>

		<div id="section01" class="fotorama" data-autoplay="1500" data-nav="dots" data-loop="true" data-arrows="false" style="position: relative; width: 1920px; height: 900px; background: white;">
			<img src="./skin/img/main_images01.jpg">
			<img src="./skin/img/main_images02.jpg">
			<img src="./skin/img/main_images03.jpg">
			<img src="./skin/img/main_images04.jpg">
			<img src="./skin/img/main_images05.jpg">
		</div>

		

		<div id="section02" style="position: relative;">
			<div>
				<img src="./skin/img/menu_bg.jpg" style="width: 1920px; z-index: 1;">
			</div>
			<div style="position: absolute; top: 70px; left: 550px;">
				<img src="./skin/img/menu_title.png" class="menu_title" border="0">
			</div>
			<!--menu text-->
			<div class="menu_comment1" style="position: absolute; top: 250px; left: 685px; z-index: 1;">
				<span style="color: yellow;">배달! 포장! 단체주문! 홀</span>
				매출까지!
				<br>
				<span style="color: red; font-size: 60px;">4중 주문 폭주 시스템!</span>
			</div>
			
			<!--리본이미지01-->
			<div class="pointimg" style="left: 333px;">
				<img src="./skin/img/menu_respectimg01.jpg" border="0">
			</div>
			<!--리본텍스트01-->
			<div class="ribon_text_form" style="left: 308px;">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext01.png" border="0">
				</div>
				
				<center>
					<div class="ribon_des_text">
						<span>오리지널<span>
						<br>
						<span>전통 강정 제조비법</span>
					<div>
				</center>
			</div>
			
			<!--리본이미지02-->
			<div class="pointimg" style="left: 665px;">
				<img src="./skin/img/menu_respectimg01.jpg" border="0">
			</div>
			<!--리본텍스트02-->
			<div class="ribon_text_form" style="left: 640px;">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext02.png" border="0">
				</div>

				<center>
					<div class="ribon_des_text">
						<span>배달 + 포장 + 단체주문<span>
						<br>
						<span>+홀 매출</span>
					<div>
				</center>
			</div>
			
			<!--리본이미지03-->
			<div class="pointimg" style="left: 990px;">
				<img src="./skin/img/menu_respectimg01.jpg" border="0">
			</div>
			<!--리본텍스트03-->
			<div class="ribon_text_form" style="left: 965px;">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext03.png" border="0">
				</div>

				<center>
					<div class="ribon_des_text">
						<span>누구나 쉽게<span>
						<br>
						<span>조리 가능</span>
					<div>
				</center>
			</div>
			
			<!--리본이미지04-->
			<div class="pointimg" style="left: 1323px;">
				<img src="./skin/img/menu_respectimg01.jpg" border="0">
			</div>
			<!--리본텍스트04-->
			<div class="ribon_text_form" style="left: 1298px;">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext04.png" border="0">
				</div>

				<center>
					<div class="ribon_des_text">
						<span>365일 안정적인 매출과<span>
						<br>
						<span>수익창출</span>
					<div>
				</center>
			</div>
			<!--메뉴 슬라이드-->
			<div class="fotorama" data-autoplay="2000" data-nav="thumbs" style="position: absolute; bottom: 100px; left: 415px; width: 1100px; background: white;">
				<img src="./skin/img/menu01.png">
				<img src="./skin/img/menu02.png">
				<img src="./skin/img/menu03.png">
				<img src="./skin/img/menu04.png">
				<img src="./skin/img/menu05.png">
			</div>
			
			
		</div>

		<div id="section03" style="position: relative; z-index: 1; margin-top: -4px; height: 800px; width: 1920px;">
			<div style="width: 1920px; height: 800px; background: blue; opacity: 30%;"></div>
			<div class="fotorama" data-autoplay="2000" data-nav="thumbs" style="position: absolute; top: 50px; left: 415px; width: 1100px; background: white;">
				<img src="./skin/img/menu01.png">
				<img src="./skin/img/menu02.png">
				<img src="./skin/img/menu03.png">
				<img src="./skin/img/menu04.png">
				<img src="./skin/img/menu05.png">
			</div>
		</div>

		<div id="section04" style="position: relative; z-index: 2; height: 200px; width: 1920px; background: white;;">
			 <form method="post" action="./send_mail.php">
					
				  <label for="name">이름</label>
				  <input style="border:#000 solid thin" type="text" id="name" name="name" /><br />
				  <!--style="border:#000 solid thin": 선색으로 가는 검은색을 적용-->
				  
				  <label for="phone">전화번호</label>
				  <input style="border:#000000 solid thin"  type="text" id="phone" name="phone" /><br />
				  
				  <label for="email">이메일</label>
				  <input style="border:#000 solid thin"  type="email" id="email" name="email" /><br />
				  
				  <label for="content">문의 내용</label>
				  <br />
				  <textarea name="content" cols="50" rows="5"  id="content" style="border:#000 solid thin" ></textarea>

				  <br>
				  
				  <input type="submit" value="폼페일보내기" name="submit" />
					
			</form>
		</div>
	</div>

	<div class="header-mobile">
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

	$(function() {
		$( "document" ).ready(function() {

			setTimeout(function() {
				$(".menu_title").animate({
					width:'785'
					}, 150 
				);
			}, 200);

			setTimeout(function() {
				$(".menu_title").animate({
					width:'845'
					}, 150
				);
			}, 400);

			setTimeout(function() {
				$(".menu_title").animate({
					width:'785'
					}, 150
				);
			}, 600);

			setTimeout(function() {
				$(".menu_title").animate({
					width:'845'
					}, 150
				);
			}, 800);
				
			setTimeout(function() {
				$(".menu_title").animate({
					opacity:0
					}, 100
				);
			}, 900);

			setTimeout(function() {
				$(".menu_title").animate({
					opacity:1
					}, 100
				);
			}, 1000);

			setTimeout(function() {
				$(".menu_title").animate({
					opacity:0
					}, 100
				);
			}, 1100);

			setTimeout(function() {
				$(".menu_title").animate({
					opacity:1}, 100
				);
			}, 1200);
		});
		setTimeout(arguments.callee, 2500);
	});

	$(window).scroll(function () { 
		var scrollValue = $(document).scrollTop(); 
		console.log(scrollValue);
	});

</script>