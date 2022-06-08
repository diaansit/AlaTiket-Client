
<?php
session_start();

$idTiket=$_POST["id_tiket"];
$berangkat=$_POST["keberangkatan"];
$tujuan=$_POST["tujuan"];
$kelas=$_POST["kelas"];
$tanggal=$_POST["tanggal"];

$url="http://localhost:8080/api/ListTiket/perbaharuiData";
   
$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode( array( 'idTiket'=> $idTiket,'keberangkatan'=>$berangkat,
'tujuan'=> $tujuan,'kelas'=>$kelas,'tanggal'=>$tanggal ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);

header('Location: ../Admin/index.php');


?>