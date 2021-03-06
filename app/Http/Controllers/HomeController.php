<?php

namespace App\Http\Controllers;

use App\Content;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $content = \DB::table('content')->get();
      return view('welcome', ['content'=>$content]);

    }

    public function create()
    {
      return view('content.create');
    }

    public function store(Request $request) {

      $content = new Content;
      $content->title = $request->title;
      $content->info = $request->info;

      $content->save();

      redirect()->back;

    }

    public function edit()
    {
      return view('content.edit');
    }

    public function update()
    {

    }
}
