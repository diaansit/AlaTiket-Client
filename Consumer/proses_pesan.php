<?php
session_start();
$no_ktp=$_POST["no_ktp"];
$nama_lengkap=$_POST["nama_lengkap"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$no_telepon=$_POST["no_telp"];
$idTiket=$_POST["id_tiket"];
$bergkat=$_POST["keberangkatan"];
$tujuan=$_POST["tujuan"];
$kelas=$_POST["kelas"];

$url="http://localhost:8080/api/Tiket/masukkanData";
   
$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode( array( 'no_ktp'=>$no_ktp,
'alamat'=>$alamat,
'keberangkatan'=>$bergkat,
'kelas'=>$kelas,
'nama_Lengkap'=>$nama_lengkap,
'no_telp'=>$no_telepon,
'tujuan'=> $tujuan,
'email'=>$email) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
header('Location: ../Consumer/index.php');


?>