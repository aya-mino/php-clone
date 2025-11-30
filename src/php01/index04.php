<!-- 算術演算子 -->
<?php
$a=15;
$b=3;
$c=10;

$answer1=$a+$b;
$answer2=$a-$b;
$answer3=$a*$b;
$answer4=$a-$c;
$answer5=$a/$b;

echo $answer1;
echo "<br/>";
echo $answer2;
echo "<br/>";
echo $answer3;
echo "<br/>";
echo $answer4;
echo "<br/>";
echo $answer5;
echo "<br/>";
?>

<!-- 代入演算子と複合演算子 -->
<?php
$a=15;
$b=3;
$c=10;
$d=5;

$answer1=$a/=$d;
$answer2=$b*=$d;

echo $answer1;
echo "<br/>";
echo $answer2;
echo "<br/>";
?>

<!-- 比較演算子 -->
<?php
$a=20;
$b=5;

echo($a>$b);
echo "<br/>";
?>

<!-- 論理演算子 -->
<?php
$a=20;
$b=5;

echo($a>10 && $a<30);
echo "<br/>";
?>

<!-- 加算子と減算子 -->
<?php
$a=10;
$b=10;
$c=5;
$d=5;

echo ++$a;
echo "<br/>";
echo $b++;
echo "<br/>";
echo --$c;
echo "<br/>";
echo $d--;