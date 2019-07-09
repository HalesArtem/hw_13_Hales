<?php
// Массив слов
$searchWords = ['php','html','интернет','Web'];

// Массив строк
$searchStrings = [
	'Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
	'PHP - это распространенный язык программирования с открытым исходным кодом.',
	'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML'
];
         $internet = 'интернет';

foreach ($searchStrings as $searchString){
    echo preg_match('/'.$internet.'/i',$searchString);
}












//echo preg_match('/' . $searchWords[0] . '/i', $searchStrings[0]);

//
//function search($words, $strings)
//{
//    foreach ($strings as $string =>$value) {
//        foreach ($words as $word ) {
//            if (preg_match('/'.$word.'/i',$value)){
//                $test[] = $word;
//                return $test;
//            }    else{
//                continue;
//            }
//        }
//    }
//}
//




//print_r(search($searchWords,$searchStrings));
//foreach ($searchStrings as $searchString){
//if (preg_match('//'))
//
//}
//
//
//
//$str = 'PHP hypertext processor';
//$php = '/PHP/i';
////preg_match(pattern, subject) ; // найти отдельное слово
////
////preg_match('/PHP/', $str) //есть ли слово php в этой переменной
////
//if (preg_match($php, $searchWords[0])){
//    echo 'есть ';
//}else {
//    echo 'FALED';
//}
//
////'/ text/i' - не важно с каких букв
//'/^text/i' - не важно с каких букв + если это находится в самом начале (^)
//'/^text$/i' - не важно с каких букв + если это находится в конце начале ($)

// [abc] тут должен быть один из символов
