<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
		span {cursor:pointer; }
		.number{
			margin:100px 30%;
		}
		.minus, .plus{
			width:10px;
			height:10px;
			background:#f2f2f2;
			border-radius:4px;
			padding:3px 5px 3px 5px;
			border:1px solid #ddd;
		}
		.number input{
			height:24px;
			border:1px solid #ddd;
			border-radius:4px;
			padding:0 2px;
		}
	</style>
	<script type="text/javascript" >
		$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
	</script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste"
    ],
language_url : "js/tinymce/langs/ru.js",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<title>Добавить вопрос | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<style>
body {
font-family: 'PT Sans Narrow', sans-serif;
    background-image: url(../images/bg1.png);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:#464646;
}
@media only screen and (max-width: 767px) {
    body {
        background-image: url(../images/bg2.png);
    }
}
.ad{
        text-decoration:none
	display:inline-block;
	font-size:24px;
	background:#A7A7A7;
	opacity:0.7;
}
#brg{
border-radius:10px; background:background: rgba(255,255,255,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
}
.cob{
margin:1%;
color:black;
}
</style>
<script>
function changeStyleDiv(){
              document.getElementById('prt').style.width = '100%';
              document.getElementById('prt').style.height = '150%';
           }
</script>
</head>
<body>
<div align="center" >
<div class="ad">
Добавить: <a id="sde" href="">Вопрос</a> <a id="sde" href="">Статью</a> <a id="sde" href="">Решебник</a> <a id="sde" href="">Тест</a>
</div>
<br/>
<h1>Добавить вопрос</h1>
<div id="brg">
<form action="post.php" method="post" ENCTYPE="multipart/form-data">
<b>Предложите свой тест, и он будет реализован в интерактивной оболочке.</b><br/>
<input type="file" name="testfile"/><br/>
<input type="submit" value="Отправить" />
</form>
<br/>
Ваш тест должен быть представлен в формате текстового документа(word, pdf, txt) с ответами.
На основе теста, вам будут присвоены баллы в количестве от 10 до 100.
</div>
</div>
</div>
<br/>
<div align="center" id="brg">
<b>Тесты:</b><br/>
<hr/>
<a href='https://twoclub.ru/tests/test_geo.php'><div class='cob'><b>Тест по географии (35 вопросов), проверьте свои знания!</b></div></a><br/>
<hr/>
<a href='https://twoclub.ru/tests/test_math.php'><div class='cob'><b>Тест ЕГЭ Математика по роману "Двенадцать Стульев".</b></div></a>
<hr/>
<br/>
</div>
<br/>
<div id="brg">
<h2 style=" margin:3px; color:#4B4B4B; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; text-shadow:#D2D2D2 1px 1px 1px;"><a href="index.php" style="text-decoration:none; color:black;">Главная страница</a><div align="right" style="display:inline-block; width:65%;"></div>Клуб Двоечников</h2>
</div>
</div>
</body>
</html>