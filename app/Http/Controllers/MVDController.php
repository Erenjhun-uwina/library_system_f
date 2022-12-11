<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MVDController extends Controller
{
    private $valid_pages = ['description', 'mission', 'vision'];

    public function mvd(Request $req)
    {
        $page = $req->page;
        $acc_type = session("acc_type");

        if (!in_array($page, $this->valid_pages)) return abort(403, "page not found");
        return view('mvd', compact('page','acc_type'));
    }
}
