<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
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
        $data['article'] = Article::get();
        for ($i=0; $i < sizeof($data['article']); $i++) { 
            $data['article'][$i]['author'] = User::find($data['article'][$i]['author'], ['name'])['name'];
        } 
        
        return view('article.index',$data);
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

        $article = new Article();

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);


        if ($_FILES['headline_picture']['error']== 4) {
            return redirect(url()->previous())->with('error','Please Insert Image!');
        }
        $picture = storeImage($_FILES['headline_picture'],'assets/article/img');

        $article::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'author' => Auth::user()->id,
            'headline_picture' => $picture

        ]);
        $article->save();

        return redirect('/article')->with('success','Data Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['article'] = Article::find($id);
        return view('article.detail-post',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data['article'] = Article::find($id);
        return view('dashboard.form.form-artikel',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article = Article::find($id);
        $article->title  = $request->get('title');
        if ($_FILES['headline_picture']['error'] == 4 && empty($article->headline_picture)) {
            return redirect(url()->current())->with('error','Insert Picture!');
        }else if($_FILES['headline_picture']['error'] == 0){
            $picture = storeImage($_FILES['headline_picture'],'assets/article/img');
        }
        $article->content = $request->get('content');
        $article->save();
        
        return redirect('/article')->with('success', 'Article Updated!');    
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
