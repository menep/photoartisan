<?php

require 'app/views/partials/header.php';

?>

<h1>Found galleries</h1>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($response as $key) : ?>

            <tr>
                <td><?= $key['title'] ?></td>
                <td><?= $key['author']; ?></td>
                <td><?= $key['created']; ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>


<?php
require 'app/views/partials/footer.php';
