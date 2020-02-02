<?php

class PagesController
{
    public function home()
    {
        require "app/views/pages/index.php";
    }

    public function notFound()
    {
        require "app/views/pages/not-found.php";
    }

    public function findGallery()
    {
        require "app/views/pages/gallery.find.php";
	}
	

    public function createGallery()
    {
        require "app/views/pages/gallery.create.php";
	}
	
	public function viewGallery()
	{
		$params = Request::getParams();

        $response = (new Query(DatabaseConnection::make()))->findGalleryById($params['id']);

        require "app/views/pages/gallery.view.php";
	}
}
