<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">
  
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
	<form action="mobile.php" method="post">
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
<span class="box1" style="color:white; font-size:20px; padding-top:20px;">'.$wind.'</br>м/с</span>
	<span class="box2" style="color:white; font-size:20px; padding-top:20px; min-width:50px;">'.$pressure.' мм </br>рт. ст.</span>		
	<span class="box3" style="color:white; font-size:20px; padding-top:20px;">'.$humidity.' %</span>
	<span class="box4" style="color:white; font-size:20px; padding-top:50px;">'.$probability.' %</span>
	</div>'
;
?>
	<script src="bootstrap/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>