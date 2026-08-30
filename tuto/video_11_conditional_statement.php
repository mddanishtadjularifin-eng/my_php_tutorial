<?php

// ==========================================
// PHP CONDITIONAL STATEMENTS - NOTES
// ==========================================

// Conditional statements are used to check a condition.
// If the condition is TRUE, the code will run.
// If the condition is FALSE, another code can run.

// Example:
// if a user is logged in -> show one thing
// if not logged in -> show something else.


// ==========================================
// 1. IF STATEMENT
// ==========================================

// "if" checks whether a condition is true.

// Syntax:
// if (condition) {
//     code to execute;
// }

/*$price = 20;

if ($price < 30) {
    echo "Condition is met";
}


// ==========================================
// 2. ELSE STATEMENT
// ==========================================

// "else" runs when the IF condition is FALSE.

// Example:

if ($price < 10) {
    echo "Condition is met";
} else {
    echo "Condition is not met";
}


// ==========================================
// 3. ELSE IF STATEMENT
// ==========================================

// "else if" is used to check another condition
// when the first IF condition is FALSE.

// PHP checks the conditions from TOP to BOTTOM.
// The first TRUE condition will be executed.

/*Example:

if ($price < 10) {
    echo "Price is below 10";
} elseif ($price < 20) {
    echo "Price is below 20";
} else {
    echo "Condition is not met";
}
*/

// ==========================================
// 4. IF + FOREACH LOOP
// ==========================================

// We can use IF statements inside a foreach loop.
// This is useful when checking many products.

/* Example products:

$products = [
    ['name' => 'Green Shell', 'price' => 10],
    ['name' => 'Gold Coin', 'price' => 5],
    ['name' => 'Banana Skin', 'price' => 2],
    ['name' => 'Lightning Bolt', 'price' => 20],
    ['name' => 'Shiny Star', 'price' => 20]
]; */

/*foreach ($products as $product) {

    // Check if the product price is less than 15.
    if ($product['price'] < 15) {

        // Display the product name.
        echo $product['name'] . '<br>';
    }
} */


// ==========================================
// 5. MULTIPLE CONDITIONS - AND
// ==========================================

// "&&" means AND.

// BOTH conditions must be TRUE.

// Example:
// price must be less than 15
// AND
// price must be greater than 2

/*foreach ($products as $product) {

    if ($product['price'] < 15 && $product['price'] > 2) {
        echo $product['name'] . '<br>';
    }
} */


// ==========================================
// 6. MULTIPLE CONDITIONS - OR
// ==========================================

// "||" means OR.

// Only ONE of the conditions needs to be TRUE.

// Example:
// price is greater than 20
// OR
// price is less than 10

/*foreach ($products as $product) {

    if ($product['price'] > 20 || $product['price'] < 10) {
        echo $product['name'] . '<br>';
    }
} */


// ==========================================
// 7. IF STATEMENT INSIDE HTML
// ==========================================

// We can also use PHP IF statements inside
// an HTML template.

// This allows us to display different HTML
// content depending on a condition.

/* Example:

?>

<div>

    <?php foreach ($products as $product): ?>

        <?php if ($product['price'] > 15): ?>

            <li>
                <?php echo $product['name']; ?>
            </li>

        <?php endif; ?>

    <?php endforeach; ?>

</div>

<?php

// ==========================================
// QUICK SUMMARY
// ==========================================

// if       -> checks the first condition
// elseif   -> checks another condition
// else     -> runs if all conditions are FALSE
//
// &&       -> AND (both must be TRUE)
// ||       -> OR (one condition must be TRUE)
//
// Conditional statements allow PHP to make
// decisions based on TRUE or FALSE conditions.

?>