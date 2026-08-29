<?php

// ==========================================
// PHP BREAK & CONTINUE - NOTES
// ==========================================

// BREAK and CONTINUE are mainly used inside loops.
//
// break    -> completely stops the loop
// continue -> skips the current loop and moves
//             to the next iteration.


// ==========================================
// 1. BREAK
// ==========================================

// "break" completely exits the loop.
//
// When PHP reaches "break":
// - The loop stops immediately.
// - It does NOT check the remaining items.
// - PHP continues with the code after the loop.

// Example:

/*foreach ($products as $product) {

    // Check if the product is Lightning Bolt.
    if ($product['name'] == 'Lightning Bolt') {

        // Stop the loop completely.
        break;
    }

    // Display the product name.
    echo $product['name'] . '<br>';
}*/

// The products after Lightning Bolt
// will NOT be processed.


// ==========================================
// 2. CONTINUE
// ==========================================

// "continue" skips the current iteration.
//
// When PHP reaches "continue":
// - The remaining code for the current loop is skipped.
// - The loop does NOT stop.
// - It goes back to the top of the loop.
// - The next product/item is processed.

// Example:

/*foreach ($products as $product) {

    // If the price is greater than 15,
    // skip this product.
    if ($product['price'] > 15) {

        continue;
    }

    // This code is skipped for products
    // with a price greater than 15.
    echo $product['name'] . '<br>';
} */


// ==========================================
// BREAK vs CONTINUE
// ==========================================

// break
// → STOP the entire loop.
//
// continue
// → SKIP the current iteration
//   and continue with the next item.


// Example:
//
// Product 1 → process
// Product 2 → process
// Product 3 → break
//             ↓
//             LOOP STOPS
//
// Product 4 → not processed
// Product 5 → not processed


// Example with continue:
//
// Product 1 → process
// Product 2 → continue → skip
// Product 3 → process
// Product 4 → continue → skip
// Product 5 → process


// ==========================================
// QUICK SUMMARY
// ==========================================

// break:
// Completely exits the loop.
//
// continue:
// Skips the current iteration and moves
// to the next iteration.
//
// Both are commonly used inside loops.

?>