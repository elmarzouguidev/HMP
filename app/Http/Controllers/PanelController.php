<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Society;
use App\Project;
use App\Gallery;
//use App\Prospect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PanelController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dash()
    {

        return view('adminPanel.dash.index');
    }

    /***********Articles section****************/


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function articles (Request $request)
    {

        /***update exist article*/
        if ($request->has('articleup')) {

            $validator = Validator::make($request->all(), [

                'title' => 'required|unique:articles,title,'.$request['articleup'],
                'content' => 'required',
               // 'category' => 'required|integer',
                'file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $article = Article::where('id',$request['articleup'])->first();

            $article->title = $request['title'];

            $article->content = $request['content'];

          //  $article->category()->associate($request['category']);

            if ($request->hasFile('file')) {

                $file = $request->file('file');

                $filename = 'article-image-updated'.time().'--'.date('Y-m-d').'.'.$file->getClientOriginalExtension();

                $this->storeFile($file,$filename,request()->segment(2));

                $oldFile = storage_path('app'.DIRECTORY_SEPARATOR.request()->segment(2).DIRECTORY_SEPARATOR.$article->file);

                $article->file = $filename;

                File::delete($oldFile);
            }

            $article->update();

            return response()->json(['success'=>'l\'article a bien été modifier']);
        }

        /****add new article**/
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [

                'title' => 'required|unique:articles|max:255',
                'content' => 'required',
                'category' => 'nullable|integer',
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $file = $request->file('file');

            $filename = 'article-image-new'.time().'--'.date('Y-m-d').'.'.$file->getClientOriginalExtension();

            $article = new Article();

            $article->title = $request['title'];

            $article->slug = Str::slug($request['title'], '-');

            $article->content = $request['content'];

            $article->file = $filename;

            $article->category()->associate($request['category']);

            $article->admin()->associate(Auth::user()->id);

            $article->save();


            if($file)
            {
                $this->storeFile($file,$filename,request()->segment(2));
            }

            return response()->json(['success'=>'l\'article a bien été ajouté']);
        }

        /******Get request from the browser when call it from route  admin/article */


        $categories  = Category::where('type','Article')->get();

        $articles    = Article::all();

        return view('AdminPanel.Article.index',compact('categories','articles'));
    }


    /***********************Society******** */
    public function societies (Request $request)
    {


        /****add new article**/
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [

                'ice' => 'required|string|unique:societies',
                'email' => 'required|email|unique:societies',
                'tele' => 'required|unique:societies',
                'socialmedia' => 'required|unique:societies',
               // 'description' => 'required|string',
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $file = $request->file('file');

            $filename = $request['ice'].'-ste-logo-'.date('Y-m-d').'.'.$file->getClientOriginalExtension();

            $ste = new Society();
            $ste->ice = $request['ice'];
            $ste->email = $request['email'];
            $ste->tele = $request['tele'];
            $ste->socialmedia = $request['socialmedia'];
           // $ste->description = $request['description'];
            $ste->file = $filename;

            $ste->save();

            if($file)
            {
                $this->storeFile($file,$filename,request()->segment(2));
            }

            return response()->json(['success'=>'l\'article a bien été ajouté']);
        }

        /********************************************************************** */

            if ($request->isMethod('put') )
            {
                $validator = Validator::make($request->all(), [

                    'attach' => 'required|integer',
                    'steattach' => 'required',
                    'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
    
                if ($validator->fails())
                {
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }

                 $imgName = str_replace(' ','-',$request['steattach']);
                 
                 $files = $request->file('file');

                 $ste = Society::find($request['attach']);

                if($files)
                {
                    $filename = $request['steattach'].'image-'.date('Y-m-d').time().'.'.$files->getClientOriginalExtension();

                        
                        $this->storeFile($files,$filename,request()->segment(2),$request['steattach']);

                        $gallery = new Gallery();
                        
                        $gallery->files = $filename;

                        $gallery->society()->associate($ste);

                        $gallery->save();
                   /* foreach ($files as $k=> $file)
                    {
                        $filename =  $imgName.DIRECTORY_SEPARATOR.$imgName.'-'.($k+1).'-'.date('Y-m-d').time().'.'.$file->getClientOriginalExtension();
                        Storage::disk('local')->put($filename,File::get($file));
                        
                        $gallery->files = $filename;

                        $gallery->society()->associate($ste);

                        $gallery->save();
        
                      
                    }*/
                 
                }
                return response()->json(['success'=>'les fichies']);
            }

        /******Get request from the browser when call it from route  admin/article */


        $societies  = Society::all();

        return view('AdminPanel.Society.index',compact('societies'));
    }

    public function projects (Request $request)
    {
         /****add new project**/
         if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [

                'nom' => 'required|string|unique:projects',
                'content' => 'nullable|string',
                'duree' => 'required',
                'datedebut' => 'required',
                'societie' => 'required',
                'category' => 'required|integer',
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $file = $request->file('file');

            $filename = $request['nom'].'-project--'.date('Y-m-d').time().'-.'.$file->getClientOriginalExtension();

            $project = new Project();
            $project->nom = $request['nom'];
            $project->content = $request['content'];
            $project->duree = $request['duree'];
            $project->datedebut = $request['datedebut'];
            $project->society()->associate($request['societie']);
            $project->category()->associate($request['category']);
            $project->save();

            if($file)
            {
                $ste = Society::find($request['societie']);

                $this->storeFile($file,$filename,request()->segment(2),$ste->ice);

                $gallery = new Gallery();
                
                $gallery->files = $filename;
                $gallery->type = 'images';
                $gallery->project()->associate($project);

                $gallery->save();
            }

            return response()->json(['success'=>'le project a bien été ajouté']);
        }
/********************************************************************** */

if ($request->isMethod('put') )
{
    $validator = Validator::make($request->all(), [

        'attach' => 'required|integer',
        'projectattach' => 'required|string',
        'stename' => 'required|string',
        'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($validator->fails())
    {
        return response()->json(['errors'=>$validator->errors()->all()]);
    }

     $imgName = str_replace(' ','-',$request['projectattach']);
     
     $files = $request->file('file');

     $project = Project::find($request['attach']);

    if($files)
    {
            $filename = $request['projectattach'].'image-'.date('Y-m-d').time().'.'.$files->getClientOriginalExtension();

            
            $this->storeFile($files,$filename,request()->segment(2),$request['stename'].DIRECTORY_SEPARATOR.$request['projectattach']);

            $gallery = new Gallery();
            
            $gallery->files = $filename;
            
            $gallery->type = 'images';

            $gallery->project()->associate($project);

            $gallery->save();
       /* foreach ($files as $k=> $file)
        {
            $filename =  $imgName.DIRECTORY_SEPARATOR.$imgName.'-'.($k+1).'-'.date('Y-m-d').time().'.'.$file->getClientOriginalExtension();
            Storage::disk('local')->put($filename,File::get($file));
            
            $gallery->files = $filename;

            $gallery->society()->associate($ste);

            $gallery->save();

          
        }*/
     
    }
    return response()->json(['success'=>'les fichies a été attacher']);
}
        $societies   = Society::all();
      
        $projects    = Project::all();

        $categories  = Category::where('type','Project')->get();

        return view('AdminPanel.Project.index',compact('societies','projects','categories'));  
    }

    public function prospects()
    {
        return view('AdminPanel.Prospect.index');
    }

    public function galleries(Request $request)
    {
    
    }

    public function categories(Request $request)
    {

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required|string|unique:categories',
                'types' => 'required',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $categorie = new Category();
            $categorie->name = $request['name'];
            $categorie->type = $request['types'];
            $categorie->save();


            return response()->json(['success'=>'la categorie a bien été ajouté']);
        }

        $categories = Category::all();

        return view('AdminPanel.Category.index',compact('categories'));
    }

    /*****************Function to store the file(image) in to Storage path*********************/

    /**
     * @param $file
     * @param $filename
     * @param $folderName
     */
    private function storeFile($file,$filename,$folderName,$supdirectory = null)
    {
        if($supdirectory)
        {
            Storage::disk('local')->put($folderName.DIRECTORY_SEPARATOR.$supdirectory.DIRECTORY_SEPARATOR.$filename,File::get($file));
        }
        else
        {
            Storage::disk('local')->put($folderName.DIRECTORY_SEPARATOR.$filename,File::get($file));
        }
        
    }

    /******************Delete function work for same Models :D **********************************/

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function delete(Request $request)
    {
        $model ='App\\'.request()->segment(2);

        $items  = $model::where('id',$request->deleted)->first();

        if($items)
        {

            $items->delete($request->deleted);
            
            if(Storage::disk('local')->get(request()->segment(2).DIRECTORY_SEPARATOR.$items->file))
            {
        
               unlink(storage_path('app'.DIRECTORY_SEPARATOR.request()->segment(2).DIRECTORY_SEPARATOR.$items->file));
   
            }

            if(request()->segment(2)==='Society')
            {
                $galleries = Gallery::where('society_id',$request->deleted)->get();

                foreach($galleries as $gallery)
                {
                    $gallery->delete($request->deleted);
                }
                File::deleteDirectory(storage_path('app'.DIRECTORY_SEPARATOR.'Society'.DIRECTORY_SEPARATOR.$request->deletedstename));
           // unlink(storage_path('app'.DIRECTORY_SEPARATOR.'Society'.DIRECTORY_SEPARATOR.$request->deletedstename));
              
            }

            return redirect()->back()->with('message', 'la suppression a été effectuée!');
        }

        return redirect()->back()->with('message', 'un probleme est survenu lors de la suppression ');
    }

    public function deleteProject(Request $request)
    {

           $project  = Project::where('id',$request->deleted)->first();
       
            $galleries = Gallery::where('project_id',$request->deleted)->get();

            foreach($galleries as $gallery)
            {
                
                unlink(storage_path('app'.DIRECTORY_SEPARATOR.request()->segment(2).DIRECTORY_SEPARATOR.$request->deletedstename.DIRECTORY_SEPARATOR.$gallery->files));
                
                $gallery->delete();
                
            }
            $project->delete();
        return redirect()->back()->with('message', 'la suppression a été effectuée!');
    }
}
