<?php
//view.php
function renderBooksTable($books) {
    if (empty($books)){?>
        <p>No books found for this genre.</p>
    <?php return; } ?>
    <table border='1'>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>Genero</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($books as $book) { ?>
            <tr>
                <td><?= $book['titulo'];?></td>
                <td><?= $book['autor'];?></td>
                <td><?= $book['genero'];?></td>
                <td><?= $book['precio'];?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
?>