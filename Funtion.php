<?php
// <!-- <<<<<<<<<<<<<<<<<< task 1 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 1 </b> ";
echo "<br>----------------";
echo "<br>";
function pr_Check($num)
{
    if ($num == 1)
        return 0;
    for ($i = 2; $i <= $num / 2; $i++)
        if (
            $num % $i == 0
        )
            return 0;
    return 1;
}

$num = 26;

$output = pr_Check($num);
if ($output == 1)
    echo 'prime';
else
    echo 'not prime';
echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 2 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 2 </b> ";
echo "<br>----------------";

// function str ($string){
// $length = strlen($string);
// for ($i = ($length - 1); $i >= 0; $i--) {
//     return $string[$i];
// }}
// echo str("JAVATPOINT");


function reverse_string($str1)
{
    $n = strlen($str1);
    if ($n == 1) {
        return $str1;
    } else {
        $n--;
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}
echo "<br>";
print_r(reverse_string('Abdulla Nsour') . "\n");

echo "<br><br>";
?>


<?php
// <!-- <<<<<<<<<<<<<<<<<< task 3 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 3</b> ";
echo "<br>----------------";
function is_str_lowercase($str1)
{
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (
            ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')
        ) {
            return false;
        }
    }
    return true;
}
echo "<br>";
var_dump(is_str_lowercase('abc def ghi'));echo "<br>";
var_dump(is_str_lowercase('abc dEf ghi'));
echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 4 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 4 </b> ";
echo "<br>----------------";

function swap($n, $m)
{
    $temp = $n;
    $n = $m;
    $m = $temp;
    return $n . " -- " . $m;
};
echo "<br>";
echo swap(25, 13);


echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 5 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 5 </b> ";
echo "<br>----------------";
echo 'the same with task 4';
echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 6 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 6 </b> ";
echo "<br>----------------";

$number = 407;
function armstrongNumber($number)
{
    $sum = 0;
    $numlength = strlen((string)$number);

    $array  = array_map('intval', str_split($number));

    for ($i = 0; $i < $numlength; $i++) {
        $sum += $array[$i] ** 3;
    }
    if ($sum === $number) {
        echo "<br>" . "ok" ;
    } else {
        echo "no";
    }
}

armstrongNumber($number);


echo "<br><br>";

echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 7 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 7 </b> ";
echo "<br>----------------";

function Palindrome($MyString)
{
    $revString = strrev($MyString);
    if ($revString == $MyString) {
        echo $MyString . " is a Palindrome string.\n";
    } else {
        echo $MyString . " is not a Palindrome string.\n";
    }
}
echo "<br>";
Palindrome(" radar ");
echo "<br>";
Palindrome("rubber");
echo "<br>";
Palindrome("malayalam");

echo "<br><br>";
?>

<?php
// <!-- <<<<<<<<<<<<<<<<<< task 8 >>>>>>>>>>>>>>>>>>>>> -->
echo " <b> Task 8 </b> ";
echo "<br>----------------";

$a = array(1, 2, 3, 1);
function arr ($a){
    $nsour = array_unique($a);
    print_r($nsour);
// return $a;
};

arr($a);
echo "<br><br>";
?>


