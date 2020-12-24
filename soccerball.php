<?php
try{
$vt = new PDO("mysql:host=localhost;dbname=soccerball;charset=utf8","root",""); 


}catch (PDOException $hata){
echo $hata->getMessage();
}

if($_REQUEST['Komut']=='Vericekme'){
$almak = $vt->query("select * from skor_bilgisi ORDER BY skor DESC limit 0,5 ");
if($almak-> rowCount()){

foreach($almak as $row){
echo $row['kullanıcı_adı'].";";
echo $row['skor'].";";
}
}
}
if($_REQUEST['Komut2']=='Verigüncelle'){
	
$skor = $_REQUEST['Skorum'];
$ismim = $_REQUEST['İsmim'];
$guncelle = $vt->prepare("UPDATE skor_bilgisi SET skor =? where '$ismim'=kullanıcı_adı");
$guncelle ->execute (array("$skor"));


}

?>
