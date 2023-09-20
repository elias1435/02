<?php

/* Task 1: Looping with Increment using a Function */
// Using a for loop:
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
}

echo "Using For Loop: ";
printEvenNumbersWithForLoop(1, 20, 2);
echo "\n";


//Using a while loop:
function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

echo "Using While Loop: ";
printEvenNumbersWithWhileLoop(1, 20, 2);
echo "\n";


//Using a do-while loop:
function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using Do-While Loop: ";
printEvenNumbersWithDoWhileLoop(1, 20, 2);
echo "\n";


/* Task 2: Skip Multiples of 5 */
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}


/* Task 3: Break on Condition */
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    if ($first > 100) {
        break;
    }
    
    echo $first . " ";
    
    $next = $first + $second;
    $first = $second;
    $second = $next;
    
    $count++;
}


/* Task 4: Fibonacci Series printing using a Function */
function printFibonacciSeries($count) {
    $first = 0;
    $second = 1;
    
    for ($i = 0; $i < $count; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
printFibonacciSeries(15);


