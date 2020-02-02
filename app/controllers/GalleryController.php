<?php

class GalleryController
{
    public function createGallery()
    {
		$params = Request::getParams();

        $response = (new Query(DatabaseConnection::make()))->createGallery($params);

        Router::redirect('/');
    }

    public function findGallery()
    {
		$params = Request::getParams();

        $response = (new Query(DatabaseConnection::make()))->findGallery($params);

        require 'app/views/pages/gallery.results.php';
    }
}
