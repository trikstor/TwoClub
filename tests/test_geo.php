<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Тест по Географии, проверьте свои знания по предмету.Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Тест, География, страны, карты, баллы, ЕГЭ, картография, Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">

<title>Тест по Географии | Клуб Двоечников</title>
<script type="text/javascript">
  function startTimer() {
    var my_timer = document.getElementById("my_timer");
    var time = my_timer.innerHTML;
    var arr = time.split(":");
    var h = arr[0];
    var m = arr[1];
    var s = arr[2];
    if (s == 0) {
      if (m == 0) {
        if (h == 0) {
          alert("Время вышло");
          window.location.reload();
          return;
        }
        h--;
        m = 60;
        if (h < 10) h = "0" + h;
      }
      m--;
      if (m < 10) m = "0" + m;
      s = 59;
    }
    else s--;
    if (s < 10) s = "0" + s;
    document.getElementById("my_timer").innerHTML = h+":"+m+":"+s;
    setTimeout(startTimer, 1000);
  }
 function setCookie(name, value) {
    document.cookie = name + "=" + value;
  }

function answer() {
var count = 0;
var x = new Array(1,3,2,4,2,3,1,1,4,2,2,2,3,1,3,1,2,1,3,4,2,1,2,2,1,3,3,4,4);
for (var i = 0; i <= 28; i++){
 var n=i+1;
  var nameRadio = document.getElementsByName('Q'+n);
  for (var p = 0; p < nameRadio.length; p++) {
    if (nameRadio[p].type == 'radio' && nameRadio[p].checked) {
        var radio = nameRadio[p].value;       
    }
  }
 var elm = document.getElementById('T'+n);
	if(radio==x[i]){
elm.innerHTML = "<b style='background:green;'> Правильно </b>";
		count++;
	}else{
elm.innerHTML = "<b style='background:red;'> Неверно </b>";
	}
}
var a = new Array("делювий" ,"карст" ,"заложение", "зимбабве", "бокситы", "мавритания");
var b = new Array("делювий" ,"карст" ,"заложение", "зимбабве", "боксит", "мавритания");
for (i = 0; i <= 5; i++){
	var answ = a[i];
        var answ1 = b[i];
        var n = i+101;
	var k = document.getElementById(n).value;
        var elm = document.getElementById('T'+n);
	if(k.toLowerCase()==answ || k.toLowerCase()==answ1){
elm.innerHTML = "<b style='background:green;'> Правильно </b>";
		count++;
	}else{
elm.innerHTML = "<b style='background:red;'> Неверно </b>";
	}
}
if(count==35) s="ОТЛИЧНО";
if(count<35) s="ХОРОШО";
if(count<30) s="УДОВЛЕТВОРИТЕЛЬНО";
if (count<20) s="НЕУДОВЛЕТВОРИТЕЛЬНО";
setCookie("nok", count);
setCookie("s", s);
var value="Количество правильных ответов "+count+". Ваша оценка "+s+".";
document.getElementById('s1').innerHTML=value;
}
function showhide(obj){
    if(obj == 'none') return 'inline';
    else return 'none';
}
</script>

<body onload="startTimer()">
<html oncontextmenu="return false;">
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<br/>
<p><span id="my_timer" style=" float:left; margin-left:1%; color:green; font-size: 150%; font-weight: bold;">01:00:00</span></p><center><h2>Тест по Географии</h2></center><br/><br/>
&nbsp;&nbsp;&nbsp;<span style="color:#006699;text-decoration:underline;cursor:pointer;" onclick="document.getElementById('instruction').style.display = showhide(document.getElementById('instruction').style.display)">
Инструкция</span>
 <br/>
<div id="instruction" style="display: none; width: 100%;">
<ul>
<li>Выберите один из вариантов в каждом из 16 вопросов;</li>
<li>Нажмите на кнопку "Показать результат";</li>
<li>Скрипт не покажет результат, пока Вы не ответите на все вопросы;</li>
<li>Загляните в окно рядом с номером задания. Если ответ правильный, то там (+). Если Вы ошиблись, там (-).</li>
<li>За каждый правильный ответ начисляется 1 балл;</li>
<li>Оценки: менее 20 баллов - НЕУДОВЛЕТВОРИТЕЛЬНО, от 20 но менее 30 - УДОВЛЕТВОРИТЕЛЬНО, 30 и менее 35 - ХОРОШО, 35 - ОТЛИЧНО;</li>
<li>Чтобы сбросить результат тестирования, нажать кнопку "Сбросить ответы";</li>
</ul>
</div>
<form name="test"><ol>
<li><div id="T1"></div><b> Какое государство расположено на острове Борнео? </b><br/>
<input type="radio" value="1" name="Q1"/> Бруней<br />
<input type="radio" value="2" name="Q1"/> Камбоджа<br />
<input type="radio" value="3" name="Q1"/> Израиль<br />
<input type="radio" value="4" name="Q1"/> Мозамбик<br />
<br/></li><li><div id="T2"></div><b> Какое государство имеет самую длинную границу с Францией? </b><br/>
<input type="radio" value="1" name="Q2"/> Испания<br />
<input type="radio" value="2" name="Q2"/> Мавритания<br />
<input type="radio" value="3" name="Q2"/> Бразилия<br />
<input type="radio" value="4" name="Q2"/> Мексика<br />
<br/></li><li><div id="T3"></div><b> Итальянское название вторичных формаций, возникающих в условиях влажного средиземноморского климата и состоящих из низкорослых деревьев и кустарников. Растительность очень густая, кроны сомкнуты. Определите название. </b><br/>
<input type="radio" value="1" name="Q3"/> Гаррига<br />
<input type="radio" value="2" name="Q3"/> Маквис<br />
<input type="radio" value="3" name="Q3"/> Шибляк<br />
<input type="radio" value="4" name="Q3"/> Террикон<br />
<br/></li><li><div id="T4"></div><b> Определите западноафриканское государство, расположенное на островах. </b><br/>
<input type="radio" value="1" name="Q4"/> Тринидад и Тобаго<br />
<input type="radio" value="2" name="Q4"/> Гвинея-Биссау<br />
<input type="radio" value="3" name="Q4"/> Индонезия<br />
<input type="radio" value="4" name="Q4"/> Кабо-Верде<br />
<br/></li><li><div id="T5"></div><b> Ключ на гербе этой страны символизирует важное географическое положение этого островного государства, занимающего крупнейший остров архипелага. Главная сельскохозяйственная культура страны — сахарный тростник, по производству и экспорту которого государство является одним из мировых лидеров.</b><br/>
<input type="radio" value="1" name="Q5"/> Монако<br />
<input type="radio" value="2" name="Q5"/> Куба<br />
<input type="radio" value="3" name="Q5"/> Доминикана<br />
<input type="radio" value="4" name="Q5"/> Ямайка<br />
<br/></li><li><div id="T6"></div><b> Это древнее государство расположено в пределах молодых гор, о чем свидетельствуют разрушительные землетрясения. Оно занимает площадь 28,8 тыс. км2. Характеризуется однонациональным составом населения. Специализация сельского хозяйства — овцеводство, виноградарство, овощеводство; специализация промышленности — цветная металлургия, химическая и легкая промышленность. Природная достопримечательность — высокогорное озеро.</b><br/>
<input type="radio" value="1" name="Q6"/> Израиль<br />
<input type="radio" value="2" name="Q6"/> Азербайджан<br />
<input type="radio" value="3" name="Q6"/> Армения<br />
<input type="radio" value="4" name="Q6"/> Грузия <br />
<br/></li><li><div id="T7"></div><b> Карты часто составляют в нормальной конической проекции. Что означает определение «нормальная»?</b><br/>
<input type="radio" value="1" name="Q7"/> Ось земного шара совпадает с осью вспомогательной поверхности – конуса<br />
<input type="radio" value="2" name="Q7"/> Проекция была разработана еще в Древней Греции<br />
<input type="radio" value="3" name="Q7"/> Ось земного шара перпендикулярна оси вспомогательной поверхности – конуса<br />
<input type="radio" value="4" name="Q7"/> Карты, составленные в этой проекции, не имеют искажений<br />
<br/></li><li><div id="T8"></div><b> Ветер, дующий между тропиками круглый год, в Северном полушарии с северо-восточного, в Южном — с юго-восточного направления?</b><br/>
<input type="radio" value="1" name="Q8"/> Пассаты<br />
<input type="radio" value="2" name="Q8"/> Муссоны<br />
<input type="radio" value="3" name="Q8"/> Патиссоны<br />
<input type="radio" value="4" name="Q8"/> Западные ветра<br />
<br/></li><li><div id="T9"></div><b> Периодический ветер, несущий большое количество влаги, дующий зимой с суши на океан, летом — с океана на сушу.</b><br/>
<input type="radio" value="1" name="Q9"/> Бора<br />
<input type="radio" value="2" name="Q9"/> Пассаты<br />
<input type="radio" value="3" name="Q9"/> Сирокко<br />
<input type="radio" value="4" name="Q9"/> Муссоны<br />
<br/></li><li><div id="T10"></div><b> Этот город в прессе и литературе нередко называют «Столица российской провинции».</b><br/>
<input type="radio" value="1" name="Q10"/> Пенза<br />
<input type="radio" value="2" name="Q10"/> Урюпинск<br />
<input type="radio" value="3" name="Q10"/> Нижневартовск<br />
<input type="radio" value="4" name="Q10"/> Рыбинск<br />
<br/></li><li><div id="T11"></div><b> Город расположен на правом берегу Волги. В пределах города расположено уникальное месторождение горючих сланцев. Население города составляет 175222 чел.</b><br/>
<input type="radio" value="1" name="Q11"/> Нижний Тагил<br />
<input type="radio" value="2" name="Q11"/> Сызрань<br />
<input type="radio" value="3" name="Q11"/> Великий Новгород<br />
<input type="radio" value="4" name="Q11"/> Абакан<br />
<br/></li><li><div id="T12"></div><b> Этот залив - самый большой в мире, на северо-восточном побережье залива расположен самый протяжённый в мире пляж. Определите залив.</b><br/>
<input type="radio" value="1" name="Q12"/> Мексиканский<br />
<input type="radio" value="2" name="Q12"/> Гыданский<br />
<input type="radio" value="3" name="Q12"/> Бенгальский<br />
<input type="radio" value="4" name="Q12"/> Ботанический<br />
<br/></li><li><div id="T13"></div><b> Определите город по изображению.</b><br/>
<img src="taz.jpg" width="100%" /><br/>
<input type="radio" value="1" name="Q13"/> Лиссабон<br />
<input type="radio" value="2" name="Q13"/> Даллас<br />
<input type="radio" value="3" name="Q13"/> Тель - Авив<br />
<input type="radio" value="4" name="Q13"/> Вадуц<br />
<br/></li><li><div id="T14"></div><b> Дата летнего солнцестояния(2016)?</b><br/>
<input type="radio" value="1" name="Q14"/> 20 июня<br />
<input type="radio" value="2" name="Q14"/> 22 июня<br />
<input type="radio" value="3" name="Q14"/> 10 июня<br />
<input type="radio" value="4" name="Q14"/> 21 июня<br />
<br/></li><li><div id="T15"></div><b> Совокупность процессов и явлений, связанных с деятельностью воды и выражающихся в растворении горных пород и образовании в них пустот?</b><br/>
<input type="radio" value="1" name="Q15"/> Делювий<br />
<input type="radio" value="2" name="Q15"/> Базис эрозии<br />
<input type="radio" value="3" name="Q15"/> Карст<br />
<input type="radio" value="4" name="Q15"/> Пересыпь<br />
<br/></li><li><div id="T16"></div><b> Определите местность по изображению.</b><br/>
<img src="large.jpeg" width="100%" /><br/>
<input type="radio" value="1" name="Q16"/> Лесостепь<br />
<input type="radio" value="2" name="Q16"/> Пустыня<br />
<input type="radio" value="3" name="Q16"/> Лес<br />
<input type="radio" value="4" name="Q16"/> Пампасы<br />
<br/></li>
<li><div id="T17"></div><b>Определите город с географическми координатами 30°сш, 90°зд.</b><br/>
<input type="radio" value="1" name="Q17"/> Даллас<br />
<input type="radio" value="2" name="Q17"/> Новый Орлеан<br />
<input type="radio" value="3" name="Q17"/> Нижний Новгород<br />
<input type="radio" value="4" name="Q17"/> Рабат<br />
<br/></li>
<li><div id="T18"></div><b>Определите город с географическми координатами 60°сш, 30°вд.</b><br/>
<input type="radio" value="1" name="Q18"/> Санкт-Петербург<br />
<input type="radio" value="2" name="Q18"/> Екатеринбург<br />
<input type="radio" value="3" name="Q18"/> Бранденбург<br />
<input type="radio" value="4" name="Q18"/> Оренбург<br />
<br/></li>
<li><div id="T19"></div><b>Определите город по описанию. Этот Бразильский город расположен на южном тропике, является самым населённым городом в западном полушарии. Важнейший промышленнвй узел страны, известен как центр торговли контрабандной, пиратской и фальсифицированной продукцией.</b><br/>
<input type="radio" value="1" name="Q19"/> Бразилиа<br />
<input type="radio" value="2" name="Q19"/> Рио-де-Жанейро<br />
<input type="radio" value="3" name="Q19"/> Сан-Паулу<br />
<input type="radio" value="4" name="Q19"/> Санта-Фе<br />
<br/></li>
<li><div id="T20"></div><b>Какое море не имеет побережья?</b><br/>
<input type="radio" value="1" name="Q20"/> Карибское<br />
<input type="radio" value="2" name="Q20"/> Цейлонское<br />
<input type="radio" value="3" name="Q20"/> Баренцево<br />
<input type="radio" value="4" name="Q20"/> Саргассово<br />
<br/></li>
<li><div id="T21"></div><b>Какая горная цепь самая длинная в мире?</b><br/>
<input type="radio" value="1" name="Q21"/> Кордитьеры<br />
<input type="radio" value="2" name="Q21"/> Срединно-Атлантический хребет<br />
<input type="radio" value="3" name="Q21"/> хребет Ломоносова<br />
<input type="radio" value="4" name="Q21"/> Анды<br />
<br/></li>
<li><div id="T22"></div><b>Какой город в мире самый крупный?</b><br/>
<input type="radio" value="1" name="Q22"/> Хулун-Буир<br />
<input type="radio" value="2" name="Q22"/> Мумбаи<br />
<input type="radio" value="3" name="Q22"/> Москва<br />
<input type="radio" value="4" name="Q22"/> Шанхай<br />
<br/></li>
<li><div id="T23"></div><b>Определите страну по описанию. Это европейское государство граничит с 3-мя государствами. Территория государства заболочена и лесиста, занимает первое место в мире по производству бумаги.</b><br/>
<input type="radio" value="1" name="Q23"/> Шведция<br />
<input type="radio" value="2" name="Q23"/> Финляндия<br />
<input type="radio" value="3" name="Q23"/> Норвегия<br />
<input type="radio" value="4" name="Q23"/> Испания<br />
<br/></li>
<li><div id="T24"></div><b>Какой регион изучил великий русский географ Пётр Петрович
Семёнов-Тян-Шанский?
</b><br/>
<input type="radio" value="1" name="Q24"/> Центральная Европа<br />
<input type="radio" value="2" name="Q24"/> Центральная Азия<br />
<input type="radio" value="3" name="Q24"/> Ост-Индия<br />
<input type="radio" value="4" name="Q24"/> Дальний Восток<br />
<br/></li>
<li><div id="T25"></div><b>Колонией какого государства никогда не являлись Молуккские острова?</b><br/>
<input type="radio" value="1" name="Q25"/> Франция<br />
<input type="radio" value="2" name="Q25"/> Испания<br />
<input type="radio" value="3" name="Q25"/> Португалия<br />
<input type="radio" value="4" name="Q25"/> Нидерланды<br />
<br/></li>
<li><div id="T26"></div><b>Город в США, который отличается от других американских городов архитектурным разнообразием. В периферии города расположен крупнейший в мире высокотехнологичный кластер и центр венчурных инвестиций.</b><br/>
<input type="radio" value="1" name="Q26"/> Лос-Анджелес<br />
<input type="radio" value="2" name="Q26"/> Нью-Йорк<br />
<input type="radio" value="3" name="Q26"/> Сан-Франциско<br />
<input type="radio" value="4" name="Q26"/> Бостон<br />
<br/></li>
<li><div id="T27"></div><b>Сколько процентов аргона (приблизительно) содержится в сухом воздухе?</b><br/>
<input type="radio" value="1" name="Q27"/> 10%<br />
<input type="radio" value="2" name="Q27"/> 3%<br />
<input type="radio" value="3" name="Q27"/> 1%<br />
<input type="radio" value="4" name="Q27"/> 99%<br />
<br/></li>
<li><div id="T28"></div><b>Этот город занимает одно третье место в России по количеству дипломатических представительств, специалисты из итальянской Генуи в настоящее время внедряют специальную систему «умного» светофорного регулирования на улицах этого города.</b><br/>
<input type="radio" value="1" name="Q28"/> Санкт-Петербург<br />
<input type="radio" value="2" name="Q28"/> Москва<br />
<input type="radio" value="3" name="Q28"/> Нижний Новгород<br />
<input type="radio" value="4" name="Q28"/> Екатеринбург<br />
<br/></li>
<li><div id="T29"></div><b>С каким государством РФ имеет границу наименьшей протяжённости?</b><br/>
<input type="radio" value="1" name="Q29"/> Индия<br />
<input type="radio" value="2" name="Q29"/> Айзербайджан<br />
<input type="radio" value="3" name="Q29"/> Польша<br />
<input type="radio" value="4" name="Q29"/> КНДР<br />
<br/></li>
<li><div id="T101"></div><b>[      ] — скопление рыхлых продуктов выветривания горных пород у подножия и у нижних частей возвышенностей. </b><br/>
<input type="text" id="101"/><br />
<br/></li>
<li><div id="T102"></div><b>[    ]— совокупность процессов и явлений, связанных с деятельностью воды и выражающихся в растворении горных пород и образовании в них пустот, а также своеобразных форм рельефа.</b><br/>
<input type="text" id="102"/><br />
<br/></li>
<li><div id="T103"></div><b>[    ] склона - расстояние на карте между двумя смежными горизонталями; зависит от высоты сечения на данной карте и крутизны склона.</b><br/>
<input type="text" id="103"/><br />
<br/></li>
<li><div id="T104"></div><b>В 2000-2008 году в этой стране произошла экономическая катастрофа.</b><br/>
<input type="text" id="104"/><br />
<br/></li>
<li><div id="T105"></div><b>[    ]— алюминиевая руда, состоящая из гидроксидов алюминия, оксидов железа и кремния, сырьё для получения глинозёма и глинозёмосодержащих огнеупоров. </b><br/>
<input type="text" id="105"/><br />
<br/></li>
<li><div id="T106"></div><b>Это государство граничит с Западной Сахарой на северо-западе, с Сенегалом на юго-западе, с Алжиром на северо-востоке, с Мали на юге и востоке.</b><br/>
<input type="text" id="106"/><br />
<br/></li>
</ol> 
<CENTER>
<P><textarea style="width:100%;" style="border:#FFF 1px solid;" id="s1" rows="5" readonly=""> </textarea></P>
<INPUT onclick="answer()" type="button" value="Показать результат"/>
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query = "SELECT * FROM test_geo ";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$middle=$middle+$row[1];
}
$mball=$middle/$rows;
if(isset($_COOKIE['nok']) and isset($_COOKIE['s']) and $_COOKIE['nok']!=0){
if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}else{
       $trk=rand(5, 1005);
       $usert='Гость'.$trk;
}
 $a = $_COOKIE['nok'];
 $b = $_COOKIE['s'];
$query = "SELECT * FROM test_geo WHERE user='$usert'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows!=0){
$query="UPDATE `test_geo` SET `user`='$usert',`ball`='$a',`sub`='$b' WHERE user='$usert'";
 $result = $conn->query($query);
}else{
 $query = "INSERT INTO test_geo VALUES('$usert', '$a', '$b', ' ')";
  $result = $conn->query($query);
}
setcookie ("nok", "", time() - 3600); 
setcookie ("s", "", time() - 3600); 
}
$query = "SELECT * FROM test_geo WHERE sub='НЕУДОВЛЕТВОРИТЕЛЬНО'";
  $result = $conn->query($query);
  $rows1 = $result->num_rows;
$query = "SELECT * FROM test_geo WHERE sub='УДОВЛЕТВОРИТЕЛЬНО'";
  $result = $conn->query($query);
  $rows2 = $result->num_rows;
$query = "SELECT * FROM test_geo WHERE sub='ХОРОШО'";
  $result = $conn->query($query);
  $rows3 = $result->num_rows;
$query = "SELECT * FROM test_geo WHERE sub='ОТЛИЧНО'";
  $result = $conn->query($query);
  $rows4 = $result->num_rows;
if($rows1>$rows2){
$k=$rows1;
}else{
$k=$rows2;
}
if($rows3>$rows1 and $rows3>$rows2){
$k=$rows3;
}
$p=$rows1/$k;
$l=$rows2/$k;
$r=$rows3/$k;
$m=$rows4/$k;
?>
&nbsp;&nbsp;&nbsp;&nbsp; 
<INPUT type="reset" value="Сбросить ответы"/> 
</CENTER>        
</form> 
<br/>
<hr/>
<div style="width:90%; overflow-x:auto;">
<b>Статистика теста</b>
<table width="100%" border="0" cellpadding="0.1">
  <tr>
    <td>Средний балл:<b> <?php echo $mball; ?></b></td>
    <td>
    Соотношение:
    <div id="static" style="background:red; width:<?php echo $p; ?>%;">2</div>
    <div id="static" style="background:yellow; width:<?php echo $l; ?>%;">3</div>
    <div id="static" style="background:blue; width:<?php echo $r; ?>%;">4</div>
    <div id="static" style="background:green; width:<?php echo $m; ?>%;">5</div>
    </td>
    <td>Прошли тест:<br/>
<?php
$query = "SELECT * FROM test_geo ORDER BY id DESC limit 20";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo" ".$row[0]."(".$row[1].") ".$row[2]."<br/>";
}
?>
</td>
  </tr>
</table>
</div>
<?php require_once 'downer.html'; ?>