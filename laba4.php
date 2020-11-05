 <?php
$mas1 = array(1,2,37,45,7,9,90,12,5,8,99,3,2,1);
$mas2 = array(1,2,76,76,67,67,8,9,12,3,89,68,100,45);
$dubl_mas1_mas2 = array_intersect($mas1,$mas2);
$slianie_mas1_mas2 = array_unique(array_merge(array_unique($mas1),array_unique($mas2)));
//$slianie_mas1_mas2 = array_reverse($slianie_mas1_mas2);


echo "<pre>";
print_r($mas1);
echo "</pre>";
echo "<pre>";
print_r($mas2);
echo "</pre>";
echo "<pre>";
print_r(array_unique($mas1));
echo "</pre>";
echo "<pre>";
print_r(array_unique($mas2));
echo "</pre>";
echo "<pre>";
echo(count($dubl_mas1_mas2));
echo "</pre>";
echo "<pre>";
print_r($slianie_mas1_mas2);
echo "</pre>";
$mas4 = array();
$mas3 = array(1,2,37,45,7,9,90,12,5,8,99,3,2,1);
for ($i=count($mas3)-1;$i>=0;$i--){
	echo $i.' => '.$mas3[$i].'<br>';
	
	$mas4[] =$mas3[$i];
	}
foreach ($mas4 as $key => $value) 
{
	echo $value.'<br/>';
}

?>
