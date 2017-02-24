// <![CDATA[
 var res="13242311422231312134212213344"; 
 function setCookie(name, value) {
    document.cookie = name + "=" + value;
  }

function control(k, f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,f15,f16,f17,f19,f20,f21,f22,f23,f24,f25,f26,f27,f28,f29) {
if (k==1&&f1.checked) return true;
if (k==2&&f2.checked) return true;
if (k==3&&f3.checked) return true;
if (k==4&&f4.checked) return true;
if (k==5&&f5.checked) return true;
if (k==6&&f6.checked) return true;
if (k==7&&f7.checked) return true;
if (k==8&&f8.checked) return true;
if (k==9&&f9.checked) return true;
if (k==10&&f10.checked) return true;
if (k==11&&f11.checked) return true;
if (k==12&&f12.checked) return true;
if (k==13&&f13.checked) return true;
if (k==14&&f14.checked) return true;
if (k==15&&f15.checked) return true;
if (k==16&&f16.checked) return true;
if (k==17&&f17.checked) return true;
if (k==18&&f18.checked) return true;
if (k==19&&f19.checked) return true;
if (k==20&&f20.checked) return true;
if (k==21&&f21.checked) return true;
if (k==22&&f22.checked) return true;
if (k==23&&f23.checked) return true;
if (k==24&&f24.checked) return true;
if (k==25&&f25.checked) return true;
if (k==26&&f26.checked) return true;
if (k==27&&f27.checked) return true;
if (k==28&&f28.checked) return true;
if (k==29&&f29.checked) return true;
return false;
}
function controlme(k, p){
k = document.getElementById(k);
if(k==p.toLowerCase()) return true;
return false;
}
function answer() {
answ="";
     with(document)    {
    answ+=control(res.charAt(0) ,test.Q1[0],test.Q1[1],test.Q1[2],test.Q1[3])?"1":"0";
answ+=control(res.charAt(1) ,test.Q2[0],test.Q2[1],test.Q2[2],test.Q2[3])?"1":"0";
answ+=control(res.charAt(2) ,test.Q3[0],test.Q3[1],test.Q3[2],test.Q3[3])?"1":"0";
answ+=control(res.charAt(3) ,test.Q4[0],test.Q4[1],test.Q4[2],test.Q4[3])?"1":"0";
answ+=control(res.charAt(4) ,test.Q5[0],test.Q5[1],test.Q5[2],test.Q5[3])?"1":"0";
answ+=control(res.charAt(5) ,test.Q6[0],test.Q6[1],test.Q6[2],test.Q6[3])?"1":"0";
answ+=control(res.charAt(6) ,test.Q7[0],test.Q7[1],test.Q7[2],test.Q7[3])?"1":"0";
answ+=control(res.charAt(7) ,test.Q8[0],test.Q8[1],test.Q8[2],test.Q8[3])?"1":"0";
answ+=control(res.charAt(8) ,test.Q9[0],test.Q9[1],test.Q9[2],test.Q9[3])?"1":"0";
answ+=control(res.charAt(9) ,test.Q10[0],test.Q10[1],test.Q10[2],test.Q10[3])?"1":"0";
answ+=control(res.charAt(10) ,test.Q11[0],test.Q11[1],test.Q11[2],test.Q11[3])?"1":"0";
answ+=control(res.charAt(11) ,test.Q12[0],test.Q12[1],test.Q12[2],test.Q12[3])?"1":"0";
answ+=control(res.charAt(12) ,test.Q13[0],test.Q13[1],test.Q13[2],test.Q13[3])?"1":"0";
answ+=control(res.charAt(13) ,test.Q14[0],test.Q14[1],test.Q14[2],test.Q14[3])?"1":"0";
answ+=control(res.charAt(14) ,test.Q15[0],test.Q15[1],test.Q15[2],test.Q15[3])?"1":"0";
answ+=control(res.charAt(15) ,test.Q16[0],test.Q16[1],test.Q16[2],test.Q16[3])?"1":"0";
answ+=control(res.charAt(16) ,test.Q17[0],test.Q17[1],test.Q17[2],test.Q17[3])?"1":"0";
answ+=control(res.charAt(17) ,test.Q18[0],test.Q18[1],test.Q18[2],test.Q18[3])?"1":"0";
answ+=control(res.charAt(18) ,test.Q19[0],test.Q19[1],test.Q19[2],test.Q19[3])?"1":"0";
answ+=control(res.charAt(19) ,test.Q20[0],test.Q20[1],test.Q20[2],test.Q20[3])?"1":"0";
answ+=control(res.charAt(20) ,test.Q21[0],test.Q21[1],test.Q21[2],test.Q21[3])?"1":"0";
answ+=control(res.charAt(21) ,test.Q22[0],test.Q22[1],test.Q22[2],test.Q22[3])?"1":"0";
answ+=control(res.charAt(22) ,test.Q23[0],test.Q23[1],test.Q23[2],test.Q23[3])?"1":"0";
answ+=control(res.charAt(23) ,test.Q24[0],test.Q24[1],test.Q24[2],test.Q24[3])?"1":"0";
answ+=control(res.charAt(24) ,test.Q25[0],test.Q25[1],test.Q25[2],test.Q25[3])?"1":"0";
answ+=control(res.charAt(25) ,test.Q26[0],test.Q26[1],test.Q26[2],test.Q26[3])?"1":"0";
answ+=control(res.charAt(26) ,test.Q27[0],test.Q27[1],test.Q27[2],test.Q27[3])?"1":"0";
answ+=control(res.charAt(27) ,test.Q28[0],test.Q28[1],test.Q28[2],test.Q28[3])?"1":"0";
answ+=control(res.charAt(28) ,test.Q29[0],test.Q29[1],test.Q29[2],test.Q29[3])?"1":"0";
answ+=controlme(TQ1, "делювий")?"1":"0";
showResult();
    }
}

function showResult()   {
    var i,s;
 var nok=0;
for (i=0; i<answ.length;i++) {nok+=answ.charAt(i)=="1"?1:0;}
if(nok==29) s="ОТЛИЧНО";
if(nok<29) s="ХОРОШО";
if(nok<23) s="УДОВЛЕТВОРИТЕЛЬНО";
if (nok<15) s="НЕУДОВЛЕТВОРИТЕЛЬНО";
    document.test.s1.
    value="Количество правильных ответов "+nok+". Ваша оценка "+s+".";
setCookie("nok", nok);
setCookie("s", s);
with(document.test)
    {
    if (answ.charAt(0)=="1") {elm = document.getElementById('T1');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T1');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(1)=="1") {elm = document.getElementById('T2');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T2');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(2)=="1") {elm = document.getElementById('T3');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T3');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(3)=="1") {elm = document.getElementById('T4');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T4');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(4)=="1") {elm = document.getElementById('T5');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T5');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(5)=="1") {elm = document.getElementById('T6');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T6');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(6)=="1") {elm = document.getElementById('T7');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T7');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(7)=="1") {elm = document.getElementById('T8');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T8');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(8)=="1") {elm = document.getElementById('T9');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T9');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(9)=="1") {elm = document.getElementById('T10');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T10');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(10)=="1") {elm = document.getElementById('T11');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T11');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(11)=="1") {elm = document.getElementById('T12');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T12');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(12)=="1") {elm = document.getElementById('T13');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T13');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(13)=="1") {elm = document.getElementById('T14');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T14');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
   if (answ.charAt(14)=="1") {elm = document.getElementById('T15');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T15');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(15)=="1") {elm = document.getElementById('T16');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T16');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(16)=="1") {elm = document.getElementById('T17');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T17');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(17)=="1") {elm = document.getElementById('T18');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T18');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(18)=="1") {elm = document.getElementById('T19');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T19');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(19)=="1") {elm = document.getElementById('T20');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T20');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(20)=="1") {elm = document.getElementById('T21');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T21');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(21)=="1") {elm = document.getElementById('T22');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T22');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(22)=="1") {elm = document.getElementById('T23');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T23');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
if (answ.charAt(23)=="1") {elm = document.getElementById('T24');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T24');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(24)=="1") {elm = document.getElementById('T25');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T25');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
if (answ.charAt(25)=="1") {elm = document.getElementById('T26');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T26');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(26)=="1") {elm = document.getElementById('T27');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T27');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
if (answ.charAt(27)=="1") {elm = document.getElementById('T28');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T28');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
 if (answ.charAt(28)=="1") {elm = document.getElementById('T29');
elm.innerHTML = "<b style='background:green;'> Правильно </b>"} else {elm = document.getElementById('T29');
elm.innerHTML = "<b style='background:red;'> Неверно </b>"};
     }
	 
}
function showhide(obj){
    if(obj == 'none') return 'inline';
    else return 'none';
}
// ]]>