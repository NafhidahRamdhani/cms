<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PDF;

class ArticleController extends Controller
{

    public function viewArticles($id){
        $article = Article::find($id);
        $article = json_decode(json_encode($article));
        return view('articleku',['id'=> $id])->with(compact('article'));
    }
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index(){
        $article = Article::all();
        return view('manage',['article' => $article]);
    }
    public function add(){
        return view('addarticle');
    }
    
    public function create(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');  
        }
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
            'result' => $request->result,
            'order' => $request->order
        ]);
        return redirect('/manage');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;

        if($article->featured_image && 
        file_exists(storage_path('app/public/' . $article->featured_image))){
        \Storage::delete('public/'.$article->featured_image);
    }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;
        $article->save();
        return redirect('/manage');
    }

        public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
 }

        public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('Upload-Report.articles_pdf',['article'=>$article]);
        return $pdf->stream();
        
   }
   

}
