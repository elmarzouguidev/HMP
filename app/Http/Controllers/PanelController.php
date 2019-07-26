<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Society;
use App\Gallery;
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


        $categories  = Category::all();

        $articles    = Article::all();

        return view('AdminPanel.Article.index',compact('categories','articles'));
    }


    /***********************Society******** */
    public function societies (Request $request)
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

            $filename = $request['ice'].'ste-image-new'.time().'--'.date('Y-m-d').'.'.$file->getClientOriginalExtension();

            $ste = new Society();
            $ste->ice = $request['ice'];
            $ste->email = $request['email'];
            $ste->tele = $request['tele'];
            $ste->socialmedia = $request['socialmedia'];
           // $ste->description = $request['description'];
            $ste->files = $filename;

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

                        
                        $this->storeFile($files,$filename,request()->segment(2));

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

    /*****************Function to store the file(image) in to Storage path*********************/

    /**
     * @param $file
     * @param $filename
     * @param $folderName
     */
    private function storeFile($file,$filename,$folderName)
    {
        Storage::disk('local')->put($folderName.DIRECTORY_SEPARATOR.$filename,File::get($file));
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
                // Storage::delete($file);
                unlink(storage_path('app'.DIRECTORY_SEPARATOR.request()->segment(2).DIRECTORY_SEPARATOR.$items->file));
            }

            return redirect()->back()->with('message', 'la suppression a été effectuée!');
        }

        return redirect()->back()->with('message', 'un probleme est survenu lors de la suppression ');
    }
}
