<?php

namespace App\Controllers;

class ImageRep extends BaseController
{
    public function index()
    {
        $pageTitle = ["title" => "Image Repository"];

        return view('form/ImageRep.php', $pageTitle);
    }
}
