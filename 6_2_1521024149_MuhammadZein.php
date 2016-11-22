<html>
<head>
	<title>Studi Kasus 6_1</title>
</head>
<body>
<?php
$phi = 3.14;
$r = 138;
function luaslingkaran(){
	global $phi, $r;
	$luaslingkaran = $phi * $r * $r;
	echo $luaslingkaran;
}
function kelilinglingkaran(){
	global $phi, $r;
	$keliling = 2 * $phi * $r;
	echo $keliling;
}
function volumebola(){
	global $phi, $r;
	$volume = 4 * $phi * $r * $r;
	echo $volume;
}
echo "1. Lingkaran<br/>";
echo " r = $r"."<br>";
{echo " <b>Menghitung Luas Lingkaran </b><br/>";}
{echo "=================================================<br/>";
echo " luas lingkaran = ";luaslingkaran();
echo "<br/>=================================================<br></br>";
}


{echo " <b>Menghitung Keliling Lingkaran </b><br/>";}
{echo "=================================================<br/>";
echo " keliling lingkaran = ";kelilinglingkaran();
echo "<br/>=================================================<br></br>";
}

{echo "<b>Menghitung Volume Bola</b></br>";}
{echo "=================================================</br>";
echo "Volume Bola= = ";volumebola();
echo "<br/>=================================================" ;}

$p = 138;
$l = 024;
$t = 521;
function luasps(){
	global $p, $l;
	$luasps = $p * $l;
	echo $luasps;
}
function kelilingps(){
	global $p, $l;
	$kelilingps = 2 *($p * $l) ;
	echo $kelilingps;
}
function volumebalok(){
	global $p, $l, $t;
	$volumebalok = $p*$l*$t;
	echo $volumebalok;
}
echo "<br><br>2. Persegi Panjang<br/>";
echo " P = $p <br> L = $l <br/> T =$t <br>";
{echo "=================================================<br/>";
echo " luas Persegi Panjang = ";luasps();
echo "<br/>=================================================<br>";
}

{echo "=================================================<br/>";
echo " keliling Persegi Panjang = ";kelilingps();
echo "<br/>=================================================<br>";
}

{echo "=================================================</br>";
echo "Volume Balok = ";volumebalok();
echo "<br/>=================================================" ;}

$s = 138;
function luasp(){
	global $s;
	$luasp = $s*$s;
	echo $luasp;
}
function kelilingp(){
	global $s;
	$kelilingp = 4*$s ;
	echo $kelilingp;
}
function volumekubus(){
	global $s;
	$volumekubus = $s*$s*$s;
	echo $volumekubus;
}
echo "<br><br>3. Persegi<br/>";
echo " sisi = $s <br>";
{echo "=================================================<br/>";
echo " luas Persegi = ";luasp();
echo "<br/>=================================================<br>";
}

{echo "=================================================<br/>";
echo " keliling Persegi = ";kelilingp();
echo "<br/>=================================================<br>";
}

{echo "=================================================</br>";
echo "Volume Kubus = ";volumekubus();
echo "<br/>=================================================" ;}

$a = 138;
$tl = 024;
$tt = 521;
$sm = 152;
function luass(){
	global $a, $tl;
	$luass = 0.5*$a * $tl;
	echo $luass;
}
function kelilings(){
	global $a, $sm;
	$kelilings = $a+$sm+$sm ;
	echo $kelilings;
}
function volumeprismas(){
	global $a, $tl, $tt;
	$volumeprismas = 0.5*$a * $tl * $tt;
	echo $volumeprismas;
}
echo "<br><br>4. Segitiga<br/>";
echo " Alas = $a <br> Tinggi Alas = $tl <br/> Tinggi =$tt <br> Sisi Miring = $sm<br/";
{echo "=================================================<br/>";
echo " luas Segitiga = ";luass();
echo "<br/>=================================================<br>";
}

{echo "=================================================<br/>";
echo " keliling Segitiga= ";kelilings();
echo "<br/>=================================================<br>";
}

{echo "=================================================</br>";
echo "Volume Prisma Segitiga = ";volumeprismas();
echo "<br/>=================================================" ;}
?>
</body>
</html>