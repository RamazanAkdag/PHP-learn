<?php 




// function yaz(){
// 	echo "cıktı";
// }


// yaz();

// function topla($a,$b){
// 	return $a + $b;
// }

// echo topla(5,8);

//phpde fonksiyonlar global degiskenleri sevmezler eger fonkun icinde global degisken kullanılacaksa fonkun icinde belirtilmelidir

// $a = 10;
// function globalDeneme($b){
// 	global $a;//bu şekilde global olan degiskenleri fonksiyonda kullanmak istedigimizi belirterek kullanmamız gerekir
// 	return $a + $b;
// }

// echo globalDeneme(5);

// function yaz($ad = "null",$soyad = "null"){//varsayılan degerler verilir parametrelere eger parametre girilmediyse

// 	return $ad." ".$soyad;
// }

// echo yaz("emrah","yuksel");
// echo "<br>";
// echo yaz();


//RECURSIVE 

$sabit = 1;

function faktoriyel($a){
	global $sabit;

	if($a > 1){
		$sabit*= $a;
		$a--;
		faktoriyel($a);
	}
	return $sabit;
}

echo faktoriyel(5);

// if(function_exists("faktoriyel")){//function exist o isimde fonksiyon var mı diye kontrol eder
// 	echo "varimiş";
// }
?>