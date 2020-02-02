<?php

class GalleryController
{
    public function createGallery()
    {
		$params = Request::getParams();

        $id = (new Query(DatabaseConnection::make()))->createGallery($params);

        (new PagesController)->viewGallery($id);
    }

    public function findGallery()
    {
		$params = Request::getParams();

        $response = (new Query(DatabaseConnection::make()))->findGallery($params);

        require 'app/views/pages/gallery.results.php';
    }
}
