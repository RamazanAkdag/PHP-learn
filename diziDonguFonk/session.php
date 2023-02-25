<?php 
session_start();
//session nasıl oluşturulur

/*session hesap olusturma ve olusturulan hesabı tutma gibi özellikleri içerir.Kullanıcıya ait her türlü bilgi session ve cookielerde saklanır
kullanıcı oturum suresi boyunca bu yontemlerle takip edilir. sessionlar sunucu tarafında tutuldugu için güvenlidir de.*/


//session kullanılacaksa projede mutlaka session start fonku kullanılmalı projenin başındas
$_SESSION['adsoyad'] = "emrah yüksel";

$_SESSION['il'] = "istanbul";


?>