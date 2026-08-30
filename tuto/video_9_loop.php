<? /*
1. What is a Loop?
A loop repeats a block of code multiple times.
Useful when you need to process many items without writing the same code repeatedly.

Example:
If there are 5 blogs --> use a loop to run the same code 5 times.


/*2. for Loop
Used when you know how many times the loop should run.

Structure:
for (initialization; condition; increment) {
    // code
}*/

/*Example:
for ($i = 0; $i < 5; $i++) {
    echo "Hello";
}*/

/*3 Parts:
1.Initialization = $i = 0
 -Starting value.
2.Condition = $i < 5
 -Loop continues while this is true.
3.Increment = $i++
 -Adds 1 after each loop.

Result: Code runs 5 times.*/

/*3. for Loop with an Array
Useful for looping through an array when you don't know the exact number of items.
for ($i = 0; $i < count($blogs); $i++) {
    echo $blogs[$i];
}*/
/*
-count($blogs) --> gets the number of items in the array.
-$i --> used as the array index.
-Array indexes start from 0.*/

/*4. foreach Loop

Used to loop through each item in an array.

Structure:
foreach ($array as $item) {
    // code
}*/

/*Example:
foreach ($ninjas as $ninja) {
    echo $ninja;
}*/
/*Meaning:
  For each item in $ninjas, call the current item $ninja.*/

/*Why use foreach?
-Easier to write.
-No need for a counter.
-Automatically goes through every item.*/


/*5. Multi-dimensional Array + foreach

A multi-dimensional array contains arrays inside an array.

Example:
$products = [
    ["name" => "Phone", "price" => 500],
    ["name" => "Laptop", "price" => 1000]
];*/

/*Loop through products:
foreach ($products as $product) {
    echo $product["name"];
    echo $product["price"];
}*/
/*
$product = current product.
$product["name"] = product name.
$product["price"] = product price.*/


/*6. while Loop
Runs code while a condition is true.*/

/*Structure:
while (condition) {
    // code
}*/

/*Example:
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}*/

/*Important!
You must change the counter inside the loop.
$i++;
/*Otherwise, the condition may always stay true --> infinite loop.*/


/*7. Loop Inside HTML
PHP loops can be used inside HTML to display data*/

/*Example:*/
/*<?php foreach ($products as $product) { ?>

    <h3><?php echo $product["name"]; ?></h3>
    <p><?php echo $product["price"]; ?></p>

<?php } ?> */

/*This allows you to:
-Loop through data.
-Generate HTML for each item.
-Display things like products, blogs, etc.*/

/*Quick Summary

 Loop       Use                                 
`for`     = Repeat a known number of times      
`foreach` = Loop through every item in an array 
`while`   = Repeat while a condition is true    */

/*Remember:
for --> Counter-based
foreach --> Each array item
while --> While condition is true
count() --> Get number of items
$i++ --> Increase by 1
Array index starts at 0 */?>
