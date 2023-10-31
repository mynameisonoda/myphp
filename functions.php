<?php declare(strict_types=1);

require('classes/Author.php');

use App\Author;
// Define return types by adding the data type after a colon after parentheses
function getPosts(): array {
    $author1 = new Author('Mark Shust');
    $author2 = new Author('Besty Shust');
    // Key:value pair
    return [
        [
            'title' => 'How to learn PHP',
            'content' => 'This is how your learn PHP',
            'author' => $author1->getName(),
        ],
        [
            'title' => 'How to learn mySQL',
            'content' => 'This is how your learn mySQL',
            'author' => $author2->getName(),
        ],
    ];
};
?>