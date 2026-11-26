<?php
namespace App\Http\Controllers;

class SidebarsController extends Controller
{
    public function fullwidth()
    {
        return view('sidebars.standard-fullwidth') ;
    }


    public function leftsidebar()
    {
        return view('sidebars.standard-left-sidebar') ;
    }

    public function rightsidebar()
    {
         return view('sidebars.standard-right-sidebar') ;
    }
}



