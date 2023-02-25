<?php 
date_default_timezone_set('Europe/Istanbul');
$adsoyad = "emrah yuksel";

setcookie("adsoyad",$adsoyad,time() + 3600);//ilk ğparametre cookie ismi,ikinci parametre cookieye atanılacak degisken,istersen 3. parametreye de cookienin ne 													//zaman silinecegini kaydedebilirsin
echo $_COOKIE['adsoyad'];

//cookie sure artırma

// strtotime("+30 seconds");//cookienin temizlenme suresini 30 sn daha artırdık
// strtotime("+1 hours");//cookienin temizlenme suresini 30 sn daha artırdık
// strtotime("1 day");//cookienin temizlenme suresini 30 sn daha artırdık











?>