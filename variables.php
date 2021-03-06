<?php

$name="Suprabhat  ";  // white spaces are counted in strlen.
$income = 200000000;
echo var_dump($name); // string(9) "Suprabhat"  //var_dump tells data type, length of string and value. 
echo "<br>";
$check = false;
echo var_dump($check); // bool(true)  // for bool values, var_dump tells data type and value.
echo "<br>My name is $name and salary is $income";

// more about variables
echo "<br> variables start with a $ symbol";
echo "<br> variables' name don't start with a number";
echo "<br> variables' name start with a character, underscore";
echo "<br> variables contain alphanumeric";
echo "<br> variables are case sensitive.";
echo "<br>";

// Arrays
$friends = array("abcd","efgh","ijkl","mnop");
echo var_dump($friends);   // for printing the details of array.
foreach($friends as $value){
    echo "<br>$value<br>";
}
echo "<br>";
echo $friends[0];
echo "<br>";

// String
$name = "Kumar is my name";
echo "The salary is " . $name;
echo "<br>";
echo "The length is " . strlen($name) . " and the word count is " . str_word_count($name); // str_word_count($name) gives the words count.
echo "<br>";
echo strrev($name);  // to reverse the string.
echo "<br>";
echo strpos($name, "is"); // output is 6. // strpos counts whitespaces too.
echo "<br>";
echo str_replace("Kumar","Suprabhat",$name); // replace "Kumar" with "Suprabhat" in $name.

/* Operators
 1. Arithmetic 
 2. Assignment // =, %=, -=, +=
 3. Comparison // <> is not equal to operator. $a <> $b
 4. Logical  // and, or, &&, ||, ! are used for boolean
*/

// Arithmetic
$a=8;
$b=5;
echo "<br>";
echo "The value of a+b is " . ($a + $b);
echo "<br>";
echo "The value of a == b is ";
echo var_dump($a == $b); // php does not print false value. So, we use var_dump() to get the false value.
echo "<br>";

// Switch 
$age =  33;

switch($age){
    case 12:
        echo "Age is 12";
        break;
    case 24:
        echo "Age is 24";
        break;
    case 36:
        echo "Age is 36";
        break;
    case 48:
        echo "Age is 48";
        break;
    default:
       echo "Age is $age";
}

// for loop
for( $i=0; $i<10; $i++ ){
    echo "Value is $i <br>";
}

// while loop
$i=0;
while($i<5)
{
    echo "Value is $i <br>";
    $i++; // $i++;
}

// function
function getSum($arr){
    $sum=0;
    foreach($arr as $val){
        $sum += $val;
    }
    return $sum;
}

$marks = array(56,56,67,78,89);
echo "<br>";
echo var_dump($marks); // var_dump is required to print array;
echo "<br>";
$value = getSum($marks);
echo "The total sum is $value";


// Dates
echo "<br>";
echo date("dS D Y, g:i A");  // https://www.w3schools.com/php/func_date_date.asp
echo "<br>";
echo date(DATE_RFC822);

// Associative Arrays -> contains key => value pair
$colors = array('kumar' => 'red', 'supra' => 'blue', 'avinash' => 'green', 8 => '6');
foreach ($colors as $key => $value){
    echo "<br>Color of $key is $value";
}

// MultiDimensional Array 
$multiDimArray = array(array(1,2,3,4), array(5,6,7,8), array(9,10,11,12));
echo "<br>";
echo var_dump($multiDimArray);  // var_dump is required to print multiDimArray;
echo "<br>";
echo $multiDimArray[0][3];
echo "<br>";

for($i=0; $i<count($multiDimArray); $i++) {
    for($j=0; $j<count($multiDimArray[$i]); $j++){
        echo $multiDimArray[$i][$j];
        echo " ";
    }
    echo "<br>";
}

$x=98;
// function printVal() {
//     // $x=9;
//     echo $x;  // Won't print 98 as global variables are outside the scope of functions.
// }

// echo "<br>";
// echo $x;
// echo "<br>";
// echo printVal();

function globalPrintVal() {
    // $x=9;
    global $x; // global keyword will let the function to access global variables.
    echo $x;

}
// echo "<br>";
// echo $x;
// echo "<br>";
// echo globalPrintVal();


function globalVal() {
    // $x=9;
    global $x; 
    $x=100;  // using this line, we can modify the value of global variables.
    echo $x;

}
// echo "<br>";
// echo $x;
echo "<br>";
echo globalVal();
echo "<br>";
echo $x;  // output will be 100 as line 162 modified the global variable's value.
echo "<br>";
echo var_dump($GLOBALS);  // used to print all the global key,value pair.
foreach($GLOBALS as $key => $val){
    echo "<br>";
    echo "$key => $val";
}
?>