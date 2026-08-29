<? /*

/*1. Variables
Variables are used to store data/information that can be used later in a program.

In PHP, variables start with a $:*/

$name = "Yoshi";
$age = 30;
/*
-$name --> stores a string
-$age  --> stores an integer*/

/*To display a variable:*/
echo $name;
echo $age;


/*2. Variable Naming Rules
A variable name:

Must start with a letter or _
Cannot start with a number
Can contain letters, numbers, and _
Cannot contain special characters such as @, -, %, etc. */

/*Valid:
$name
$age2
$_username

Invalid:

$2name
$user-name
$user@name
*/


/*3. Camel Case
Camel case is a common naming convention for multiple words.

$firstName
$userEmail
$phoneNumber*/

/*The first letter of the second word is capitalized.
You can also use underscores:

$first_name
$user_email*/


/*4. Data Types
Variables can store different types of data.*/

$name = "Yoshi";   // String
$age = 30;         // Integer

/*Strings use quotes: $name = "Yoshi";*/

/*Numbers don't need quotes:
$age = 30;*/



/*5. Overriding Variables
A variable's value can be changed later.*/

$name = "Yoshi";
$name = "Mario";
echo $name;

/*Output:Mario*/

/*PHP runs the code from top to bottom, so the latest value replaces the previous one.*/



/*6. Comments
Comments are ignored when PHP runs.

// This is a comment*/

/*You can also use:*/

# This is a comment

/*Comments are useful for explaining code or temporarily disabling code.*/

/*7. Constants

A constant is a value that cannot be changed/overridden after being defined.*/

/*Use define():*/

define("NAME", "Yoshi");

/*To access a constant:*/
echo NAME;

/*Notice that constants do not use $.*/

/*8. Constant Naming Convention*/

/*Constants are commonly written in UPPERCASE:*/

define("NAME", "Yoshi");
define("AGE", 30);
define("PI", 3.14);

/*This makes them easy to identify as constants.*/

/*Variable vs Constant*/
/*
 Variable            Constant                    
 Uses `$`           = No `$`                     
 Can be changed     = Cannot be changed          
 `$name`            = `NAME`                     
 `$name = "Mario";` = `define("NAME", "Yoshi");` 
*/
?>
