<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    // NOTE: Handle views of controller pages
    public function index()
    {
      $data = "demo controller data";
      // NOTE: Reture view with value of data
      return view("pages.index")->with('data',$data);
    }

    public function about()
    {
      return view("pages.about");
    }

    public function contact()
    {
      return view("pages.contact");
    }
}
