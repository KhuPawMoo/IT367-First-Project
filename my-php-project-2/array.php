<?php

$books = [
    [
        "title" => "The Hobbit",
        "author" => "J.R.R. Tolkien",
        "publisher" => "George Allen & Unwin",
        "year" => 1937,
        "edition" => "1st",
        "isbn" => "9780547928227"
    ],
    [
        "title" => "Harry Potter and the Philosopher's Stone",
        "author" => "J.K. Rowling",
        "publisher" => "Bloomsbury",
        "year" => 1997,
        "edition" => "1st",
        "isbn" => "9780747532699"
    ],
    [
        "title" => "1984",
        "author" => "George Orwell",
        "publisher" => "Secker & Warburg",
        "year" => 1949,
        "edition" => "1st",
        "isbn" => "9780451524935"
    ]
];

function filterBooks($books, $condition) {
    $result = [];

    foreach ($books as $book) {
        if ($condition($book)) {
            $result[] = $book;
        }
    }

    return $result;
}

$filterBook = array_filter($books, fn($book) => $book["title"] == "1984");

var_dump($filterBook);


// $filterBook = fn($books) => $book['title'] == '1984';

// $filterBook = function($books) {
//     if ($book['title'] == '1984') {
//         return $book;
//     }
// };