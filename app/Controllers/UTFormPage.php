<?php

namespace App\Controllers;

class UTFormPage extends BaseController
{
    public function index()
    {
        $pageTitle = ["title" => "Urine Test"];

        return view('form/urine_test.php', $pageTitle);
    }
}