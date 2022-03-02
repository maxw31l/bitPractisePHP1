<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
echo '1.Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100.Atspausdinti juos į ekraną.';

echo '<br>'.'<br>';
for ($i = 0; $i < 4; $i++) {
    echo '<br>';
echo rand(0,100); 
echo '<br>';

}
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '2.Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100.Išvesti juos į ekraną. Visus nelyginius skaičius padidinti dvigubai. Išvesti visus skaičius į ekraną.';
echo '<br>'.'<br>';
$a = rand(0,100);
$b = rand(0,100);
$c = rand(0,100);
$d = rand(0,100);
echo '<br>';
echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d;
echo '<br>';
if($a % 2 !== 0){
    $a = $a *2;
}
if($b % 2 !== 0){
    $b = $b *2;
}

if($c % 2 !== 0){
    $c = $c *2;
}

if($d % 2 !== 0){
    $d = $d *2;
}

echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d;

echo '<br>'.'<br>';

echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo ' 3. Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai
savaitės diena.';
echo '<br>'.'<br>';
$rand = rand(1,7);
echo $rand. '<br>';
if($rand == 1) {
    echo 'Pirmadienis';
} 
if($rand == 2) {
    echo 'Antradienis ';
} 

if($rand == 3) {
    echo 'Trečaidienis';
} 

if($rand == 4) {
    echo 'Ketvirtadienis';
} 

if($rand == 5) {
    echo 'Penktadienis';
} 

if($rand == 6) {
    echo 'Šeštadienis';
} 

if($rand == 7) {
    echo 'Sekmadienis';
} 
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7
– savaitgalis).';
echo '<br>'.'<br>';

$rand = rand(1,7);
echo $rand. '<br>';
if($rand == 1) {
    echo 'Pirmadienis - darbo dena';
} 
if($rand == 2) {
    echo 'Antradienis - darbo diena';
} 

if($rand == 3) {
    echo 'Trečiadienis - darbo diena';
} 

if($rand == 4) {
    echo 'Ketvirtadienis - darbo diena';
} 

if($rand == 5) {
    echo 'Penktadienis - darbo diena';
} 

if($rand == 6) {
    echo 'Šeštadienis - laisvadienis';
} 

if($rand == 7) {
    echo 'Sekmadienis - laisvadienis';
} 
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti
atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš
trijų liekaną dvejetą – raudonai.';

echo '<br>'.'<br>';
for ($i=0;$i<4;$i++){
    $num = rand(0,100);


    if ($num%3 == 0) {
        echo '<br>';
        echo "<span style=\"color: green;\">$num</span>";
    }
    if ($num%3 == 1) {
        echo '<br>';
        echo "<span style=\"color: yellow;\">$num</span>";
    }
    if ($num%3 == 2) {
        echo '<br>';
        echo "<span style=\"color: red;\">$num</span>";
    }
    
}
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '6. Išvesti į ekraną skaičius nuo 0 iki 100.';
echo '<br>'.'<br>';
for ($i = 0; $i <= 100; $i++){
    echo $i;
}
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.';
echo '<br>'.'<br>';
for ($i = 0; $i <= 200; $i+=2){
    echo $i;
}
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų
atvaizduoti mėlynai.';
echo '<br>'.'<br>';
for ($i = 0; $i <= 200; $i+=2){
    echo '<br>';
    if ($i%6==0) {
        echo "<span style=\"color: blue;\">$i</span>";
        echo '<br>';
    } else {
        echo $i;
    }

}
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.';
echo '<br>'.'<br>';
$x= -1;
while($x%5!=0){
    $x=rand(1,50);
    echo $x. ' ';
}
echo '<br>'.'<br>';

echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5
arba iš 11.';
echo '<br>'.'<br>';
$x = -1;
while(($x%5!=0) && ($x%11!=0)){
    $x=rand(1,100);
    echo '<br>';
    echo $x;
}

echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150.';
echo '<br>'.'<br>';



while ($xsum   <= 150){
    $x = rand(1,10);
    $xsum = $xsum + $x;
    echo '<br>';
    echo $x;
}

echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120. Suskaičiuoti kiek skaičių buvo sugeneruota.';
echo '<br>'.'<br>';

while ($xsu   <= 120){
    $x = rand(1,10);
    $xsu += $x;
    $count++;
    echo '<br>';
    echo $x;
}
echo '<br>';
echo 'Sugeneruotų skaičių = '.$count;

echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175. Surasti didžiausią ir mažiausią skaičių.';
echo '<br>'.'<br>';

$sum = 0;
$min = 15;
$max = 0;

while ($sum < 175){
    $rand_num = rand(1,15);
    $sum += $rand_num;
    if ($rand_num > $max) {
        $max = $rand_num;
    }
if ($rand_num < $min) {
    $min = $rand_num;
}

echo $rand_num.'<br>';
}
echo '<br>';
echo 'SUM='.$sum.'<br>';
echo 'MIN='.$min.'<br>';
echo 'MAX='.$max.'<br>';

echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200. Surasti skaičių vidurkį.';
echo '<br>'.'<br>';
$sum = 0;
$vidurkis = 0;

while ($sum<= 200){
    $i = rand(1,15);
    $sum += $i;
    $kiekis++;
    echo '<br>';
    echo $i;
}

echo '<br>';
$vidurkis = $sum/$kiekis;
echo 'Vidurkis= '.$vidurkis;
echo '<br>';
echo 'Suma='.$sum;
echo '<br>';
echo 'Skaičiai='.$kiekis;
echo '<br>'.'<br>';
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100.';

$array = []; 
for($i = 0; $i < 100; $i++){
    array_push($array,$i +1);
    //   $array[$i] = ran(1,100);
}

var_dump($array);


echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '<span>16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25.</span>';

$array = [];
for($i = 0; $i < 100; $i++){
    $array[$i] = rand(10,25);
    array_push($array,$i+1);
}

var_dump($array);



echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki masyvo ilgio.';



$array = [];
$length=rand(40,60);
for($i = 0; $i <$length; $i++){
    array_push($array,$i +1);
}
var_dump($array);

echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 47.';


$array = [];
$length=rand(80,120);
for($i = 0; $i < $length; $i++){
   
    array_push($array,rand(5,47));
}
var_dump($array);
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H.';

$array = [];
$letterArray = ['D','E','F','G','H'];
for($i = 0; $i < 100; $i++){

    $randomLetter = $letterArray[rand(0,count($letterArray))-1];
array_push($array,$randomLetter);


}

var_dump($array);
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės buvo daugiausia.';

$array = [];
$letterArray = ['M','N','O','P'];
for($i = 0; $i < 100; $i++){
        $randomLetter = $letterArray[rand(0,count($letterArray)-1)];
    array_push($array,$randomLetter);

 
    
    }
    echo '<br>';
    print_r(array_count_values($array));
echo ' ________________________________________________________________________________________________________________________________________________________________<br>';
echo '21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).';

$array = [];
for ($i = 0; $i < 100; $i++){
    array_push($array, $i+1);
}

?>