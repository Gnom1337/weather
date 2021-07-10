<?php
 $uagent=$_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4)))
    header('location: http://unit18.ammi-team.ru/mobile.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
<style>
	h2{
		font-size: 32px;
	}
   h2:first-letter {
    text-transform:uppercase;
    
   }
  </style>
<div class="left" style="margin-top:20px; margin-left:10px;">
	<form action="index.php" method="post">
<p><select  class="select" name="cityes">  
<option value=""></option>
    <option name="Kyiv" <?=isset($_POST) && $_POST["cityes"]=='Kyiv'?" selected=\"selected\"":""?>>Киев</option>
	<option value="Kharkiv" name="Kharkiv" <?=isset($_POST) && $_POST["cityes"]=='Kharkiv'?" selected=\"selected\"":""?>>Харьков</option>
	<option value="Lviv" name="Lviv" <?=isset($_POST) && $_POST["cityes"]=='Lviv'?" selected=\"selected\"":""?>>Львов</option>	
    <option value="Moscow" name="Moscow" <?=isset($_POST) && $_POST["cityes"]=='Moscow'?" selected=\"selected\"":""?>>Москва</option>
	<option value="Tver" name="Tver" <?=isset($_POST) && $_POST["cityes"]=='Tver'?" selected=\"selected\"":""?>>Тверь</option>	
	<option value="Krasnodar" name="Krasnodar" <?=isset($_POST) && $_POST["cityes"]=='Krasnodar'?" selected=\"selected\"":""?>>Краснодар</option>
   </select></p> 
   <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Цельсия (default)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="far" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Фаренгейт
  </label>
</div>
   <button class="btn btn-primary"name="btn" style="margin-top:5px; background-color:blue;">Узнать погоду</button>
   </form>
</div>


  <?php
	
	$city=$_POST['cityes'];
	$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=217d9f25799212d3ff84af175a09687a&lang=ru";


$contents = file_get_contents($url);

$weather=json_decode($contents);

$temp_now=$weather->main->temp;
$about=$weather->weather[0]->description;
$icon=$weather->weather[1]->icon;
$cityname = $weather->name;
if($_POST['far']){
	echo 
	'<h1 style="color:white; text-align:center; margin-top:50px;">'.$cityname.'</h1><br />
	<div style="text-align:center; color:white; font-size: 100px;">
	<img src="sun.png" width="100" height="100" style="margin-right:20px;">
	'.$temp=((9/5)*round($temp_now)+32).'°F<br />
	</div>
	<div style="text-align:center; color:white;">
	<h2 class="first">'.$about.'</h2>
	</div> ' ;
}
else{
	echo 
'<h1 style="color:white; text-align:center; margin-top:50px;">'.$cityname.'</h1><br />
<div style="text-align:center; color:white; font-size: 100px;">
<img src="sun.png" width="100" height="100" style="margin-right:20px;">
'.round($temp_now).'°<br />
</div>
<div style="text-align:center; color:white;">
<h2 class="first">'.$about.'</h2>
</div> ' ;
}
?>
<div class="spaces" style="margin-top:130px;">
<span class="box1"style="color:silver;">Ветер</span>
<span class="box2" style="color:silver;">Давление</span>
<span class="box3" style="color:silver;">Влажность</span>
<span class="box4" style="color:silver;">Вероятность дождя</span>
</div>
<?php
	
	$city=$_POST['cityes'];
	$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=217d9f25799212d3ff84af175a09687a&lang=ru";


$contents = file_get_contents($url);

$weather=json_decode($contents);

$wind=$weather->wind->speed;
$pressure=$weather->main->pressure;
$humidity=$weather->main->humidity;
$probability=$humidity+10;
echo '<div class="spaces" >
<span class="box1" style="color:white; font-size:20px; padding-top:20px;">'.$wind.' м/с</span>
	<span class="box2" style="color:white; font-size:20px; padding-top:20px; min-width:50px;">'.$pressure.' мм </br>рт. ст.</span>		
	<span class="box3" style="color:white; font-size:20px; padding-top:20px;">'.$humidity.' %</span>
	<span class="box4" style="color:white; font-size:20px; padding-top:20px;">'.$probability.' %</span>
	</div>'
;
?>
	<script src="bootstrap/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>