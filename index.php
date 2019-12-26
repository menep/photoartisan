<?php
require 'app/core/utils.php';

$view = parseUri() . ".view.php";

if (file_exists("app/views/pages/$view")) {
    require "app/views/pages/$view";
} else {
    require 'app/views/pages/not-found.php';
}
