<?php require 'app/views/partials/header.php'; ?>

    <h1>Galleries</h1>

    <ul>
        <li><a href="/galleries/list">View your galleries</a></li>
    </ul>

    <br>

    <h2>Create a new gallery</h2>

    <?php

    $formAction = 'galleries/create';
    $submitButtonLabel = "Create gallery";
    $withDescription = true;

    require 'app/views/partials/gallery.form.php'; ?>

    <br>

    <h2>Find a gallery</h2>

    <?php

    $formAction = 'galleries/find';
    $submitButtonLabel = "Find gallery";
    $withDescription = false;
    
    require 'app/views/partials/gallery.form.php'; ?>

<?php

require 'app/views/partials/footer.php';
