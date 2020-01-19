<?php require 'app/views/partials/header.php'; ?>

<h2>Create a new gallery</h2>

<?php

$formAction = 'create';
$submitButtonLabel = "Create gallery";
$withDescription = true;

require 'app/views/partials/gallery.form.php';

require 'app/views/partials/footer.php';
