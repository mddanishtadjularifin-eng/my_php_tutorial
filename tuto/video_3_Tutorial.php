<? /*
 1. How PHP Works
-When a user requests index.php, the browser sends a request to the server.
-The server finds the index.php file.
-The server runs the PHP code inside the file.
-PHP produces an output, such as a string: echo 'Hello,Ninjas';
-The server sends the result/output to the browser.
-The browser cannot run PHP directly. It only understands technologies such as HTML, CSS, and JavaScript.
-Therefore, PHP is processed on the server-side, while HTML is rendered by the browser.

BASIC FLOW
Browser--> Request (index.php)--> Server--> PHP executes --> HTML output -->Browser--> Render webpages*/ 

/*-----------------------------------------------------------------------------------------------------------------------*/

/*2.Semicolon ;
Every PHP statement normally ends with a semicolon ;.

Example:
        echo 'Hello Ninjas';
        echo 'Hello Again';
        */
        

/*The semicolon tells PHP:
"This statement has ended." */

/*Without it:
            echo "Hello Ninjas"
            echo "Hello Again";*/
            

/*PHP will produce a syntax error, because it does not know where the first statement ends.*/
/*---------------------------------------------------------------------------------------------------------------------------------*/

/*3. Embedding PHP Inside HTML
PHP can be written inside an HTML document.

Example:<!DOCTYPE html>
<html>
<head>
    <title>My First PHP File</title>
</head>
<body>

    <h1>
        php
        echo "Hello Ninjas";
        
    </h1>

</body>
</html>*/

/*Here:

-HTML creates the webpage structure.
-PHP is placed inside <?php ... ?>.
-The PHP code is processed by the server.
-echo outputs "Hello Ninjas".
-The resulting text becomes part of the HTML*/


/*4. PHP Tags

/*PHP code is usually written between:<?php
                                      / / PHP code
                                      ?> */
/*Example:<h1>
            <?php echo "Hello Ninjas"; ?>
        </h1> */

/*The server processes the PHP and produces: <h1>Hello Ninjas</h1> */


/*5. Why Mix PHP with HTML?
At first, using PHP to output "Hello Ninjas"
 may seem unnecessary because we could simply write: <h1>Hello Ninjas</h1> */

/*But PHP becomes useful when the content is dynamic.*/


/* For example:
User information

<h1>
    <?php echo $username; ?>
</h1> */


 /*Product information

<p>
    <?php echo $productName; ?>
</p> */

/*The information could come from a database or other dynamic sources.*/


/*6. Dynamic Content

The main purpose is to use PHP to generate dynamic HTML content.

Instead of:
<h1>Welcome, Danish</h1> */ 

/*PHP can generate different content depending on the user:
<h1>
    <?php echo $username; ?>
</h1> */

/*For example:

User A:

Welcome, Ali

User B:

Welcome, Danish

The HTML structure stays the same, but the content can change dynamically.*/


/*7. Key Concepts to Remember*/
/*
Concept          Meaning                                 

`index.php` = A PHP file processed by the server      
Server  = Runs the PHP code                       
Browser = Receives and renders the resulting HTML 
 `echo` = Outputs content                         
`;`     = Ends a PHP statement                    
 `<?php ?>` = PHP opening and closing tags            
 HTML   = Creates the webpage structure           
Dynamic content = Content that can change based on data   
Database = Can provide dynamic information to PHP  
*/?>