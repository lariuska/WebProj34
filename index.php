<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciklai, Masyvai</title>
</head>
<body>
  <?php
echo "3. CIKLAI"."<br>";

// 3.2 Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo "<br>";
echo "3.2 uzduotis"."<br>";

$count = 0;
for ($i = 0; $i < 300; $i++) {
        $numbers = rand(0,300);
        if ($numbers > 275) {
            echo '<span style="color:red">' . $numbers . " "."</span>";
            $count++;
           } elseif ($numbers > 150) {
            echo $numbers . " ";
            $count++;
           } else 
           echo $numbers ." ";
} 
echo "<br>";
echo "Viso: " . $count ."<br>";

//3.3 Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
echo "<br>";
echo "3.3 uzduotis"."<br>";      

$numbers2 = rand(3000, 4000);
$result = "";
for ($i = 77; $i < $numbers2; $i+=77) {
     $result .= $i . ", ";   
}
echo substr($result, 0, -2) ."<br>";

//3.6 Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;
echo "<br>";
echo "3.6 uzduotis"."<br>";    

$count = 0;
while (true) { 
    $metimas = rand(0, 1);
    if ($metimas == 0) {
        echo "H";
        $count++;
        break;
    } else {
        echo "S";
    }
}
echo "<br>";

$count = 0;
while (true) { 
    $metimas = rand(0, 1);
    if ($metimas == 0) {
        echo "H";
        $count++;
        if ($count == 3)
        break;
    } else {
        echo "S";
    }
}
echo "<br>";

$count = 0;
while (true) { 
    $metimas = rand(0, 1);
    if ($metimas == 0) {
        echo "H";
        $count++;
        if ($count == 3)
        break;
    } else {
        echo "S";
    }
}
echo "<br>";




// 3,
echo "<br>";
echo "3.7 uzduotis"."<br>";



echo "<br>";

$count = 0;
do {
    $petras = rand(10, 20);
    $kazys = rand(5, 25);
    if ($petras > $kazys) {
        echo "Petras ". $petras . ", " . "Kazys ". $kazys. ". Partiją laimėjo: Petras" ."<br>";
        $petras++;
    } else {
        echo "Petras ". $petras . ", " . "Kazys ". $kazys. ". Partiją laimėjo: Kazys" ."<br>";
        $kazys++;
    }
    $count++;
} while ($count == 222); 
    


/*10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.*/




echo "<br>";
echo "4. MASYVAI"."<br>";

//4.1 Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo "<br>";
echo "4.1 uzduotis"."<br>";

$arr1 = array();
shuffle ($arr1);
for($i = 0; $i < 30; $i++){
    $arr1[$i] = rand(5, 25);

    // echo $arr1[$i]. " "."<br>";
}
print_r($arr1);

echo "<br>";
//4.2 Naudodamiesi 1 uždavinio masyvu:
//   a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo "<br>";
echo "4.2 a) uzduotis"."<br>";

$count=0;
foreach($arr1 as $value)
    if ($value > 10) 
    $count++;
echo $count ."<br>";

//   b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
echo "<br>";
echo "b) uzduotis"."<br>";

$maxValue = max($arr1);
$maxValueKeys = array_keys($arr1, $maxValue);
echo "Max: " . $maxValue . ", index: " . implode(", ", $maxValueKeys) ."<br>"; 
echo "Trumpesnis variantas"."<br>";
echo implode(", ", array_keys($arr1, max($arr1)));

echo "<br>";
//   c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
echo "<br>";
echo "c) uzduotis"."<br>";

foreach ($arr1 as $key => $value) {
    if ($key % 2 == 0)
    $event[] = $value;
}
print_r($event) ."<br>";
echo "<br>";
echo "Lyginių indeksų reikšmių suma: " . array_sum($event) ."<br>";

//   d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
echo "<br>";
echo "d) uzduotis"."<br>";

$arr2 = array();
$arr2 = (array_keys($arr1));

$arr3 = array();
foreach ($arr1 as $key => $value) {
    $arr3[$key] = $arr1[$key] - $key;
}
print_r($arr3);

echo "<br>";
echo "Antras variantas"."<br>";
foreach ($arr1 as $key => $value) {
    if(array_key_exists($key, $arr1) && array_key_exists($key, $arr2)){
        $ret[$key] = $arr1[$key] - $arr2[$key];
    }
}
print_r($ret);

echo "<br>";
//   e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo "<br>";
echo "e) uzduotis"."<br>";

$arr4 = array();
shuffle ($arr4);
for($i = 0; $i < 9; $i++){
    $arr4[$i] = rand(5, 25);
}
$allarr = array_merge($arr1, $arr4);
print_r($allarr);

echo "<br>";
//   f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo "<br>";
echo "f) uzduotis"."<br>";

$arreven = array();
$arrodd = array();

foreach ($arr1 as $key => $value) {
    if ($key % 2 == 0) 
        $arreven[] = $value;
    else{
        $arrodd[] = $value;    
    }               
}
echo "Masyvas iš neporinių indekso reikšmių"."<br>";
print_r($arrodd);
echo "<br>";
echo "Masyvas iš porinių indekso reikšmių"."<br>";
print_r($arreven);

echo "<br>";
//   g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
echo "<br>";
echo "g) uzduotis"."<br>";

$arrayeven = array();
foreach ($arr1 as $key => $value) {
    if ($key % 2 == 0 && $value > 15)
    $value = 0;
    $arrayeven[] = $value;
}
print_r($arrayeven) ."<br>";

echo "<br>";
//   h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
echo "<br>";
echo "h) uzduotis"."<br>";

$allKeys = array_filter($arr1, function($number) {
    return $number > 10;
});
print_r($allKeys) ."<br>";
echo "<br>";

$firstKey = array_key_first($allKeys)."<br>";
print_r($firstKey) ."<br>";

//   i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo "<br>";
echo "i) uzduotis"."<br>";

// $arrunset = array();
foreach ($arr1 as $key => $value) {
    if ($key % 2 == 0)
   unset($arr1[$key]);
}
print_r($arr1) ."<br>";
// $arrunset = $arr1;
// print_r($arrunset) ."<br>";

echo "<br>";
//4.3 Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
echo "<br>";
echo "4.3 uzduotis"."<br>";

$arrabcd = str_repeat("ABCD", 50);
$arrlen = str_split($arrabcd);
shuffle ($arrlen);
print_r($arrlen);

echo "<br>";
print_r(array_count_values($arrlen));

echo "<br>";
echo "<br>";
echo "----------------"."<br>";

$arrdu = array();
for ($i = 0; $i < 200; $i++) {
    $arrdu[] = chr(rand(65, 68));
}
print_r($arrdu);
echo "<br>";
print_r(array_count_values($arrdu));


echo "<br>";
//4.4 Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
echo "<br>";
echo "4.4 uzduotis"."<br>";

$arrsort = $arrdu;
sort($arrsort);
print_r($arrsort);

echo "<br>";
echo "----------------<br>";


?>
<script>
    console.log("<?=$starWars?>");
</script>

<script src="./js/script.js"></script>

</body>
</html>