<?php
require 'app/core/Router.php';

Router::direct($_SERVER['REQUEST_METHOD']);
