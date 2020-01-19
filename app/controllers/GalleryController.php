<?php

class GalleryController
{
    public function create($params)
    {
        $response = (new Query(DatabaseConnection::make()))->createGallery($params);

        Router::redirect('/');
    }

    public function find($params)
    {
        $response = (new Query(DatabaseConnection::make()))->findGallery($params);

        require 'app/views/pages/gallery.results.php';
    }
}
