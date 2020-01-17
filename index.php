<?php
require 'vendor/autoload.php';

Router::direct($_SERVER['REQUEST_METHOD']);
