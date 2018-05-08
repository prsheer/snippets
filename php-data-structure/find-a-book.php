<?php

/**
 * Find the position of book name.
 * @param array $bookList
 * @param String $bookName
 * @return bool|int|string
 */
function findABook(Array $bookList, String $bookName) {
    // We did not find a book.
    $found = false;

    // Iterate through list of books and return the found book index.
    foreach ($bookList as $index => $book) {
        if ($book === $bookName) {
            $found = $index;
            break;
        }
    }

    return $found;
}

/**
 * Remove ordered books from the stack.
 * @param $orderedBooks
 * @param $bookList
 */
function placeAllBooks($orderedBooks, &$bookList) {
    // Iterate through ordered books.
    foreach ($orderedBooks as $book) {
        // Check if the requested books exists in our stack.
        $bookFound = findABook($bookList, $book);
        if ($bookFound !== false) {
            // We can use two methods:
            //array_splice($bookList, $bookFound, 1);

            // Or:
            unset($bookList[$bookFound]);
        }
    }
}

$bookList = ['PHP', 'MySQL', 'JavaScript', 'Pascal', 'Java', 'C++', 'C#'];
$orderedBooks = ['MySQL', 'C#'];

placeAllBooks($orderedBooks, $bookList);

var_dump($bookList);

// Returns an array:

/*(array) [5 elements]
0: (string) PHP
1: (string) JavaScript
2: (string) Pascal
3: (string) Java
4: (string) C++*/

// ------------------------------------------------------------------------------------------
/* Passing Values  by  Reference
The default when passing a parameter to a function in PHP 5 is to pass the argument by value.
In other words, when the function receives the value, it will then work on it as if that variable
was an entirely separate entity to the one that was passed to it originally. If you pass by refer-
ence, however, the variable that was passed in will be manipulated within the function as if
the value were still within the script it was passed in from. Think of passing arguments by
value as creating a temporary copy to work with; alternatively, passing by reference uses, and
can make changes to, the original copy. The following example allows you to concatenate text
to an existing block of text.
ASSING VALUES BY REFERENCE
*/
//sample11_3.php
//A function to concatenate text.
//function attachtext (&$newtext = ""){
//Now the function attaches the received text.
  //  $newtext = $newtext . " World!";
//}
//Here is the current block of text.
//$mystring = "Hello";
//Then you call the function to attach new text.
//attachtext ($mystring);
//And when you echo the variable now...
//echo $mystring; //Outputs Hello World!