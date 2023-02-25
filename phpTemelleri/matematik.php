<?php

//matematiksel işlemler

$numara1 = 100;
$numara2 = 150;

echo "$numara1 + $numara2 = ".($numara1 + $numara2);

echo "<hr>";

$n1 = 500;
$n2 = 305;
$cikar = $n1 - $n2;

echo "$n1 - $n2 = $cikar";
echo "<hr>";
echo "<br>";

?>

<?php

//hazır fonksiyonlar
	$sayi = rand(1,100);//belirtilen aralıkta sayı üreten fonk

	if ($sayi < 50) {
		echo "$sayi :: kazandiniz...";
	}
	else
		echo "$sayi :: kaybettiniz...";

/*
çift ve tek tırnak arasındaki farklar
*/

$ad = "emrah";
echo "<br>";
echo "benim adım $ad";
echo "<br>";
echo 'benim adım $ad';
/*çift tırnak içerisinde degisken degerleri okunabilirken tek tırnak içine yazılan her şeyi stringsel olarak okur*/

echo "<br>";


//yok sayma işaretleri

echo "ben \"Udemy\" kursuna kayıt oldum...";
echo "<br>";
echo "<hr>";

//strtoupper - strtolower upper icine gelen degiskenin tum harflerini buyuk yazar
//  					  lower icine gelenin tum harflerini kucuk yazar
//						  ucwords -> metnin kelimelerinin ilk harflerini buyuk yazar
//						  ucfirst -> metnin ilk harfini buyuk yazar
//						  strlen -> metnin karakter sayısını verir boşlukları da sayar
// $metin = "selamun aleykum adım azrail";

// $metin = ucwords($metin);

// echo "$metin";

//devamını oku uygulaması

$yazi = "lorem ipsum dolor sit amet";
echo "<h1>haber baslıgı</h1>";

echo "<p>".substr($yazi,0,250)."...</p>";//phpnin keni fonklarını string içinde kullanamazssın birleştirme operatoryule ayrı yazman gerek

echo "<a href = \" # \" >devamını oku</a>";








?>
