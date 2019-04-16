<?php
/**
 * Created by PhpStorm.
 * User: Heylon
 * Date: 16/04/2019
 * Time: 4:53 PM
 */
echo "Hello world!";
$variable1 = "<p>Here is some text that I'd like you to see!</p>";
?>

<html>
<body>

<?php
//For loop test
    for($i = 0; $i < 5; ++$i){
        echo $variable1 . sprintf("Iteration: %d",$i);
    }
?>

<hr>

<?php
    //Interesting syntax test
    $string1 = "Hello";
    $string2 = "World!";
    $string3 = "Very strange";
    $string4 = "Never use this technique for user input such as radio-buttons. Dangerous!!!";

    $variableNameToDisplay = sprintf("string%d",rand(1,4));

    echo sprintf("Displaying variable: <b>%s</b> which equals: <b>%s</b>",$variableNameToDisplay, $$variableNameToDisplay);

?>

<hr>

<!--Addition test-->

<form action="testing.php" method="get">
    <label>What is the sum of 10 + 10?</label>
    <input type="text" name="value1">
    <br>
    <input type="submit" value="Submit answer">
</form>

<?php
    if(true == isset($_GET['value1']) AND "" != $_GET['value1']){
        $value1 = $_GET['value1'];

        if(20 == $value1){
            echo "<font color='green'><b>20 is the correct answer, well done!</b></font>";
        }else{
            echo "<font color='red'><b>Sorry, but your answer was incorrect!</b></font>";
        }
    }else{
        echo "<font color='#ff00ff'><b>Submit an answer to test your addition skills!</b></font>";
    }
?>

<hr>

<?php
//Function definition

function averageTwoNumbers($num1, $num2){
    $total = $num1 + $num2;
    $average = $total/2.0;
    return $average;
}

$numbers = array(array(10,20), array(0,5), array(100,0), array(0,-10), array(-50,-100));

foreach ($numbers as $number){
    $average = averageTwoNumbers($number[0],$number[1]);
    echo sprintf("The average of %d and %d is %s<br>", $number[0], $number[1],$average);
}
?>

<hr>

<?php
//Randomness test
$chanceFactor = 1/1000;


//Get range
$minValue = 0;
$maxValue = 1/$chanceFactor;
$middleValue = $maxValue/2;

$iterations = 0;
while (rand($minValue,$maxValue) != $middleValue){
    //Keep guessing
    $iterations++;
}

$output = sprintf("For a 1 in %d chance of guessing the correct answer, it took %d iterations to obtain the correct guess",
    $maxValue,$iterations);
echo $output;
?>

</body>
</html>
