<?php
$str="人易科技:上 機 測 驗 - 演算法";
echo "Answer1  ".str_replace(":", "：", $str);
echo "<br>";
$str_array=str_split($str);
$str_as2="";
for($i=0;$i<count($str_array);$i++){
    if($str_array[$i]!=' '){
        $str_as2=$str_as2.$str_array[$i];
    }
}
echo  "Answer2  ".$str_as2;   
echo "<br>";
$str_as3=explode("-",$str);
echo  "Answer3  ".$str_as3[0];   
echo "<br>";
?>