<?php

require 'app/views/partials/header.php';

?>

<h1>Found galleries</h1>

<?php
foreach ($response as $row) {
    foreach ($row as $key => $value) {
        # code...
        echo "<h2>$key : $value</h2>";
    }
}

?>

<?php
require 'app/views/partials/footer.php';
