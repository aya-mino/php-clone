<!-- if -->
<?php
$a=5;

if($a===5){
echo "\$aは5です";
}
echo "<br/>";
?>
<!-- if else -->
<?php
$a=7;

if($a===5){
echo "\$aは5です";
}else{
echo "\$aは5以下です";
echo "<br/>";
}
?>
<!-- if ~ elseif ~ else -->
<?php
$a=7;

if($a===5){
echo "\$aは5です";
}elseif($a===7){
echo "\$aは7です";
echo "<br/>";
}else{
echo "\$aは5と7以外です";
}
?>
<!-- switch 文 -->
<?php
$people="Saburo";

switch($people){
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}
?>
<br/>
<!-- 三項演算子 -->
<?php
$a=7;
$b=($a>5)?"TRUE":"FAlSE";
echo $b;
?>