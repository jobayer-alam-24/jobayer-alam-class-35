<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #4d87e3;
            font-family: verdana, sans-serif;
        }
        h4{
            color: white;
        }
    </style>
</head>
<body>
  
</body>
</html>

<?php
    //Problem 1.
    function evenOdd($num){
        if($num % 2 == 0){
            echo "Even: " . $num . "<br>";
        }else{
            echo "Odd: " . $num . "<br>";
        }
    }
    evenOdd(1);

     //Problem 2.
     function posiNegative($num){
        if($num < 0){
            echo "Negative: " . $num . "<br>";
        }else{
            echo "Positive: " . $num . "<br>";
        }
    }
    posiNegative(-4);


    //Problem 3.
    function markingSort($marks) {
        foreach ($marks as $mark) {
            $grade = "";
            $color = "";
            if ($mark >= 80) {
                $grade = "A+";
                $color = "#e3b64d";
            } elseif ($mark >= 70) {
                $grade = "A";
                $color = "blue";
            } elseif ($mark >= 60) {
                $grade = "B";
                $color = "orange";
            } elseif ($mark >= 50) {
                $grade = "C";
                $color = "purple";
            } elseif ($mark >= 40) {
                $grade = "D";
                $color = "brown";
            } else {
                $grade = "F";
                $color = "red";
            }
            echo "<h4>You have got <b style='color: {$color};'>{$grade}</b> by Scoring: {$mark}</h4>";
        }
    }
    
    $studentMarks = [95, 94, 85, 83, 44, 35, 56, 53, 75, 60];
    markingSort($studentMarks);

    //Problem 4.
    function greatestNumberFind($got1, $got2, $got3){
        $num1 = $got1;
        $num2 = $got2;
        $num3 = $got3;

        $greatestOrEqual = null;
       if(($num1 == $num2) && ($num2 == $num3) && ($num1 == $num3)){
            $result = "{$num1} == {$num2} == {$num3}";
       }
       elseif(($num1 > $num2) && ($num1 > $num3)){
            $result = "{$num1} is the Longest! <br>";
       }
       elseif(($num2 > $num1) && ($num2 > $num3)){
            $result = "{$num2} is the Longest! <br>";
       }
       else{
            $result = "{$num3} is the Longest! <br>";
       }
       return $result;
    }
    $result = greatestNumberFind(40, 45, 55);
    echo "Result: {$result}";


    //operation functions
    function addTen($nums) {
        $resultArray = [];

        foreach($nums as $single) {
         $result = $single + 10;  
         $resultArray[] = $result; 
     }  
         $newArray = implode(", ", $resultArray);
         return $newArray;
    }function doubleNum($nums) {
        $resultArray = [];

        foreach($nums as $single) {
         $result = $single * 2;  
         $resultArray[] = $result; 
     }  
         $newArray = implode(", ", $resultArray);
         return $newArray;
    }
    function squareNum($nums) {
        $resultArray = [];

       foreach($nums as $single) {
        $result = $single * $single;  
        $resultArray[] = $result; 
    }  
        $newArray = implode(", ", $resultArray);
        return $newArray;
    }
    //operation functions

    //double number make
    function doubleMake($caught){
        echo implode(", ", $caught) . "<br>";
        $newArray = squareNum($caught);
        echo "Square of above values: " . $newArray . "<br>"; 
        $doubleArray = doubleNum($caught);
        echo "Double of above values: " . $doubleArray . "<br>"; 
        $tenPlusArray = addTen($caught);
        echo "Added Ten of above values: " . $tenPlusArray; 
    }
    $pass = array(2, 3, 5, 7, 11, 13);
    echo doubleMake($pass);
?>