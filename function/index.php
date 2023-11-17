<?php
// 自訂函式

$c=20;
function sum($a,$b){
	global $c;
	// 全域的變數c
	$sum=$a+$b+$c;
	// 這時才可以在function裡面執行
	echo "輸入:".$a. "、".$b;
	echo"<br>";
	return $sum;
}

// 自訂函式本身也是個變數

$sum=sum(10,20);
echo "總和是:" .$sum;
echo "<hr>";
$sum=sum(17,22);
echo "總和是:" .$sum;
echo "<hr>";

echo "總和是:" .sum(21,58);

// 有發現因在自訂函式已加入全域變數c 所以後面在執行的都會把c也加進去
// 註解變數c 即使裡面有global宣告 也不影響程式執行
// 程式的執行是有順序及會承接執行下來 所以在寫程式時要注意順序邏輯

?>

<!-- 自訂函式只執行funcion{}裡面 全域的不管 -->
