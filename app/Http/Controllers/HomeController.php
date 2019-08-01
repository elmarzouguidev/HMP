<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Society;
use App\Project;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }




    public function getFile($folder,$filename)
    {
       /* if (strpos($filename, '/') !== false) {
            echo 'true';
        }*/
        $file = Storage::disk('local')->get($folder.DIRECTORY_SEPARATOR.$filename);

        return new Response($file);
    }

    public function cleanData()
    {

        Gallery::truncate();
        Project::truncate();
        Society::truncate();
        Article::truncate();
        File::deleteDirectory(storage_path('app'.DIRECTORY_SEPARATOR.'Society'));
        File::deleteDirectory(storage_path('app'.DIRECTORY_SEPARATOR.'Project'));

        return redirect()->route('admin.dash');
    }
}
