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
		/*mobile*/
		@media (max-width: 552px) {
			.header-pc {
				display: none;
			}
			.swing {
				display: none;
			}
			.interior-background {
				z-index: 2;
			}
			.section {
				padding-top: 10%;
			}
			.section01 {
				width: 100%;
			}
			.section02 {
				width: 100%;
			}
			.fotorama__nav-wrap {
				display: none;
			}
			.section02_menu_bg {
				width: 100%;
			}
			.menu_title {
				width: 80%;
				left: 18%;
				top: 3%;
			}
			.menu-slide {
				bottom: 1%;
				width: 70%;
				left: 50%;
				margin-left: -35%;
			}
			.menu_comment1 {
				top: 13%;
				left: 23%;
				font-style: italic;
				font-size: 1em;
			}
			.pointimg {
				position: absolute;
				top: 20%;
				width: 20%;
				height: 12%;
				border-radius: 100%;
				overflow: hidden;
				box-shadow: 0 5px 15px 5px rgba(0,0,0,.3);
				left: 35%;
				margin-left: -10%;
			}
			.pimg01 {
				top: 20%;
			}
			.pimg02 {
				top: 33%;
			}
			.pimg03 {
				top: 46%;
			}
			.pimg04 {
				top: 59%;
			}
			.circle_img {
				width: 100%;
			}
			.ribon_text_form {
				position: absolute;
				top: 0px;
			}
			.ribon_des_text {
				
			}
			.text_form01 {
				width: 22%;
				top: 29.5%;
				left: 24%;
			}
			.ribon_text_bg {
				width: 100%;
			}
			.text_bg_01 {
				width: 100%;
			}
			.ribon_text {
				position: absolute;
				top: -4%;
				left: 12%;
				width: 75%;
			}
			.ribon_text_01 {
				width: 100%;
			}
			
			.text_form02 {
				width: 22%;
				top: 42.5%;
				left: 24%;
			}
			.text_bg_02 {
				width: 100%;
			}
			.ribon_text_02 {
				width: 100%;
			}

			.text_form03 {
				width: 22%;
				top: 55.5%;
				left: 24%;
			}
			.text_bg_03 {
				width: 100%;
			}
			.ribon_text_03 {
				width: 100%;
			}

			.text_form04 {
				width: 22%;
				top: 68.5%;
				left: 24%;
			}
			.text_bg_04 {
				width: 100%;
			}
			.ribon_text_04 {
				width: 100%;
			}
			.opacity_background {
				width: 100%;
				height: 200px;
				opacity: 0.3;
			}
			.interior-slide {
				position: absolute;
				top: 5%;
				width: 80%;
				left: 50%;
				margin-left: -40%;
				background: white;
			}
			.ribon_des_text {
				position: absolute;
				font-size: 0.7em;
				bottom: 130%;
				left: 65%;
				width: 200%;
				color: white;
				
			}
			.interior_background {
				position: relative;
				top: 80%;
				width: 100%;
			}

			.interior-background {
				position: relative;
				top: 45%;
				width: 100%;
			}
			
		}
		/*pc*/
		@media (min-width: 553px) {
			.header-mobile {
				display: none;
			}
			.section {
				padding-top: 157px;
			}
			.section01 {
				width: 1920px;
				height: 900px;
			}
			.section02_menu_bg {
				width: 1920px;
			}
			.menu_title {
				top: 70px;
				left: 550px;
			}
			.menu-slide {
				bottom: 100px;
				left: 415px;
				width: 1100px;
			}
			.menu_comment1 {
				font-style: italic; 
				font-size: 37px;
				font-weight: 600;
				color: white;
				top: 250px;
				left: 685px;
			}
			.menu-bottom-text {
				font-size: 60px;
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
			.pimg01 {
				left: 333px;
			}
			.pimg02 {
				left: 665px;
			}
			.pimg03 {
				left: 990px;
			}
			.pimg04 {
				left: 1323px;
			}
			.text_form01 {
				left: 308px;
			}
			.text_form02 {
				left: 640px;
			}
			.text_form03 {
				left: 965px;
			}
			.text_form04 {
				left: 1298px;
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
			.opacity_background {
				width: 1920px;
				height: 800px;
			}
			.interior-slide {
				position: absolute;
				top: 50px;
				left: 415px;
				width: 1100px;
				background: white;
			}
			.section04 {
				 height: 200px;
				 width: 1920px;
				 background: white;
			}
			.ribon_des_text {
				font-size: 24px;
				font-weight: 600;
				color: white;
			}
			.interior_background {
				width: 1920px;
				height: 800px;
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
	<div class="section">
		
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
			<div style="position: relative;">
				<img src="./skin/img/interior_background.png" class="interior_background">
			</div>
		</div>

		<div id="section01" class="section01 fotorama" data-autoplay="1500" data-nav="dots" data-loop="true" data-arrows="false" style="position: relative; background: white;">
			<img src="./skin/img/main_images01.jpg">
			<img src="./skin/img/main_images02.jpg">
			<img src="./skin/img/main_images03.jpg">
			<img src="./skin/img/main_images04.jpg">
			<img src="./skin/img/main_images05.jpg">
		</div>

		

		<div class="section02" id="section02" style="position: relative;">
			<div>
				<img src="./skin/img/menu_bg.jpg" class="section02_menu_bg" style="z-index: 1;">
			</div>
			<div class="menu_title" style="position: absolute;">
				<img src="./skin/img/menu_title.png" class="menu_title" border="0">
			</div>
			<!--menu text-->
			<div class="menu_comment1" style="position: absolute; z-index: 1;">
				<span style="color: yellow;">배달! 포장! 단체주문! 홀</span>
				<span style="color: white;">매출까지!</span>
				<br>
				<span class="menu-bottom-text" style="color: red;">4중 주문 폭주 시스템!</span>
			</div>
			
			<!--리본이미지01-->
			<div class="pointimg pimg01">
				<img src="./skin/img/menu_respectimg01.jpg" class="circle_img" border="0">
			</div>
			<!--리본텍스트01-->
			<div class="ribon_text_form text_form01">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" class="text_bg_01" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext01.png" class="ribon_text_01" border="0">
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
			<div class="pointimg pimg02">
				<img src="./skin/img/menu_respectimg01.jpg" class="circle_img" border="0">
			</div>
			<!--리본텍스트02-->
			<div class="ribon_text_form text_form02">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" class="text_bg_02" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext02.png" class="ribon_text_02" border="0">
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
			<div class="pointimg pimg03">
				<img src="./skin/img/menu_respectimg01.jpg" class="circle_img" border="0">
			</div>
			<!--리본텍스트03-->
			<div class="ribon_text_form text_form03">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" class="text_bg_03" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext03.png" class="ribon_text_03" border="0">
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
			<div class="pointimg pimg04">
				<img src="./skin/img/menu_respectimg04.jpg" class="circle_img" border="0">
			</div>
			<!--리본텍스트04-->
			<div class="ribon_text_form text_form04">
				<div class="ribon_text_bg">
					<img src="./skin/img/menu_respect_ribon.png" class="text_bg_04" border="0">
				</div>
				<div class="ribon_text">
					<img src="./skin/img/menu_respect_ribontext04.png" class="ribon_text_04" border="0">
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
			<div class="menu-slide fotorama" data-autoplay="2000" data-nav="thumbs" data-loop="true" style="position: absolute; background: white;">
				<img src="./skin/img/menu01.png">
				<img src="./skin/img/menu02.png">
				<img src="./skin/img/menu03.png">
				<img src="./skin/img/menu04.png">
				<img src="./skin/img/menu05.png">
			</div>
			
			
		</div>

		<div id="section03" style="position: relative; z-index: 1; margin-top: -4px;">
			<div class="opacity_background" style="background: blue; opacity: 30%;"></div>
			<div class="interior-slide fotorama" data-autoplay="2000" data-nav="thumbs" data-loop="true" style="">
				<img src="./skin/img/menu01.png">
				<img src="./skin/img/menu02.png">
				<img src="./skin/img/menu03.png">
				<img src="./skin/img/menu04.png">
				<img src="./skin/img/menu05.png">
			</div>
		</div>

		<div class="section04" id="section04" style="position: relative; z-index: 2; background: white;">
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

	console.log(screen.width);

	$(function() {
		$( "document" ).ready(function() {
			if(screen.width >= 553) {

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

			} else {
				/*
				setTimeout(function() {
					$(".menu_title").animate({
						width:'75%'
						}, 150
					);
				}, 200);

				setTimeout(function() {
					$(".menu_title").animate({
						width:'80%'
						}, 150
					);
				}, 400);

				setTimeout(function() {
					$(".menu_title").animate({
						width:'75%'
						}, 150
					);
				}, 600);

				setTimeout(function() {
					$(".menu_title").animate({
						width:'80%'
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
				*/
			}
		});
		setTimeout(arguments.callee, 2500);
	});
	
	/*
	$(window).scroll(function () { 
		var scrollValue = $(document).scrollTop(); 
		console.log(scrollValue);
	});
	*/

	if(screen.width < 553) {
		var iheight = screen.height * 0.75 + 'px';

		$(".section02_menu_bg").css("height", iheight);

		var iheight = screen.height * 0.25 + 'px';
		$(".opacity_background").css("height", iheight);
	}

</script>