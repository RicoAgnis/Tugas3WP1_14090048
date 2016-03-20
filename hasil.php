<html>
<head>
<title>Belajar website</title>
<style type="text/css">
.judul{font-family: comic sans ms; font-size: 32; font-weight: bold}
td{font-family: verdana; font-size: 11}
a{font-family: comic sans ms; font-size: 16; font-weight: bold; textdecoration:
none}
a:hover{color: #ff6600; font-size: 18}
h1{font-family: comic sans ms; font-size: 22; font-weight: bold}
body{font-family: verdana; font-size: 12}
</style>
</head>
<body>
<table border="0" width="100%">
<tr bgcolor="#ff6600">
<td class="judul">WEB RAM</td></tr>
</table>

<table border="0">
<tr bgcolor="#cccccc">
<td><a href="index.html">Home>></a></td>
<td><a href="profil.html">Profil>></a></td>
<td><a href="krs.html">KRS>>></a></td>
<td><a href="kontak.html">Kontak>></a></td>
<td><a href="kalkulator.php">Kalkulator>></a></td>
<td width="90%"></td></tr>
</table>
<tr>
<td colspan="2" align="right"><marquee scrollamount="4">SELAMAT DATANG DI WEBSITE SAYA
</marquee></td>
<html>
<head>

<?php 
 
$nilai1 = $_POST['nilai1']; 
$nilai2 = $_POST['nilai2']; 
$operator = $_POST['operator']; 
 
if ($operator == "Penjumlahan") 
{ 
 $hasil = $nilai1 + $nilai2; 
 $tanda = "+";  
 } 
else if ($operator == "Pengurangan") 
{ 
 $hasil = $nilai1 - $nilai2; 
 $tanda = "-"; 
 } 
else if ($operator == "Perkalian") 
{ 
 $hasil = $nilai1 * $nilai2; 
 $tanda = "*";  
 } 
else if ($operator == "Pembagian") 
{ 
 $hasil = $nilai1 / $nilai2; 
 $tanda = "/"; 
 } 

 ?> 
 
<div align="center"> 
<table width="411" height="156" border="1"> 
<tr> 
<td colspan="2" bgcolor="#66CCFF"><div align="center">Hasil Perhitungan</div></td> 
</tr> 
<tr> 
<td bgcolor="#6699FF">Nilai Pertama</td> 
<td bgcolor="#6699FF">&nbsp; <?php echo "$nilai1"; ?></td> 
</tr> 
<tr> 
<td bgcolor="#6699FF">Operator</td> 
<td bgcolor="#6699FF">&nbsp; <?php echo "$tanda"; ?></td> 
</tr> 
<tr> 
<td bgcolor="#6699FF">Nilai kedua</td> 
<td bgcolor="#6699FF">&nbsp; <?php echo "$nilai2"; ?></td> 
</tr> 
<tr> 
<td bgcolor="#6699FF">Hasil</td> 
<td bgcolor="#6699FF">&nbsp; <?php echo "$hasil"; ?></td> 
</tr> 
</table> 
</div> 
</body> 
</html>