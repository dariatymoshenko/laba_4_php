 <?php
$mas1 = array(1,2,37,45,7,9,90,12,5,8,99,3,2,1);
$mas2 = array(1,2,76,76,67,67,8,9,12,3,89,68,100,45);
$dubl_mas1_mas2 = array_intersect($mas1,$mas2);
$slianie_mas1_mas2 = array_unique(array_merge(array_unique($mas1),array_unique($mas2)));

$slianie_mas1_mas2 = array_reverse($slianie_mas1_mas2);
foreach($slianie_mas1_mas2 as $currentElement) {}

echo "<pre>";
var_dump($mas1);
echo "</pre>";
echo "<pre>";
var_dump($mas2);
echo "</pre>";
echo "<pre>";
var_dump(array_unique($mas1));
echo "</pre>";
echo "<pre>";
var_dump(array_unique($mas2));
echo "</pre>";
echo "<pre>";
echo(count($dubl_mas1_mas2));
echo "</pre>";
echo "<pre>";
var_dump($slianie_mas1_mas2);
echo "</pre>";
?>