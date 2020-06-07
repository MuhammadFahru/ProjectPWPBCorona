<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.form.form-artikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        dd(Auth::user());
        $article = new Article();

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $picture = storeImage($_FILES['headline_picture'],'assets/article/img');

        $article::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'author' => 'w',
            'headline_picture' => $picture

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.detail-post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Article::destroy($id)){
            return redirect('/article')->with('success','Data Berhasil Dihapus');
        }else{
             return redirect('/article')->with('error','Data Gagal Dihapus');
        }
    }

    /**
     * Display a listing of the resource for admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDashboard(){
        $data['articles'] = Article::get();
        return view('dashboard.artikel',$data);
    }

    public function uploadCkeditor(Request $request){
        $name = $request->file('upload')->getClientOriginalName();
        $validation = [
            'jpg',
            'png',
            'jpeg'
        ];
        $request->upload->move(public_path('assets/article/ckeditor_uploaded'),$name);
        echo json_encode(array('file_name' => $request->file('upload')
            ->getClientOriginalName()));
    }


    public function fileBrowser(){
        $paths = glob(public_path('assets/article/ckeditor_uploaded/*'));
        $fileNames = array(); 
        foreach ($paths as $path) {
            # code...
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' => $fileNames
        );
        return view('article/file-browser')->with($data);
    }
}
