<?php

class GalleryController
{
    public function createGallery()
    {
        $params = Request::getParams();

        if (empty($params['title']) || empty($params['author'])) {
            (new PagesController)->createGallery('Gallery creation failed: one or multiple required inputs were missing');
            return;
        }
        
        $id = (new Query(DatabaseConnection::make()))->createGallery($params);

        (new PagesController)->viewGallery(['id' => $id]);
    }

    public function findGallery()
    {
        $params = Request::getParams();

        $response = (new Query(DatabaseConnection::make()))->findGallery($params);

        require 'app/views/pages/gallery.results.php';
    }
}
