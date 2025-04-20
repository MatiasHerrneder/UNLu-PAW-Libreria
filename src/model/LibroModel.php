<?php
//model.php
function getBooksByGenre($genre) {
    echo 'En getBooksByGenre';
    $data = file_get_contents('books.json');
    $books = json_decode($data, true);
// Esto no normaliza los datos.
    return array_filter($books, function($book) use ($genre) {
        return $book['genero'] === $genre;
    });
}
?>