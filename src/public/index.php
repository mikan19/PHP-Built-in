<?php
//課題①「$num」の値の小数点以下を切り捨てし出力しましょう。（期待する出力: 3）
$num = 3.5;
 echo floor($num);

 //課題②「$num」の値の小数点以下を切り上げし出力しましょう。（期待する出力: 4）
 $num = 3.2;
  echo ceil($num);

//課題③「$word」の文字列を逆順にして出力しましょう。（期待する出力: !dlrow olleH）
$word = "Hello world!";
 echo strrev($word);

 //課題④「$word」の文字列を大文字にして出力しましょう。（期待する出力: ORANGE）
 $word = "orange";
  echo strtoupper($word);

//課題⑤$food配列に含まれる要素の数を出力しましょう。（期待する出力: 4）
$food = ['orange', 'banana', 'apple', 'carrot'];
 echo count($food);

 //課題⑥$food配列の要素を昇順に並び替え、var_dump()しましょう。
 $food = ['orange', 'banana', 'apple', 'carrot'];
 sort($food);
 var_dump($food);

 //課題⑦$food配列の重複する要素を削除し、var_dump()しましょう。
 $food = ["orange", "banana", "apple", "carrot", "apple", "apple", "orange"];
 $food = array_unique($food);
 var_dump($food);








