<?php

class GalleryController
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function create($params)
    {
        $response = (new Query(Connection::make($this->config)))->createGallery($params);

        Router::redirect('/');
    }

    public function find($params)
    {
        $response = (new Query(Connection::make($this->config)))->findGallery($params);

        require 'app/views/pages/gallery.results.view.php';
    }
}
