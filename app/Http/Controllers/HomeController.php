<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Society;
use App\Project;
use App\Gallery;
use App\About;
use App\Service;
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
        $articles = Article::all();

        $services = Service::all();

        $categories = Category::where('type','Project')->get();

        $projects = Project::with('galleries')->get();

        $about = About::where('id','!=',0)->first();

        return view('Public.home.index',compact('articles','about','services','projects','categories'));
    }


    public function project($nom)
    {
        $project =  Project::with('galleries')->where('nom',$nom)->first();

        return view('Public.projects.index',compact('project'));
    }
    public function getFile($folder,$filename)
    {

        $file = Storage::disk('local')->get($folder.DIRECTORY_SEPARATOR.$filename);

        return new Response($file);
    }

    public function getFileProjects($ste,$folder,$filename)
    {

        $file = Storage::disk('local')->get('Project'.DIRECTORY_SEPARATOR.$ste.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$filename);

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
