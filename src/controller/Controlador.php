<?php
//controler.php
require_once __DIR__ . '/../model/LibroModel.php';
require_once __DIR__ . '/../view/TablaLibro.php';

function handleRequest() {
    if (isset($_GET['genero'])) {
        $genero = $_GET['genero'];
        $books = getBooksByGenre($genero);
        renderBooksTable($books);
    } else {
        echo "<p>Please select a Genero.</p>";
    }
}
?>