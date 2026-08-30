<?php

// ==========================================
// PHP VARIABLE SCOPE - NOTES
// ==========================================

// Variable scope means where a variable
// can be accessed or used.
//
// There are two main types:
//
// 1. Local Scope
// 2. Global Scope
//
// We will also learn about:
//
// - global keyword
// - passing by value
// - passing by reference


// ==========================================
// 1. LOCAL SCOPE
// ==========================================

// A variable created inside a function
// has local scope.
//
// It can only be used inside that function.

/*function myFunc() {

    $price = 10;

    echo $price;
}


// Call the function.
myFunc();


// $price cannot be used outside the function
// because it only exists inside myFunc.
//
// echo $price; // Error


// ==========================================
// 2. FUNCTION PARAMETERS
// ==========================================

// A parameter is also a local variable.
//
// It can only be used inside the function.

/*function showAge($age) {

    echo $age;
}*/


/* 25 is the argument.
showAge(25);*/


// $age can only be accessed inside showAge().
//
// echo $age; // Error


// ==========================================
// 3. GLOBAL SCOPE
// ==========================================

// A variable created outside a function
// has global scope.

/*$name = "Mario";*/


// A function cannot directly access
// a global variable.

/*function sayHello() {

    // echo $name; // Error
}


// PHP looks for a local variable inside
// the function by default.
//
// We need to use the "global" keyword
// to access the global variable.


// ==========================================
// 4. GLOBAL KEYWORD
// ==========================================

// The "global" keyword allows us to access
// a global variable inside a function.
//
// Syntax:
//
// global $variableName;

/*$name = "Mario";*/

/*function sayHelloGlobal() {

    global $name;

    echo "Hello $name";
}


/* Call the function.
sayHelloGlobal();*/


// Output:
// Hello Mario


// ==========================================
// 5. CHANGING A GLOBAL VARIABLE
// ==========================================

// The "global" keyword also allows us
// to change the original global variable.

/*$name = "Mario";*/

/*function changeName() {

    global $name;


    $name = "Yoshi";
} */


// Call the function.
/*changeName();*/


// The original $name is now changed.

/*echo $name;*/


// Output:
// Yoshi


// ==========================================
// 6. PASSING BY VALUE
// ==========================================

// By default, PHP passes arguments by value.
//
// This means the function receives a copy
// of the original variable.
//
// Changing the parameter does not change
// the original variable.

/*$name = "Mario";*/

/*function changeNameValue($name) {

    $name = "Wario";

    echo $name;
}*/


// Pass $name into the function.
/*changeNameValue($name);*/


// Output:
// Wario


// The original variable is still "Mario".

/*echo $name;*/


// Output:
// Mario


// ==========================================
// 7. PASSING BY REFERENCE
// ==========================================

// We can use "&" to pass a variable
// by reference.
//
// This means the function can change
// the original variable.
//
// Syntax:
//
// function functionName(&$variable)

/*$name = "Mario";*/

/*function changeNameReference(&$name) {

    $name = "Wario";
}

 /*   
/* Pass the variable by reference.
changeNameReference($name);*/


// The original variable is now changed.

/*echo $name;*/


// Output:
// Wario


// ==========================================
// 8. VALUE VS REFERENCE
// ==========================================

// Passing by value:
//
// function changeName($name)
//
// - Function receives a copy
// - Original variable does not change
//
//
// Passing by reference:
//
// function changeName(&$name)
//
// - Function uses the original variable
// - Original variable can be changed


// ==========================================
// QUICK SUMMARY
// ==========================================

// Local Scope
// - Variable created inside a function
// - Can only be used inside that function
//
//
// Global Scope
// - Variable created outside a function
// - Can be accessed inside a function
//   using the "global" keyword
//
//
// global
// - Allows a function to access a global variable
//
//
// Parameter
// - A local variable that receives a value
//   from a function call
//
//
// Passing by Value
// - Function receives a copy
// - Original variable does not change
//
//
// Passing by Reference
// - Uses "&"
// - Function can change the original variable

?>
