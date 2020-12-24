<?php
 $mysqli = new mysqli("localhost","root","","soccerball");

if($mysqli -> connect_errno){

    echo "Failed to connect to MySQL: ". $mysqli -> connect_error;

}else
    echo "Basarili";


if($_POST['unity']=="kayitolma"){
$email = $_POST['email'];
$tarih = date('Y-m-d');
$kullanıcı_adı = $_POST['İsmim'];
$sorgu =" insert into skor_bilgisi(eposta,kullanıcı_adı,date) Values ('$email','$kullanıcı_adı','$tarih')";

$sorguSonucu = mysqli_query($mysqli,$sorgu);
if($sorguSonucu){

echo "Sorgu çalıştı";
}

}
if($_POST['unity']=="girisyapma"){

$email = $_POST['email'];
$kullanıcıadı = $_POST['İsmim'];
$sorgu = "select * from skor_bilgisi where eposta='$email'and kullanıcı_adı='$kullanıcıadı'";
$sorguSonucu = mysqli_query($mysqli,$sorgu);
if($sorguSonucu -> num_rows >0){

echo "1";
}else{
echo "Kullanıcı adı veya şifre hatalı !";
}

}









?>
