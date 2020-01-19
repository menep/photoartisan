<?php

class PagesController
{
    public function getPage($page)
    {
        require "app/views/pages/$page.php";
    }
}
