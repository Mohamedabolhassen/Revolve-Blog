<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function index2()
    {
          return view('homepages.index-2') ;
    }
    public function index3()
    {
          return view('homepages.index-3') ;
    }
    public function index4()
    {
          return view('homepages.index-4') ;
    }
    public function index5()
    {
         return view('homepages.index-5') ;
    }  
    public function index6()
    {
         return view('homepages.index-6') ;
    }
    
}



