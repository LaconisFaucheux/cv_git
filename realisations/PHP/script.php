<?php
$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

$regex = $data['regex'];
$draw = $data['draw'];
$jsonadress = "../js/wordslist.json";
$wordslist = json_decode(file_get_contents($jsonadress), true);
$wordslistArray = [] ;
$answers = [];

foreach ($wordslist as $key => $wordArray) {
    $wordslistArray[] = $wordArray['list'];
}

$answers = preg_grep($regex, $wordslistArray, PREG_GREP_INVERT); // exclusion des mots qui comportent des lettres absentes du tirage

$drawFrequency = array_count_values((mb_str_split($draw))); //retourne dans un tableau associatif chaque lettre en indice et sa fréquence en valeur


//on compare chaque lettre et sa fréquence de chaque réponse possible avec les lettres et les fréquences du tirage
foreach ($answers as $k => $value) {
    $answersFrequency = array_count_values((mb_str_split($value)));
    foreach ($answersFrequency as $letter => $frequency) {
        if ($frequency > $drawFrequency[$letter]) {
            unset($answers[$k]);
        }
    }
}

$answers2 = array_values($answers);

function stringLengthSort($str1, $str2) : int {
    $str1 = strlen($str1);
    $str2 = strlen($str2);
    if ($str1 == $str2){
        return strcmp($str1, $str2);
    }
    return ($str1 > $str2) ? -1 : 1;
}

usort($answers2, 'stringLengthSort');

echo json_encode($answers2);