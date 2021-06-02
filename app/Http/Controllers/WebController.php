<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Index Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Single
     * @param $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single($page){

        if($page == 'about' || $page == 'contact' || $page == 'service' || $page == 'imprint' || $page == 'projects' || $page == 'intelliplan' || $page == 'reference' || $page == 'galerie'){
            return view('singlepage',compact('page'));
        }else{
            return redirect('testalconstruct');
        }
    }
}
