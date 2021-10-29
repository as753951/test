<?php
$num_array=[0,1,2,3,4,5,6,7,8,9];
$odd_num_sum=0;
$even_num_sum=0;
$odd_num_array=array();
$even_num_array=array();
for($i=0;$i<count($num_array);$i++){
    if($num_array[$i]%2==0){
        $even_num_sum+=$num_array[$i];
        $even_num_array[count($even_num_array)]=$num_array[$i];
    }else{
        $odd_num_sum+=$num_array[$i];
        $odd_num_array[count($odd_num_array)]=$num_array[$i];
    }
}
echo "Answer1  ".$odd_num_sum-$even_num_sum;
echo "<br>";
echo "Answer2  ";
echo "<br>";
echo "偶數陣列";
print_r($even_num_array);
echo "<br>";
echo "奇數陣列";
print_r($odd_num_array);
echo "<br>";
?>