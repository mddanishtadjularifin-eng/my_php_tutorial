<?php

// ==========================================
// PHP FUNCTIONS - NOTES
// ==========================================

// A function is a block of code that performs
// a specific task.
//
// We can create a function once and call it
// many times whenever we need it.
//
// Example:
// Function = a machine
// Input → Function → Output


// ==========================================
// 1. CREATING A FUNCTION
// ==========================================

// Use the "function" keyword to create a function.
//
// Syntax:
//
// function functionName() {
//     code;
// }

/*function sayHello() {

    echo "Good morning Yoshi";
}*/


// ==========================================
// 2. CALLING A FUNCTION
// ==========================================

// Creating a function does NOT run it.
//
// We need to CALL / INVOKE the function
// to execute its code.

/*sayHello();*/


// ==========================================
// 3. FUNCTION PARAMETERS
// ==========================================

// A parameter allows us to pass information
// into a function.
//
// The parameter acts like a local variable
// inside the function.

/*function sayHelloTo($name) {

    echo "Good morning $name";
}*/

// "Mario" is the argument.
/*sayHelloTo("Mario");*/


// ==========================================
// 4. DEFAULT PARAMETER VALUE
// ==========================================

// We can give a parameter a default value.
//
// If no argument is passed,
// PHP will use the default value.

/*function sayHelloDefault($name = "Sean") {

    echo "Good morning $name";
}  */

/* No argument → uses "Sean"
sayHelloDefault();*/

/*Argument provided → overrides "Sean"
sayHelloDefault("Mario");*/


// ==========================================
// 5. MULTIPLE PARAMETERS
// ==========================================

// A function can accept more than one parameter.
//
// Separate parameters with a comma.

/*function sayHelloTime($name = "Sean", $time = "morning") {

    echo "Good $time $name";
}*/


// Using default values:
/*sayHelloTime();

// Passing two arguments:
sayHelloTime("Yoshi", "night");

*/
// ==========================================
// 6. CREATING A COMPLEX FUNCTION
// ==========================================

// A function can receive an array as a parameter.
//
// Example:
// The product contains:
// - name
// - price

/*function formatProduct($product) {

    echo "{$product['name']} costs £{$product['price']} to buy.<br>";
}


// Pass an associative array as the argument.

formatProduct([
    'name' => 'Gold Star',
    'price' => 20
]);


// ==========================================
// 7. RETURN
// ==========================================

// "return" sends a value back from the function.
//
// Unlike "echo", return does NOT directly
// display the result in the browser.
//
// The returned value can be stored in a variable
// and used later.

function formatProductReturn($product) {

    return "{$product['name']} costs £{$product['price']} to buy.";
}


// Store the returned value in a variable.

$formatted = formatProductReturn([
    'name' => 'Gold Star',
    'price' => 20
]);


// Now we can use the returned value.

echo $formatted;


// ==========================================
// ECHO vs RETURN
// ==========================================

// echo
// → Displays the result directly.
//
// return
// → Sends the result back so we can
//   store or use it later.


// ==========================================
// QUICK SUMMARY
// ==========================================

// function
// → Creates a function.
//
// functionName()
// → Calls / invokes the function.
//
// parameter
// → A variable that receives input.
//
// argument
// → The actual value passed into a function.
//
// default value
// → Value used when no argument is provided.
//
// return
// → Sends a value back from the function.


// ==========================================
// EASY WAY TO REMEMBER
// ==========================================

// INPUT
//   ↓
// ARGUMENT
//   ↓
// FUNCTION
//   ↓
// CODE RUNS
//   ↓
// RETURN
//   ↓
// OUTPUT


?>