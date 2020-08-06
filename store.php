<!DOCTYPE html>
<html lang="kr">
<div style="display:table; width:100%; min-width:1200px; text-align:center; border:0; padding:30px 0 180px 0">
		<div style="position:relative; width:1200px; padding:50px 0; margin:0 auto; text-align:left;">

         <!-- ■ 보드 - 본문글 삽입됨 -->
         
         <!-- ■ 보드 - 글목록 삽입됨 -->
         



<!-- ★ 글목록 테이블 CSS -->
<style type="text/css">

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
    width: 500px;
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
	A.subjectColor:link		{text-decoration:none; color:#000000;} /*글제목: 읽지 않은 글 */
	A.subjectColor:visited	{text-decoration:none; color:#000000;} /*글제목: 읽은 글 */
	A.subjectColor:hover	{text-decoration:none; color:#bb0000;} /*글제목: 마우스OVER */

	.mainIndexTable td{} /*글목록 전체 <td>*/
	.head_td			{height:30px; /*color:#888888; font:normal 11px 돋움;*/ color:#555555; font-size:14px; font-family:"나눔고딕"; font-weight:600; border-width:0; background-image:url(./skin_board/a_standard/b_img/attrib/th_bg3.gif);}
	.head_td img	{border-width:0;}	.head_td a:link,a:visited{color:#333333;}
	.list_default		{padding-left:2px;}
	.list_check		{text-align:center; width:20px;}
	.list_no				{text-align:center; font-size:11px; font-family:Tahoma,돋움;}
	.list_subject		{width:; word-break:break-all; padding-left:2px;}
	.font_repcnt		{color:#278BE9; font-size:7pt; font-family:Tahoma,돋움;}
	.list_name			{text-align:center;}
	.list_date			{text-align:center; font-size:11px; font-family:Tahoma,돋움; width:70; padding:0 4 0 2;}
	.list_hit				{text-align:center; font-size:11px; font-family:Tahoma,돋움; color:#555555; width:30;}
	.list_category	{text-align:center; letter-spacing:-1; padding:0 2 0 1;}
	.list_other		{text-align:center;}
	.list_wr_add		{text-align:center;}
	.list_hr_tr			{display:;}
	.list_hr_line		{height:1; background-color:#dadada; padding:0; }
	.list_photo		{background-color:#ffffff; border:0px solid #f0f0f0; cursor:pointer; width:150px;;}
	.list_thumbnail	{width:150px;; min-height:90px; max-height:130px;}
	.font8pt			{font-size:11px; font-family:돋움; color:#666666;}
	.page_number	{color:#000; font-size:14px;  font-family:'Nanum Gothic','나눔고딕',Tahoma,돋움; padding:0 2 0 3; margin:0 2 0 2;} /*글목록 페이지 번호*/
	#opennumber{border-bottom:2px solid #F0C2A4;}
	#mainbutton_td img{margin-left:0px;}
</style>
<div id="mainIndexDiv" style="width:100%; padding:0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
            <tr>
				<td valign="bottom" style="padding:0 0 1 15;">
			    </td>
                <td align="right">
                </td>
			</tr>
		</tbody>
    </table>

		<!-- ★ 글목록 Main -->
		<table id="mainIndexTable" cellpadding="0" cellspacing="0" width="100%" border="0">
            <!--글 시작-->
	        <tbody id="item1">

                <tr onmouseover="this.style.backgroundColor=''" onmouseout="this.style.backgroundColor=''" height="28">
                    <td align="center" valign="top" style="width:170px; padding:25px 0">
                        <table cellpadding="0" cellspacing="0" border="0"
                            ><tbody>
                                <tr>
                                    <td align="center">
                                        <div class="listmainimg">
                                            <style>
                                                .listmainimg {position:relative; width:150px; cursor:pointer;}
                                                .zoomimglayer {position:absolute; display:table; top:25px; left:149px; width:1px; z-index:70; opacity:0; overflow:hidden; padding:0; border:2px solid #fff; border-radius:10px; box-sizing:border-box; box-shadow:0 0 3px rgba(0,0,0,.5); transition:all .2s ease; -webkit-transition:all .2s ease;}
                                                .listmainimg:hover .zoomimglayer { top:-300px; left:140px; width:750px; opacity:1.0;}
                                            </style>
                                            <div class="zoomimglayer">
                                                <img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
                                            </div>
                                            <div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
                                                <img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td valign="top" style="line-height:150%; padding:25px;">
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
            <!--글 끝-->

            <!--글 시작-->
            <tbody id="item2">
                    <tr onmouseover="this.style.backgroundColor=''" onmouseout="this.style.backgroundColor=''" height="28">
                        <td align="center" valign="top" style="width:170px; padding:25px 0">
                            <table cellpadding="0" cellspacing="0" border="0"
                                ><tbody>
                                    <tr>
                                        <td align="center">
                                            <div class="listmainimg">
                                                <style>
                                                    .listmainimg {position:relative; width:150px; cursor:pointer;}
                                                    .zoomimglayer {position:absolute; display:table; top:25px; left:149px; width:1px; z-index:70; opacity:0; overflow:hidden; padding:0; border:2px solid #fff; border-radius:10px; box-sizing:border-box; box-shadow:0 0 3px rgba(0,0,0,.5); transition:all .2s ease; -webkit-transition:all .2s ease;}
                                                    .listmainimg:hover .zoomimglayer { top:-300px; left:140px; width:750px; opacity:1.0;}
                                                </style>
                                                <div class="zoomimglayer">
                                                    <img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
                                                </div>
                                                <div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
                                                    <img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td valign="top" style="line-height:150%; padding:25px;">
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
            <!--글 끝-->
        </table>   

<table id="products" class="mainIndexTable" border="1">
    <caption>
        <form action="" id="setRows">
            <p>
            </p>
        </form>
    </caption>
    <tbody>
        <tr>
<tr onmouseover="this.style.backgroundColor=''" onmouseout="this.style.backgroundColor=''" height="28">
                <td align="center" valign="top" style="width:170px; padding:25px 0">
                    <table cellpadding="0" cellspacing="0" border="0"            >
                            <tr>
                                <td align="center">
                                    <div class="listmainimg">
                                        <style>
                                            .listmainimg {position:relative; width:150px; cursor:pointer;}
                                            .zoomimglayer {position:absolute; display:table; top:25px; left:149px; width:1px; z-index:70; opacity:0; overflow:hidden; padding:0; border:2px solid #fff; border-radius:10px; box-sizing:border-box; box-shadow:0 0 3px rgba(0,0,0,.5); transition:all .2s ease; -webkit-transition:all .2s ease;}
                                            .listmainimg:hover .zoomimglayer { top:-300px; left:140px; width:750px; opacity:1.0;}
                                        </style>
                                        <div class="zoomimglayer">
                                            <img src=".\skin\img\menu_respectimg01.jpg" width="100%" border="0" style="max-height:600px; border-radius:8px;">		
                                        </div>
                                        <div style="width:150px; height:90px; overflow:hidden; border-radius:10px;">
                                            <img src=".\skin\img\menu_respectimg01.jpg" class="list_thumbnail" border="0">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    </table>
                </td>
                <td valign="top" style="line-height:150%; padding:25px;">
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
        </tr>
        <tr>
            <td>2</td>
            <td>life</td>
            <td>dish</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Clothing</td>
            <td>shocks</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Clothing</td>
            <td>sports</td>
        </tr>
        <tr>
            <td>5</td>
            <td>shoes</td>
            <td>nike</td>
        </tr>
        <tr>
            <td>6</td>
            <td>shoes</td>
            <td>addidas</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Bags</td>
            <td>backpack</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Clothing</td>
            <td>Jacket</td>
        </tr>
        <tr>
            <td>9</td>
            <td>shoes</td>
            <td>bonie</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Clothing</td>
            <td>Jacket</td>
        </tr>
    </tbody>

</table>



<div>
    <section>
        <div id="data-container"></div>
        <div id="pagination"></div>
    </section>				
</div>	 







<!------------------------------  글목록 전체구성 끝 --------------------------------------------------------------------------------->
<span id="TnTindexListMany" style="display:none">10</span>		</div>
</div>
<script>
var $setRows = $('#setRows');

$setRows.submit(function (e) {
    e.preventDefault();
    var rowPerPage = 5;// 1 을  곱하여 문자열을 숫자형로 변환

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
</html>

