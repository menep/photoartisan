<?php require 'app/views/partials/header.php'; ?>

<h1 class="title--1 text--center margin__bt--40">Find a gallery</h1>

<?php

$formAction = 'find';
$submitButtonLabel = "Find gallery";
$withDescription = false;

require 'app/views/partials/gallery.form.php';

require 'app/views/partials/footer.php';
