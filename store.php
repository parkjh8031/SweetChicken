<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>pagination example</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
	
	<style>
		form {
			width: 500px;
		}
		table {
			border-collapse:collapse;
			margin-bottom: 10px;
		}
		th, td {
			padding: 3px 10px;
		}
		.off-screen {
			display: none;
		}
		#nav {
			width: 1200px;
			text-align: center;
		}
		#nav a {
			display: inline-block;
			padding: 3px 5px;
			margin-right: 10px;
			font-family:Tahoma;
			background: #ccc;
			color: #000;
			text-decoration: none;
		}
		#nav a.active {
			background: #333;
			color: #fff;
		}
	</style>

	<style>
		.listmainimg {position:relative; width:150px; cursor:pointer;}
		.zoomimglayer {position:absolute; display:table; top:25px; left:149px; width:1px; z-index:70; opacity:0; overflow:hidden; padding:0; border:2px solid #fff; border-radius:10px; box-sizing:border-box; box-shadow:0 0 3px rgba(0,0,0,.5); transition:all .2s ease; -webkit-transition:all .2s ease;}
		.listmainimg:hover .zoomimglayer { top:-300px; left:140px; width:750px; opacity:1.0;}
	</style>
</head>
<body>

<div>
    <section>
        <table id="products" border="1">
			<caption>
				<form action="" id="setRows">
				</form>
			</caption>

			<tbody>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
				<tr>
					<td align="center" valign="top" style="width:170px; padding:25px 0">
                        <div class="listmainimg">
							<div class="zoomimglayer">
								<img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
							</div>
							<div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
								<img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
							</div>
						</div>
                    </td>
                    <td valign="top" style="line-height:100%; padding:25px;">
                        <div style="width:190px; float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:22px; color:#000; font-weight:600; padding:30px 20px 0 0;">
                            00점
                        </div>
                        <div style="width:480px; text-align:left; float:left; font-family:'Nanum Gothic','나눔고딕'; font-size:14px; color:#666; padding:5px 0 0 0;">
                            주소. 서울시<br>
                            전화. 02-000-0000<br>
                            평수. 00평<br>
                        </div>
                        <div style="float:left; width:160px; margin-top:30px;">	
                        </div>
                        <a href="http://87chicken.com" target="_blank" style="text-decoration:none;">
                            <div style="float:left; padding:25px 0 0 0;">
                                <div style="float:left;">
                                </div>
                                <div style="float:left; font-family:'NanumSquare','Nanum Gothic','나눔고딕'; font-size:17px; color:#000; font-weight:600; padding:4px 0 0 10px;">
                                    Map View
                                </div>
                            </div
                        ></a>
                    </td>
				</tr>
			</tbody>

		</table>
    </section>
</div>

</body>
</html>

<script>
  var $setRows = $('#setRows');

	$setRows.submit(function (e) {
		e.preventDefault();
		var rowPerPage = 5 * 1;// 1 을  곱하여 문자열을 숫자형로 변환

	//      console.log(typeof rowPerPage);

		var zeroWarning = 'Sorry, but we cat\'t display "0" rows page. + \nPlease try again.'
		if (!rowPerPage) {
			alert(zeroWarning);
			return;
		}
		$('#nav').remove();
		var $products = $('#products');

		$products.after('<div id="nav">');


		var $tr = $($products).find('tbody tr');
		var rowTotals = $tr.length;
	//  console.log(rowTotals);

		var pageTotal = Math.ceil(rowTotals/ rowPerPage);
		var i = 0;

		for (; i < pageTotal; i++) {
			$('<a href="#"></a>')
					.attr('rel', i)
					.html(i + 1)
					.appendTo('#nav');
		}

		$tr.addClass('off-screen')
				.slice(0, rowPerPage)
				.removeClass('off-screen');

		var $pagingLink = $('#nav a');
		$pagingLink.on('click', function (evt) {
			evt.preventDefault();
			var $this = $(this);
			if ($this.hasClass('active')) {
				return;
			}
			$pagingLink.removeClass('active');
			$this.addClass('active');

			// 0 => 0(0*4), 4(0*4+4)
			// 1 => 4(1*4), 8(1*4+4)
			// 2 => 8(2*4), 12(2*4+4)
			// 시작 행 = 페이지 번호 * 페이지당 행수
			// 끝 행 = 시작 행 + 페이지당 행수

			var currPage = $this.attr('rel');
			var startItem = currPage * rowPerPage;
			var endItem = startItem + rowPerPage;

			$tr.css('opacity', '0.0')
					.addClass('off-screen')
					.slice(startItem, endItem)
					.removeClass('off-screen')
					.animate({opacity: 1}, 300);

		});

		$pagingLink.filter(':first').addClass('active');

	});


	$setRows.submit();
</script>