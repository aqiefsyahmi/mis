<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CommunityController extends BaseController
{
    public function index()
    {
        $data['title'] = "Community Listing";
        helper('form');
        return view('community/community_listing', $data);
    }
}
