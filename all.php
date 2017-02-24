<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <script type="text/javascript" src="http://blog.ox2.ru/lib/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
            function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     "alarm.php", 
                    type:     "POST", 
                    dataType: "html", 
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                    document.getElementById(result_id).innerHTML = "Ваш запрос отправлен";
                },
                error: function(response) { 
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
 
   </script>
<style>
#tp {
color:red; 
background:white; 
border:white 1px sold;
}
</style>
    </head>
    <body>
        <div id="result_div_id">
        </div>
        <br/>
        <form method="post" action="" id="form_id">
  <input type="hidden" name="id" value="<? echo $id ?>">

            <input type="button" value="пожаловаться" onclick="AjaxFormRequest('result_div_id', 'form_id', 'form.php')" id="tp"/>
        </form>
    </body>
</html>