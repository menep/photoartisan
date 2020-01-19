<?php

require 'app/views/partials/header.php';

?>

<h1 class="title--1 text--center margin__bt--40"><?= (count($response) ?: 'No') . ' results found' ?></h1>

<?php if (count($response)) : ?>
    <table class="table__query--results text--medium text--center">
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
                    <td><?= (new DateTime('@' . $key['created']))->format('d M Y, H:i'); ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif ?>

<?php
require 'app/views/partials/footer.php';
