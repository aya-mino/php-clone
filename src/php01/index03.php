<!-- 変数/１つのデータしか入れられない、上書きされて最下行が表示 -->
<?php
$item = "JavaScript";
$item = "PHP";
$item="JavaScript";
echo $item;
echo "<br/>";
?>
<!-- 定数/税率のように固定の値を表現する -->
<?php
const FELANGUAGE="Vue.js";
echo FELANGUAGE;
echo "<br/>";
?>
<!-- データ型/数字は””いらない -->
<?php
echo 20;
echo "こんにちは";
echo "<br/>";
?>
<!-- 連結演算子/.をつけることで加工や出力できる -->
<?php
$name1="Sato"."Taro";
$name2="Tanaka";
$last_name="Yamada";
$first_name="Saburo";

echo $name1;
echo "<br/>";
echo $name2."Jiro";
echo "<br/>";
echo $last_name.$first_name;
echo "<br/>";
?>
<!-- 練習 -->
<?php
$name="Tanaka";
$last_name="Yamada";
$first_name="Saburo";

echo $name."Jiro";
echo "<br/>";
echo $last_name.$first_name;
echo "<br/>";
?>