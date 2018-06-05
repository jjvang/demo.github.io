<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // To add the title to the index.blade.php page via input this page 
        $title = 'Weleeecome to Laravel';
        // 1st method to add the title parameter
        // return view('pages.index', compact('title'));
        // 2nd method to add the title parameter
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Weleeecome to about page';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'service' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
