<? /*
/*1. What is a String?
A string is a sequence of characters, such as:*/
/*
-Letters
-Numbers
-Special characters
-Sentences
-Names
-Email addresses
*/

/*Strings are written inside quotes:*/

$name = "Mario";
$email = 'mario123@gmail.com';

/*Both single (') and double (") quotes can be used.*/

/*2. String Concatenation

Concatenation means joining strings together.

PHP uses a dot (.) to concatenate.*/

$string1 = "My email is ";
$string2 = "mario@gmail.com";
echo $string1 . $string2;

/*Output: My email is mario@gmail.com*/

/*You can also concatenate a string with a variable:*/
$name = "Mario";
echo "Hey, my name is " . $name;


/*3. Single vs Double Quotes

Double quotes allow variables to be directly inserted into the string.*/

$name = "Mario";
echo "Hey, my name is $name";

/*Output:Hey, my name is Mario*/

/*This is called variable interpolation.
With single quotes, the variable is not automatically replaced:*/

echo 'Hey, my name is $name';

/*Output:Hey, my name is $name

Remember: Use double quotes for variable interpolation.*/



/*4. Escape Characters
Use a backslash \ to escape a character inside a string.*/
echo "The ninja screamed \"Wow!\"";

/*Output:The ninja screamed "Wow!"*/

/*Another option is to use different types of quotes:*/
echo 'The ninja screamed "Wow!"';


/*5. Accessing Characters
Strings are zero-based, meaning the first character is at index 0.*/

$name = "Mario";

echo $name[0]; // M
echo $name[1]; // a
echo $name[2]; // r
/*
 Index  Character  
   `0`    M         
   `1`    a         
   `2`    r         
   `3`    i         
   `4`    o         
   */

/*6. String Functions
strlen()
Returns the length of a string.*/

echo strlen("Mario");

/*Output:5*/

/*strtoupper()
Converts a string to uppercase.*/

echo strtoupper("Mario");

/*Output:MARIO*/

/*strtolower()
Converts a string to lowercase.*/

echo strtolower("MARIO");

/*Output:mario */


/*7. str_replace()
Used to replace characters or words in a string.
Syntax:*

str_replace(search, replace, string);*/

/*Example:*/
$name = "Mario";
echo str_replace("M", "W", $name);

/*Output:Wario*/

/*
Quick Summary
1.String = sequence of characters.
2.Strings use 'single quotes' or "double quotes".
3.(.) = concatenation.
4.Double quotes allow variable interpolation.
5.(\) = escape character.
6.String indexes start from 0.
7.strlen() → gets string length.
8.strtoupper() → converts to uppercase.
9.strtolower() → converts to lowercase.
10.str_replace() → replaces characters/words.
*/
?>