<?php

echo 'we love php';
echo "<br>";
echo " let's try to create repo to htdocs to qick access to github";
echo "<br>";
$a = 'Abdulla';
echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 1 >>>>>>>>>>>>>>>>>>>>> -->

<?php
echo " <b> Task 1 </b> ";
echo "<br>----------------";
echo "<br>";
echo strtoupper("Hello WORLD!");
echo "<br>";
echo strtolower("Hello WORLD.");
echo "<br>";
echo ucfirst("hello world");
echo "<br>";
echo ucwords("hello world my name is abdulla");
echo "<br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 2 >>>>>>>>>>>>>>>>>>>>> -->


<?php
echo "<br>";
echo " <b> Task 2 </b> ";
echo "<br>----------------";
echo "<br>";

$DATE = "20091231190903";
echo date("Y-m-d H:i:s", (strtotime($DATE)));
echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 3 >>>>>>>>>>>>>>>>>>>>> -->

<?php
echo "<br>";
echo " <b> Task 3 </b> ";
echo "<br>----------------";
echo "<br>";

$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";
// Test if string contains the word 
if (strpos($mystring, $word) !== false) {
  echo "Word Found!";
} else {
  echo "Word Not Found!";
}
echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 4 >>>>>>>>>>>>>>>>>>>>> -->

<?php
echo "<br>";
echo " <b> Task 4 </b> ";
echo "<br>----------------";
echo "<br>";

$path = 'https://github.com/AbdullaNsour/phpGitHub';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 5 >>>>>>>>>>>>>>>>>>>>> -->

<?php
echo "<br>";
echo " <b> Task 5 </b> ";
echo "<br>----------------";
echo "<br>";

$mailid  = 'alnsour.194@gmail.com';
$user = strstr($mailid, '@', true);
echo $user . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 6 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 6 </b> ";
echo "<br>----------------";
echo "<br>";

$str1 = 'alnsour.194@gmail.com.jo';
echo substr($str1, -3) . "\n";

echo "<br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 7 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 7 </b> ";
echo "<br>----------------";
echo "<br>";
function password_generate($chars)
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7) . "\n";

echo "<br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 8 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 8 </b> ";
echo "<br>----------------";
echo "<br>";

$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'our', $str, 1) . "\n";

echo "<br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 9 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 9 </b> ";
echo "<br>----------------";
echo "<br>";
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf(
  'First difference between two strings at position %d: "%s" vs "%s"',
  $str_pos,
  $str1[$str_pos],
  $str2[$str_pos]
);
printf("\n");
echo "<br>";
?>
<!-- <<<<<<<<<<<<<<<<<< task 10 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 10 </b> ";
echo "<br>----------------";
echo "<br>";



echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 11 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 11 </b> ";
echo "<br>----------------";
echo "<br>";

$f_letter = 'Z';
$testLetter = $f_letter;
$next_f_letter = ++$f_letter;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_f_letter) > 1) {
  $next_f_letter = $next_f_letter[0];
}
echo "next letter after $testLetter is :" . $next_f_letter . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 12 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 12 </b> ";
echo "<br>----------------";
echo "<br>";

$original_string = 'The brown fox';
$string_to_insert = 'quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert . ' ', $insert_pos, 0);
echo $new_string . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 13 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 13 </b> ";
echo "<br>----------------";
echo "<br>";

$x = '000547023.24';
$str1 = ltrim($x, '0');
$str2 = str_replace(0, '', $x);
echo $str1;
echo "<br>";
echo $str2;

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 14 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 14 </b> ";
echo "<br>----------------";
echo "<br>";

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str) . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 15 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 15 </b> ";
echo "<br>----------------";
echo "<br>";

$my_str = 'The quick brown fox jumps over the lazy dog ---//%-';
echo rtrim($my_str, '- & / & %') . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 16 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 16 </b> ";
echo "<br>----------------";
echo "<br>";

$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str) . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 17 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 17 </b> ";
echo "<br>----------------";
echo "<br>";

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5)) . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 18 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 18 </b> ";
echo "<br>----------------";
echo "<br>";

$str1 = "2,543.12";
$x = str_replace(',', '', $str1);
echo $x . "\n";

echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 19 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 19 </b> ";
echo "<br>----------------";
echo "<br>";

for ($x = ord('a'); $x <= ord('z'); $x++)
  echo chr($x) . ' ';
echo "<br>";

foreach(range('a','z')as $char ){
  echo $char . ' ';
};
echo "<br>";
?>

<!-- <<<<<<<<<<<<<<<<<< task 20 >>>>>>>>>>>>>>>>>>>>> -->
<?php
echo "<br>";
echo " <b> Task 20 </b> ";
echo "<br>----------------";
echo "<br>";


$my_string = 'The/quick brown*fox jumps over the lazy dog';

$test1 = str_replace(str_split('\\/:*?"<>|+-""'), ' ', $my_string) . "\n";

echo implode(' ', array_slice(explode(' ', $test1), 0, 5)) . "\n";

echo "<br>";
?>