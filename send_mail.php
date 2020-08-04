<?php
	$mailTo		=	"hyu01010@naver.com";
	// 받는사람 메일 주소;

	$mailFrom	=	"hyu01010@naver.com";	
	// 보내는사람 메일주소 

	$name = $_POST['name'] ;
	$mailSubject = "문의 드립니다.";
	$mailContent = '보낸사람 :'.$_POST['name'].'<br>'
	.'전화번호:'.$_POST['phone'].'<br>'
	.'Email : '.$_POST['email'].'<br>'
	.'홈페이지설명 :'.$_POST['content'];

	$mailHeader = "From: $mailFrom\r\n";
	$mailHeader .= "MIME-Version: 1.0\r\n";
	$mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";

	$mailResult = mail ($mailTo, $mailSubject, $mailContent, $mailHeader, '-f'.$mailFrom);

	if (true == $mailResult) {
?>
	<script>
		alert('메일이 발송되었습니다.');
		window.history.back();
	</script>
<?php
	}
	else {
?>
	<script>
		alert('메일 발송에 실패했습니다.');
	</script>
<?php
	}
?>