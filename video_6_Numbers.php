<? /*
1. Number Data Types
PHP has 2 main number data types:

 -Integer (int) --> whole numbers*/
 $radius = 25;

 /*Float --> numbers with decimals*/
 $pi = 3.14;
 /*Float can also be called a double.*/


 /*2. Basic Math Operators*/
 /*
 Operator  Meaning           Example  
 `+`  ---> Addition         --->   5 + 2  
 `-`  ---> Subtraction      --->   5 - 2  
 `*`  ---> Multiplication   --->   5 * 2  
 `/`  ---> Division         --->   5 / 2  
 `**` ---> Power            --->   5 ** 2
*/

/*Example:*/
$area = $pi * $radius ** 2;


/*3. Order of Operations (BIDMAS)

PHP follows the normal mathematical order:

1.B = Brackets
2.I = Indices / Power
3.D = Division
4.M = Multiplication
5.A = Addition
6.S = Subtraction*/

/*Example:
2 * (4 + 9) / 3 */
/*First (4 + 9), then division/multiplication.*/


/*4. Increment & Decrement

Increment (++) --> adds 1 */
$radius++;

/*Decrement (--) --> subtracts 1*/
$radius--;

/*Example:*/
$age = 20;
$age++;
// 21
/*Important:
echo $age++; prints the old value first, then increments it*/


/*5. Shorthand Operators
Used to update a variable more quickly.*/ 
$age += 10;   // age = age + 10
$age -= 10;   // age = age - 10
$age *= 2;    // age = age * 2
$age /= 2;    // age = age / 2

/*Example:*/
$age = 20;
$age += 10;
// 30


/*6. Number Functions
floor() --> rounds down*/
floor(3.14); // 3
/*ceil() --> rounds up*/

ceil(3.14); // 4
/*pi() --> returns the value of π*/

echo pi();

/*Quick Summary
1.Integer = whole number
2.Float = decimal number
3.+ - * / ** = basic math operators
4.BIDMAS = order of operations
5.++ = +1
6.-- = -1
7.+= -= *= /= = shorthand operators
8.floor() = round down
9.ceil() = round up
10.pi() = value of π */?>