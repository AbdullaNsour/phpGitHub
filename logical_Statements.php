<!-- <<<<<<<<<<<<<<<<<< task 1 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 1- Write a php script to see if the specified your is a leap year or not. -->
<!-- sample input : 2013 -->
<!-- sample output: This year is not a leap year. -->

<?php
echo " <b> Task 1 </b> ";
echo "<br>----------------";

function year_check($my_year)
{
    if ($my_year % 400 == 0) print("It is a leap year");
    else if ($my_year % 100 == 0) print("It is not a leap year");
    else if ($my_year % 4 == 0) print("It is a leap year");
    else print("It is not a leap year");
}
echo "<br><br>";
$my_year = 2024;
year_check($my_year);

echo "<br><br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 2 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 2- Write a php script to check the season depending on the inserted temperature 
if the temperature is beleow 20, we are in winter otherwise the season is summer.-->
<!-- sample input : 27 -->
<!-- sample output: It's summertime!. -->
<?php
echo " <b> Task 2 </b> ";
echo "<br>----------------";

function temp($per)
{
    if ($per < 20) print("It is a snowtime");
    else if ($per >= 20) print("It is a summertime");
}
echo "<br><br>";
$per = 19;
temp($per);

echo "<br><br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 3 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 3- Write a php script to calculate the sum of the two integers, if the two values 
are the same, then calulate the triple of their sum.-->
<!-- sample input : [firstinteger => 2, secondinteger => 2] -->
<!-- sample output: ( 2 + 2 ) * 3 = 12. -->
<?php
echo " <b> Task 3 </b> ";
echo "<br>----------------";

function integer($num1, $num2)
{
    if ($num1 == $num2) {
        $num = ($num1 + $num2) * 3;
        echo "<br><br>";
        echo $num;
    } else { 
        echo "<br><br>";
        echo 'the number is not the same';
    }
}
integer(2,3);
echo "<br><br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 4 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 4- Write a php script to calculate the sum of the two integers, if the two values 
are the same, then calulate the triple of their sum.-->
<!-- sample input : [firstinteger => 2, secondinteger => 2] -->
<!-- sample output: ( 2 + 2 ) * 3 = 12. -->
<?php
echo " <b> Task 4 </b> ";
echo "<br>----------------";

function sumIntegers2($fir, $sec)
{
    if ($fir + $sec == 30) {
        $sum1 = ($fir + $sec);
            echo $sum1;
    } else {
            echo "false";
    }
}
echo "<br><br>";
sumIntegers2(10,20);
echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 5 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 5- Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.-->
<?php
echo " <b> Task 5 </b> ";
echo "<br>----------------";


function positive_number($n) 
{
return $n % 3 == 0 || $n % 7 == 0;
}
echo "<br><br>";
var_dump(positive_number(3));
var_dump(positive_number(14));
var_dump(positive_number(12));
var_dump(positive_number(37));

echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 6 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 6- write a php script to check if the integer value is in the range.-->
<!-- sample input = 50 -->
<!-- sample output: true. -->
<?php
echo " <b> Task 6 </b> ";
echo "<br>----------------";

function test($x)
{
    return ($x <= 20 ) || ( $x >= 50);
}
echo "<br><br>";
var_dump(test(84));
var_dump(test(50));
var_dump(test(11));
var_dump(test(25));

echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 7 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 7- write a php script to find the largest number between the three integers.-->
<!-- sample input = [1, 5, 9]-->
<!-- sample output: 9. -->
<?php
echo " <b> Task 7 </b> ";
echo "<br>----------------";

function largestInteger($num1, $num2, $num3)
{


    if ($num1 > $num2 && $num1 > $num3) {
        echo $num1;
    } else {
        if ($num2 > $num1 && $num2 > $num3) {
            echo $num2;
        } else
            echo $num3;
    }
}
echo "<br><br>";
largestInteger(20, 30, 10);

echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 8 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 8- write a php script to find the largest number between the three integers.-->
<!-- sample input = [1, 5, 9]-->
<!-- sample output: 9. -->
<?php
echo " <b> Task 8 </b> ";
echo "<br>----------------";

function monthlyElec($unit)
{

    if ($unit <= 50) {
        echo 2.5 * $unit . " JOD";
    } elseif ($unit > 50 && $unit <= 100) {
        echo 5 * $unit . " JOD";
    } elseif ($unit > 100 && $unit <= 250) {
        echo 6.20 * $unit . " JOD";
    } else {
        echo 7.5 * $unit . " JOD";
    }
}
echo "<br><br>";
monthlyElec(50);

echo "<br><br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 9 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 9- write a php script to find the largest number between the three integers.-->
<!-- sample input = [1, 5, 9]-->
<!-- sample output: 9. -->
<?php
echo " <b> Task 9 </b> ";
echo "<br>----------------";

function calcu($x, $y, $operation)
{
    if ($operation == "addition") {
        echo $x + $y;
    } elseif ($operation == "subtraction") {
        echo $x - $y;
    } elseif ($operation == "multiplication") {
        echo $x * $y;
    } else {
        echo $x / $y;
    }
}

echo "<br><br>";
calcu(10, 5, 'subtraction');

echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 10 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 10- write a php script to find the largest number between the three integers.-->
<!-- sample input = [1, 5, 9]-->
<!-- sample output: 9. -->
<?php
echo " <b> Task 10 </b> ";
echo "<br>----------------";

function eligibleToVote($age)
{
    if ($age >= 18) {
        echo "is eligible to vote";
    } else {
        echo "is no eligible to vote";
    }
}
echo "<br><br>";
eligibleToVote(18);

echo "<br><br>";
?>


<!-- <<<<<<<<<<<<<<<<<< task 11 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 11- write a php script to find the largest number between the three integers.-->
<!-- sample input = [1, 5, 9]-->
<!-- sample output: 9. -->
<?php
echo " <b> Task 11 </b> ";
echo "<br>----------------";

function numbersSort($num)
{
    if ($num >= 0) {
        echo "positive";
    } elseif ($num = 0) {
        echo "zero";
    } else {
        echo "negative";
    }
}
echo "<br><br>";
numbersSort($num);

echo "<br><br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 12 >>>>>>>>>>>>>>>>>>>>> -->
<!-- 12- write a php to find the grade for the student, after calculating the 
average of his score in all the subject.-->
<!-- sample input = [60,86,95,63,55,74,79,62,50]-->
<!-- sample output: D. -->
<?php
echo " <b> Task 12 </b> ";
echo "<br>----------------";


// function aver ($smith){
// if ($smith/4 >= 90) print("A");
// else if ($smith/4 >= 80) print("B");
// else if ($smith/4 >= 70) print("C");
// else if ($smith/4 >= 60) print("D");
// else if ($smith/4 <= 59) print("F");
//     return ($smith);
// }
// echo $smith ;

function grade1(array $values)
{
    $avg = array_sum($values) / count($values);
    // echo $avg;

    switch ($avg > 0) {
        case $avg >= 90 && $avg <= 100:
            echo "A";
            break;
        case  $avg >= 80 && $avg <= 89:
            echo "B";
            break;
        case $avg >= 70 && $avg <= 79:
            echo "C";
            break;
        case  $avg >= 60 && $avg <= 69:
            echo "D";
            break;
        case  $avg >= 0 && $avg <= 59:
            echo "F";
    }
}
echo "<br><br>";
grade1([90, 80, 88, 85, 86, 90, 100]);

echo "<br><br>";
?>