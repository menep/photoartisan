<?php require 'app/views/partials/header.php'; ?>

<h1 class="title--1 text--center margin__bt--40">Create a new gallery</h1>

<?php

$formAction = 'create';
$submitButtonLabel = "Create gallery";
$withDescription = true;

require 'app/views/partials/gallery.form.php';

require 'app/views/partials/footer.php';
