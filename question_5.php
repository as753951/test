<?php
$a=[77,5,5,22,13,55,97,4,796,1,0,9];
$b=[0,1,2,3,4,5,6,7,8,9];
$c=array();
$d=array();
$e=array();
for($i=0;$i<count($a);$i++){
    $e[count($e)]=$a[$i];
    for($j=0;$j<count($b);$j++){
        if($a[$i]==$b[$j]){
            $c[count($c)]=$a[$i];
        }
        if($i==count($a)-1){
            $e[count($e)]=$b[$j];
        }
    }
}
for($i=0;$i<count($e);$i++){
    $d_check=true;
    for($j=0;$j<count($c);$j++){
        if($e[$i]==$c[$j])
            $d_check=false;
    }
    if($d_check)
        $d[count($d)]=$e[$i];
}
echo "陣列c ";
print_r($c);
echo "<br>";
echo "陣列d ";
print_r($d);
echo "<br>";
echo "陣列e ";
print_r($e);
?>