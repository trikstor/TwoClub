<script>
	var max = 9;
  var ppz = Math.floor(Math.random( ) * (max+1))
  var ppt = Math.floor(Math.random( ) * (max+1))
  var primus = ppz + ppt;
  var result = prompt(ppz+'+'+ppt+'=?', 'ответ');
  if(result!=primus){
	  document.location.href = "http://twoclub.ru/autorize.php";
  }
</script>