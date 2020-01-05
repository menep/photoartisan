<?php 

require 'app/views/partials/header.php';

$formAction = 'gallery/find';
$submitButtonLabel = "Find gallery"

?>

<main>
    <h1>Galleries</h1>

    <ul>
        <li><a href="/galleries/create">Create new gallery</a></li>
        <li><a href="/galleries/list">View your galleries</a></li>
    </ul>

    <br>

    <h2>Find a gallery</h2>

    <?php require 'app/views/partials/gallery.form.php'; ?>
    
</main>

<?php

require 'app/views/partials/footer.php';
