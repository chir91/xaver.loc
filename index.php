<?php
    error_reporting(E_ERROR|E_PARSE|E_NOTICE);
    ini_set('display_errors', 1);

    //Задание 1
$name = "Алексей";
$age  = 25;
echo "Меня зовут $name <br /> ";
echo "Мне $age лет <br />";
unset($name);
unset($age);
    //Задание 2

echo "<br/>","<br/>" ;

define ("MY_CITY", "Благовещенск");

if(MY_CITY){
echo 'Мой город: Благовещенск ';
} else {
echo 'Константа MY_CITY не задана';     
}
    
    //Задание 3
    $book = array('title'=>'"Скотный двор"','author'=>'Джорж Оруэл','pages'=>'460');


echo "Недавно я прочитал книгу '.$book ['title'].', написанную автором '.$book ['author'].' "
        . "я осилил все '.$book ['pages'].' страниц, мне она очень понравилась ";
    //Задание 4
$books=array(
      array('title'=>'"Скотный двор"','author'=>'Джорж Оруэл','pages'=>'460');
      array('title'=>'"451 градус по фарингейту"','author'=>'Рэй Бредберри','pages'=>'300');  
);
echo 'Недавно я прочитал две книги  '. $books[0]['title'].' и '.$books[1]['title']. ', написанные соответственно авторами  '.$books[0]['author'].' и '.$books[1]['author'].', я осилил в сумме '.($books[0]['pages']+$books[1]['pages']).' страниц, не ожидал от себя такого.';
?>

