<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//question1
echo( "<br>Q:1.solution :" );  

$numbers =[10,5,15,8,2,60];
$greatest=$numbers[0];
$smallest=$numbers[0];
for($i=1;  $i<count($numbers);  $i++){
if($numbers[$i]>$greatest){
   $greatest=$numbers[$i];
}
if($numbers[$i]<$smallest){
    $smallest=$numbers[$i];

}

}
echo" <br>the greatest number is:".$greatest."/n";
echo" <br>the smallest number is:".$smallest."/n";
echo"<br>";
//question2
echo( "<br>Q:2.Answer is :" );  
"<br>";

for($i=3; $i<=20; $i+=2){
  
    echo $i."<br>";

}
//question3
echo( "<br>Q:3.solution is:" );  
"<br>";
for($i = 1; $i <= 50; $i++ ){
    if( $i % 5 === 0){
        echo $i . "<br>";
    }
}
//question4

echo( "<br>Q:4.solution is:" ); 


function getFactors($number) {
    $factors = [];

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $factors[] = $i;
        }
    }

    return $factors;
}

$number = 42;
$factors = getFactors($number);

echo "The factors of " . $number . " are: ";
foreach ($factors as $factor) {
    echo $factor . " ";
}


"<br>";

//question5
echo( "<br>Q:5.solution is:" ); 
function PrimeNum($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function GETPrimeFactors($number) {
    $primeFactors = [];

    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i === 0 && primeNum($i)) {
            $primeFactors[] = $i;
        }
    }

    return $primeFactors;
}

$number = 42;
$primeFactors = GETPrimeFactors($number);

echo " <br>The prime factors of " . $number . " are: ";
foreach ($primeFactors as $primeFactor) {
    echo $primeFactor . "" ;
}
"<br>";
//question6
echo( "<br>Q:7.solution is:" ); 


function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 15;

if (isPrime($number)) {
    echo $number . "  <br>is a prime number.";
} else {
    echo $number . " is a non-prime number.";
}


"<br>";
//question7
echo( "<br>Q:7.solution is:" ); 





function isnotPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

for ($i = 90; $i >= 12; $i--) {
    if (!isnotPrime($i)) {
        echo $i . " <br>";
    }
}
"<br>";
//question8
echo( "<br>Q:8.solution is:" ); 


function solveQuadraticEquation($a, $b, $c) {
    $discriminant = $b * $b - 4 * $a * $c;

    if ($discriminant > 0) {
        $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Qaybtaan waaaa  two real  ah solutions:\n";
        echo "x1 = " . $x1 . "\n";
        echo "x2 = " . $x2 . "\n";
    } elseif ($discriminant === 0) {
        $x = -$b / (2 * $a);
        echo " qaybtaana waaa  one real ah  solution:\n";
        echo "x = " . $x . "\n";
    } else {
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
        echo " qaybtaana waa  two complex ah  solutions:\n";
        echo "x1 = " . $realPart . " + " . $imaginaryPart . "i\n";
        echo "x2 = " . $realPart . " - " . $imaginaryPart . "i\n";
    }
}
// qatbtaan variableda qiimo ugu dhiibay
$a = 2;
$b = -5;
$c = -3;

solveQuadraticEquation($a, $b, $c);

?>







</body>
</html>