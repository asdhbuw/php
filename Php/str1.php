<?php
$str = "Hello world from Russia!";
$strRev = strrev($str);
echo strpos($strRev, "O");
echo $strRev;

// $str = "Hello world from Russia!";
// $newStr = str_replace()
// $words = explode(' ', $str);
// $sttring = implode(',', $words);
// echo "<p>$string</p>";

echo '<h1>Задание 1</h1>';
$str = 'hello (word) eee';
$open = strpos($str, "(");
$close = strpos($str, ")");
echo substr($str, $open + 1, $close - $open - 1);


echo '<h1>Задание 2</h1>';
$str = 'hello (word) skiie';
echo str_word_count($str);


echo '<h1>Задание 3</h1>';
$str = 'bob bee ohho bear';
$array = explode(" ", $str);

foreach($array as $word){
    $firstLetter = $word[0];
    $lastLetter = $word[strlen($word) - 1];
    
    if ($firstLetter == $lastLetter){
        $result[] = $word;
    }
}

foreach($result as $word){
    echo $word, " ";
}


echo '<h1>Задание 4</h1>';
$str  = "Hello world!";
echo "Уникальные символы: ",count_chars($str, 3);


echo '<h1>Задание 5</h1>';
$str = 'marat kollr';
$t = 0;
$r = 0;
$k = 0;
for($i = 0; $i <= strlen($str); $i++){
    if($str[$i] == "k"){
        $k++;
    }elseif($str[$i] == "t"){
        $t++;
    }elseif($str[$i] == "r"){
        $r++;
    }
}
echo "r =  $r, t = $t, k = $k";


echo '<h1>Задание 6</h1>';
$str = "Hello word and bob and Aristarh";
