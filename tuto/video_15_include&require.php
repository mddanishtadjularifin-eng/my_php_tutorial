<?php

// ========================================
// PHP INCLUDE & REQUIRE
// ========================================

// include and require are used to insert
// another PHP file into the current file.

// Example:
// include 'ninjas.php';
// require 'ninjas.php';


// ========================================
// INCLUDE
// ========================================

// - Includes another file into the current file.
// - If the file does not exist, PHP shows an error/warning.
// - The rest of the code will still continue running.


// ========================================
// REQUIRE
// ========================================

// - Works similarly to include.
// - If the file does not exist, PHP produces a FATAL ERROR.
// - The rest of the code will NOT continue running.


// ========================================
// MAIN DIFFERENCE
// ========================================

// include → error occurs, code continues
// require → error occurs, code stops


// ========================================
// WHY USE INCLUDE & REQUIRE?
// ========================================

// - Reduce code repetition
// - Reuse code
// - Organize code
// - Easier to maintain
// - Update code in one place


// ========================================
// KEY POINT
// ========================================

// include = error → code continues
// require = error → code stops

?> 