<?php require 'app/views/partials/header.php'; ?>

<h2>Find a gallery</h2>

<?php

$formAction = 'find';
$submitButtonLabel = "Find gallery";
$withDescription = false;

require 'app/views/partials/gallery.form.php';

require 'app/views/partials/footer.php';
