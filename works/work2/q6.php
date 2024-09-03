<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

foreach ($fruits as $name) {
    if (strlen($name) % 2 == 0) {
        echo $name . "\n";
    }
}

// for ($i = 0; $i < count($fruits); $I++) {
//     echo "$fruits[$i]\n";
// }
